<?php

namespace Problematic\GuestbookBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

abstract class Address
{
    
    protected $id;
    protected $name;
    protected $phone;
    /**
     * @Assert\Email()
     */
    protected $email;
    protected $line_1;
    protected $line_2;
    protected $city;
    protected $state;
    protected $zip;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setLine1($line_1)
    {
        $this->line_1 = $line_1;
    }
    
    public function getLine1()
    {
        return $this->line_1;
    }
    
    public function setLine2($line_2)
    {
        $this->line_2 = $line_2;
    }
    
    public function getLine2()
    {
        return $this->line_2;
    }
    
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    public function getCity()
    {
        return $this->city;
    }
    
    public function setState($state)
    {
        $this->state = $state;
    }
    
    public function getState()
    {
        return $this->state;
    }
    
    public function setZip($zip)
    {
        $this->zip = $zip;
    }
    
    public function getZip()
    {
        return $this->zip;
    }
    
}