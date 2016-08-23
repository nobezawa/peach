<?php

namespace peach\core\io;

/**
 * FileInterface
 *
 * Fileの操作を実行する
 *
 * @author  Nobezawa
 * @package library\core\io
 */
interface FileInterface {

    /**
     * Constructor
     *
     * @param  string  $path
     */
    public function __construct($path = '');

    /**
     * Set path
     *
     * @param   string  $path
     * @return  self
     */
    public function setPath($path);

    /**
     * Get path
     *
     * @return  string
     */
    public function getPath();

    /**
     * Set data
     *
     * @param   mixed  $data
     * @return  self
     */
    public function setData($data);

    /**
     * Add data
     *
     * @param   mixed  $data
     * @return  self
     */
    public function addData($data);

    /**
     * Get data
     *
     * @return  mixed
     */
    public function getData();

    /**
     * Set type
     *
     * @param   string  $type
     * @return  self
     */
    public function setType($type);

    /**
     * Get type
     *
     * @return  string
     */
    public function getType();

    /**
     * Set mode
     *
     * @param   integer  $mode
     * @return  self
     */
    public function setMode($mode);

    /**
     * Get mode
     *
     * @return  integer
     */
    public function getMode();

    /**
     * Set directory mode
     *
     * @param   integer  $mode
     * @return  self
     */
    public function setDirMode($mode);

    /**
     * Get directory mode
     *
     * @return  integer
     */
    public function getDirMode();

    /**
     * Get size
     *
     * @return  integer
     */
    public function getSize();

    /**
     * Check exist
     *
     * @return  boolean
     */
    public function exist();

    /**
     * Save
     *
     * @return  self
     */
    public function save();

    /**
     * Load
     *
     * @return  self
     */
    public function load();

    /**
     * Delete
     *
     * @return  self
     */
    public function delete();

    /**
     * Move to specified path
     *
     * @param   string  $path
     * @return  self
     */
    public function move($path);

    /**
     * Copy to specified path
     *
     * @param   string  $path
     * @return  self
     */
    public function copy($path);

}
