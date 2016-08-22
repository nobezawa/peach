<?php

namespace peach\core\io;

use Exception;

/**
 * File
 *
 *
 * @author  Nobezawa
 * @package peach\core\io
 */
class File implements FileInterface {

    private $path;
    private $data;
    private $type;
    private $mode;
    private $dir_mode;

    public function __construct($path = '') {
        $this->set_path($path);
    }

    public function set_path($path) {
        $this->path = $path;
        return $this;
    }

    public function get_path() {
        return $this->path;
    }

    public function set_data($data) {
        $this->data = $data;
        return $this;
    }

    public function add_data($data) {
        $this->data .= $data;
        return $this;
    }

    public function get_data() {
        return $this->data;
    }

    public function set_type($type) {
        $this->type = $type;
        return $this;
    }

    public function get_type() {
        return $this->type;
    }

    public function set_mode($mode) {
        $this->mode = $mode;
        return $this;
    }

    public function get_mode() {
        return $this->mode;
    }

    public function set_dir_mode($mode) {
        $this->dir_mode = $mode;
        return $this;
    }

    public function get_dir_mode() {
        return $this->dir_mode;
    }

    public function get_size() {
        return filesize($this->path);
    }

    public function exist() {
        return file_exists($this->path);
    }

    public function save() {
        $base = new Dir(dirname($this->path));
        if ( ! $base->exist()) {
            $base->set_mode($this->dir_mode)->save();
        }
        $tmp = file_put_contents($this->path, $this->data);
        if ($tmp === false) {
            throw new Exception('ファイルの保存に失敗（'.$this->path().'）');
        }
        if ($this->mode !== null) {
            if ( ! chmod($this->path, $this->mode)) {
                throw new Exception('ファイルの権限変更に失敗（'.$this->path().'）');
            }
        }
        return $this;
    }

    public function load() {
        $tmp = file_get_contents($this->path);
        if ($tmp === false) {
            throw new Exception('ファイルの読込に失敗（'.$this->path().'）');
        }
        $this->data = $tmp;
        $this->mode = fileperms($this->path) & 0777;
        return $this;
    }

    public function delete() {
        if ( ! unlink($this->path)) {
            throw new Exception('ファイルの削除に失敗（'.$this->path().'）');
        }
        return $this;
    }

    public function move($path) {
        if ( ! rename($this->path, $path)) {
            throw new Exception('ファイルの移動に失敗（'.$this->path().'）');
        }
        $this->path = $path;
        return $this;
    }

    public function copy($path) {
        if ( ! copy($this->path, $path)) {
            throw new Exception('ファイルの複製に失敗（'.$this->path().'）');
        }
        $this->path = $path;
        return $this;
    }

}