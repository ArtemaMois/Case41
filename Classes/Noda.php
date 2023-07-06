<?php
class Noda 
{
    private $title;
    private $date;
    private $descript;
    public $left;
    public $right;

    public function __construct($title, $date, $descript)
    {
        $this->title = $title;
        $this->date = $date;
        $this->descript = $descript;
        $this->left = NULL;
        $this->right = NULL;
    }

    public function gettitle()
    {
        return $this->title;
    }

    public function settitle($title)
    {
        $this->title = $title;
    }

    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date)
    {
        $this->date = $date;
    }

    public function getdescript()
    {
        return $this->descript;
    }

    public function setdescript($descript)
    {
        $this->descript = $descript;
    }


}