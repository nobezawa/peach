<?php


namespace peach\core\io;

use Exception;

/**
 * Dir
 *
 * Directoryを操作する
 *
 * @author  Nobezawa
 * @package peach\core\io
 */
class Dir implements DirInterface {

    const E_EXIST     = 'ディレクトリが存在しません。';
    const E_OPEN      = 'ディレクトリが開けませんでした。';
    const E_MOVE_FAIL = 'ディレクトリの移動に失敗しました。';

    private $path;
    private $mode;

    private $name;
    private $list;

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

    public function setMode($mode) {
        $this->mode = $mode;
        return $this;
    }

    public function getMode() {
        return $this->mode;
    }

    public function exist() {
        return is_dir($this->path);
    }

    public function save() {
        $mode = $this->mode;
        $base = new self(dirname($this->path));
        if (! $base->exist()) $base->set_mode($mode)->save();
        if (! $this->exist()) mkdir($this->path);
        if ($mode !== null) chmod($this->path, $mode);
        return $this;
    }

    public function delete() {
        rmdir($this->path);
        return $this;
    }

    /**
     * create
     *
     * @param   string  $name
     * @return  string
     * @throws  Exception
     */
    public final static function create($name) {
        if (! is_dir($name)) throw new Exception(self::E_EXIST);
        return new Dir($name);
    }

    /**
     * Get name
     *
     * @return  string
     */
    public final function getName() {
        return $this->name;
    }

    /**
     * move
     *
     * @param   string  $name
     * @return  self
     * @throws  Exception
     */
    public final function move($name) {
        $path = rtrim($this->name, '/');
        if (mb_substr($name, -1) == '/') $name .= basename($path);
        if (! rename($path, $name)) throw new Exception(self::E_MOVE_FAIL);
        $this->name = $name;
        return $this;
    }

}
