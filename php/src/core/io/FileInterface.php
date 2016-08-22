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
    public function set_path($path);

    /**
     * Get path
     *
     * @return  string
     */
    public function get_path();

    /**
     * Set data
     *
     * @param   mixed  $data
     * @return  self
     */
    public function set_data($data);

    /**
     * Add data
     *
     * @param   mixed  $data
     * @return  self
     */
    public function add_data($data);

    /**
     * Get data
     *
     * @return  mixed
     */
    public function get_data();

    /**
     * Set type
     *
     * @param   string  $type
     * @return  self
     */
    public function set_type($type);

    /**
     * Get type
     *
     * @return  string
     */
    public function get_type();

    /**
     * Set mode
     *
     * @param   integer  $mode
     * @return  self
     */
    public function set_mode($mode);

    /**
     * Get mode
     *
     * @return  integer
     */
    public function get_mode();

    /**
     * Set directory mode
     *
     * @param   integer  $mode
     * @return  self
     */
    public function set_dir_mode($mode);

    /**
     * Get directory mode
     *
     * @return  integer
     */
    public function get_dir_mode();

    /**
     * Get size
     *
     * @return  integer
     */
    public function get_size();

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
