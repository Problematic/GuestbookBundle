<?php

namespace Problematic\GuestbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Problematic\GuestbookBundle\Model\Address as BaseAddress;

/**
 * @ORM\Entity
 */
class Address extends BaseAddress
{
    
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string", nullable="true")
     */
    protected $phone;
    /**
     * @ORM\Column(type="string", nullable="true")
     */
    protected $email;
    /**
     * @ORM\Column(type="string")
     */
    protected $line_1;
    /**
     * @ORM\Column(type="string", nullable="true")
     */
    protected $line_2;
    /**
     * @ORM\Column(type="string")
     */
    protected $city;
    /**
     * @ORM\Column(type="string")
     */
    protected $state;
    /**
     * @ORM\Column(type="string")
     */
    protected $zip;
    
}
