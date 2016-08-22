<?php


namespace peach\core\io;

/**
 * DirInterface
 *
 * @author  Nobezawa
 * @package peach\core\io
 */
interface DirInterface {

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
     * Delete
     *
     * @return  self
     */
    public function delete();

}
