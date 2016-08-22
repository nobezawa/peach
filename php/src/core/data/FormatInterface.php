<?php


namespace peach\core\data;

/**
 * FormatInterface
 *
 * @author  Nobezawa
 * @package peach\core\data
 * @version 1.0
 */
interface FormatInterface  {

    /**
     * Gen
     *
     * @return  Format
     */
    public static function gen();

    /**
     * Set data
     *
     * @param  mixed  $data
     * @return mixed
     */
    public function setData($data);

    /**
     * Set Type
     *
     * @param  string $type
     * @return mixed
     */
    public function setType($type = 'json');

    /**
     * to Array
     *
     * @return array
     */
    public function toArray();

    /**
     * To Json
     *
     * @return string
     */
    public function toJson();

    /**
     * To Xml
     *
     * @return string
     */
    public function toXml();

}
