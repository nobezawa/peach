<?php

namespace peach\core\data;

/**
 * Format
 *
 * @author  Nobezawa
 * @package peach\core\format
 * @implements FormatInterface
 * @version 1.0
 */
class Format
implements FormatInterface {

    private static $obj;

    private $data;

    private $type = 'json';

    public static function gen() {
        if (self::$obj == null) {
            self::$obj = new Format();
        }
        return self::$obj;
    }

    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    public function getData() {
        return $this->data;
    }

    public function setType($type = 'json') {
        $this->type = $type;
        return $this;
    }

    public function toArray() {
        if (is_array($this->data)) return $this->data;
        $this->data = (array) $this->data;
        return $this;
    }

    public function toJson() {
        if (is_array($this->data)) {
            return json_encode($this->data);
        }
        return '';
    }

    public function toXml() {
        // TODO: Implement toXml() method.
    }
}
