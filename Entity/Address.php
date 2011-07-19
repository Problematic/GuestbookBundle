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
     * @ORM\Column(type="string")
     */
    protected $line_1;
    /**
     * @ORM\Column(type="string", required="false")
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
