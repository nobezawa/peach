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

    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    public function getPath() {
        return $this->path;
    }

    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    public function addData($data) {
        $this->data .= $data;
        return $this;
    }

    public function getData() {
        return $this->data;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setMode($mode) {
        $this->mode = $mode;
        return $this;
    }

    public function getMode() {
        return $this->mode;
    }

    public function setDirMode($mode) {
        $this->dir_mode = $mode;
        return $this;
    }

    public function getDirMode() {
        return $this->dir_mode;
    }

    public function getSize() {
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