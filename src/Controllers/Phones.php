<?php
namespace App\Controllers;

class Phones {

    private $id;
    private $phone;
    private $price;
    private $color;
    private $image;
    private $status;

    public function __construct($id,$phone,$price,$color,$image,$status)
    {
        $this->id=$id;
        $this->phone=$phone;
        $this->price=$price;
        $this->color=$color;
        $this->image=$image;
        $this->status=$status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

}
