<?php
    class Something
    {
        private $test;

    function __construct($test)
    {
        $this->test = $test;
    }

    function setStuff($stuff)
    {
        $this->test = (string) $stuff;
    }

    function getStuff($stuff)
    {
        return $this->test;
    }

    static function getAll()
    {
        return $_SESSION['list_of_tests'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_tests'] = array();
    }

    function save()
    {
        array_push($_SESSION['list_of_tests'], $this);
    }
?>
