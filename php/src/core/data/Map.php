<?php


namespace peach\core\data;

/**
 * Map
 *
 * @author  Nobezawa
 * @package core\data
 */
class Map implements MapInterface  {

    private $list;

    public function __construct(array $list = array()) {
        $this->setList($list);
    }

    public function set($key, $data) {
        $this->list[$key] = $data;
        return $this;
    }

    public function add($data) {
        $this->list[] = $data;
        return $this;
    }

    public function get($key) {
        return $this->has($key) ? $this->list[$key] : null;
    }

    public function setList(array $list) {
        $this->list = $list;
        return $this;
    }

    public function getList() {
        return $this->list;
    }

    public function count() {
        return count($this->list);
    }

    public function has($key) {
        return array_key_exists($key, $this->list);
    }

    public function take($num) {
        $tmp = array_slice($this->list, 0, $num);
        if (! $tmp) return null;
        $res = new self($tmp);
        while ($num--) array_shift($this->list);
        return $res;
    }

}
