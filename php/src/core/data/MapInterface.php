<?php

namespace peach\core\data;

/**
 * MapInterface
 *
 * Key - Value形式のデータオブジェクト
 *
 * @author  Nobezawa
 * @package core\data
 */
interface MapInterface  {

    /**
     * Constructor
     *
     * @param  mixed[]  $list
     */
    public function __construct(array $list = array());

    /**
     * Set
     *
     * @param   string  $key
     * @param   mixed   $data
     * @return  self
     */
    public function set($key, $data);

    /**
     * Add
     *
     * @param   mixed  $data
     * @return  self
     */
    public function add($data);

    /**
     * Get
     *
     * @param   string  $key
     * @return  mixed
     */
    public function get($key);

    /**
     * Set list
     *
     * @param   mixed[]  $list
     * @return  self
     */
    public function set_list(array $list);

    /**
     * Get list
     *
     * @return  mixed[]
     */
    public function get_list();

    /**
     * Count
     *
     * @return  integer
     */
    public function count();

    /**
     * Has
     *
     * @param   string  $key
     * @return  boolean
     */
    public function has($key);

    /**
     * Take
     *
     * @param   integer  $num  Number to take list element
     * @return  self
     */
    public function take($num);

}
