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

    /**
     * Set data
     *
     * @param  mixed $data
     * @return self
     */
    public function setData($data) {
        $this->data = $data;
        return $this;
    }

    /**
     * Set type
     *
     * @param  string $type
     * @return self
     */
    public function setType($type = 'json') {
        $this->type = $type;
        return $this;
    }

    /**
     * toArray
     *
     * @return mixed
     */
    public function toArray() {
        if (is_array($this->data)) return $this->data;
        $tmp = array();
        if ($this->type == 'json') {

        }
    }

    public function toJson() {
        if (is_array($this->data)) {
            return json_encode($this->data);
        }
        return '';
    }

    /**
     * To Xml
     *
     * @return string
     */
    public function toXml()
    {
        // TODO: Implement toXml() method.
    }
}
