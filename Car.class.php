<?php
  class Car
  {
    private $type;
    private $color;
    private $number;

    public function __construct()
    {
      $this->type = "ban";
      $this->color = "blue";
      $this->numbar = "12-34";
    }

    public function drive()
    {
        print "くるまさんがはしる";
    }

    public function setColor($newcolor = "white")
    {
      $this->color = $newcolor;
    }

    public function getColor()
    {
      return $this->color;
    }

    public function getNumber()
    {
      return $this->numbar;
    }
    public function getType()
    {
      return $this->type;
    }
  }
