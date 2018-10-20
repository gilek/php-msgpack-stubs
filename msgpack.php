<?php

/**
 * @param mixed $value
 * @return string
 */
function msgpack_pack($value) {}

/**
 * @param string $str
 * @return object|string $object 
 * @return mixed
 */
function msgpack_unpack($str, $object = null) {}

class MessagePack {
    const OPT_PHPONLY = -1001;

    /**
     * @param bool $opt
     */
    public function __construct($opt = null) {}

    /**
     * @param int $option
     * @param mixed $value
     */
    public function setOption($option, $value) {}

    /**
     * @param mixed $value
     * @return string
     */
    public function pack($value) {}

    /**
     * @param string $str
     * @return object|string $object 
     */
    public function unpack($str, $object = null) {}

    /**
     * @return MessagePackUnpacker
     */
    public function unpacker() {}
}

class MessagePackUnpacker {

    /**
     * @param bool $opt
     */
    public function __construct($opt = null) {}

    /**
     * @param int $option
     * @param mixed $value
     */
    public function setOption($option, $value) {}

    /**
     * @param string $str
     */
    public function feed($str) {}

    /**
     * @param string $str
     * @param int $offset
     */
    public function execute($str, $offset) {} 

    /**
     * @param object|string $object
     * @return mixed
     */
    public function data($object = null) {}

    public function reset() {}
}