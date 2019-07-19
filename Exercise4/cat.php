<?php

class Cat
{
  private $_name;
  private $_age;
  private $_color;
  private $_sex;
  private $_breed;

  public function __construct($name, $age, $color, $sex, $breed)
  {
    $this->_name = $name;
    $this->_age = $age;
    $this->_color = $color;
    $this->_sex = $sex;
    $this->_breed = $breed;
  }

  public function setName($name)
  {
    if ($name > 3 && $name < 20) {
      $this->_name = $name;
      return $this;
    } else {
      echo "The name should be between 3 and 20 characters long!";
    }
  }

  public function setAge($age)
  {
    if (is_int($age)) {
      $this->age = $age;
      return $this;
    } else {
      echo "The age is not an integer number!";
    }
  }

  public function setColor($color)
  {
    if ($color > 3 && $color < 10) {
      $this->color = $color;
      return $this;
    } else {
      echo "The name of the color should be between 3 and 10 characters long!";
    }
  }

  public function setSex($sex)
  {
    if ($sex === 'male' || $sex === 'female') {
      $this->sex = $sex;
      return $this;
    } else {
      echo "The sex of the cat should be either male or female!";
    }
  }

  public function setBreed($breed)
  {
    if ($breed > 3 && $breed < 20) {
      $this->breed = $breed;
      return $this;
    } else {
      echo "The breed should be between 3 and 20 characters long!";
    }
  }


  public function getName()
  {
    return $this->_name;
  }


  public function getAge()
  {
    return $this->_age;
  }


  public function getColor()
  {
    return $this->_color;
  }


  public function getSex()
  {
    return $this->_sex;
  }


  public function getBreed()
  {
    return $this->_breed;
  }


  public function getInfos()
  {

    return get_object_vars($this);
  }
}
