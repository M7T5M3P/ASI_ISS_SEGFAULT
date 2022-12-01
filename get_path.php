<?php

class parse_ini
{
    public $path;

    function __construct()
    {
        $this->path = parse_ini_file("sex_info.ini");
    }
    function get_BDD_USER()
    {
        return $this->path['BDD_USER'];
    }
    function get_BDD_HOST()
    {
        return $this->path['BDD_HOST'];
    }
    function get_BDD_PASSWORD()
    {
        return $this->path['BDD_PASSWORD'];
    }
    function get_BDD()
    {
        return $this->path['BDD'];
    }
    function get_JS()
    {
        return $this->path['JS'];
    }
    function get_CSS()
    {
        return $this->path['CSS'];
    }
}