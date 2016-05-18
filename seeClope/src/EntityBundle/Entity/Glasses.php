<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Glasses
 */
class Glasses
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $shape;

    /**
     * @var string
     */
    private $leftcorrection;

    /**
     * @var string
     */
    private $rightcorrection;

    /**
     * @var \DateTime
     */
    private $dimensions;

    /**
     * @var string
     */
    private $glasstype;

    /**
     * @var string
     */
    private $color;


    /**
     * Set shape
     *
     * @param string $shape
     * @return Glasses
     */
    public function setShape($shape)
    {
        $this->shape = $shape;

        return $this;
    }

    /**
     * Get shape
     *
     * @return string 
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Set leftcorrection
     *
     * @param string $leftcorrection
     * @return Glasses
     */
    public function setLeftcorrection($leftcorrection)
    {
        $this->leftcorrection = $leftcorrection;

        return $this;
    }

    /**
     * Get leftcorrection
     *
     * @return string 
     */
    public function getLeftcorrection()
    {
        return $this->leftcorrection;
    }

    /**
     * Set rightcorrection
     *
     * @param string $rightcorrection
     * @return Glasses
     */
    public function setRightcorrection($rightcorrection)
    {
        $this->rightcorrection = $rightcorrection;

        return $this;
    }

    /**
     * Get rightcorrection
     *
     * @return string 
     */
    public function getRightcorrection()
    {
        return $this->rightcorrection;
    }

    /**
     * Set dimensions
     *
     * @param \DateTime $dimensions
     * @return Glasses
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    /**
     * Get dimensions
     *
     * @return \DateTime 
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Set glasstype
     *
     * @param string $glasstype
     * @return Glasses
     */
    public function setGlasstype($glasstype)
    {
        $this->glasstype = $glasstype;

        return $this;
    }

    /**
     * Get glasstype
     *
     * @return string 
     */
    public function getGlasstype()
    {
        return $this->glasstype;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Glasses
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * @var string
     */
    private $brand;


    /**
     * Set brand
     *
     * @param string $brand
     * @return Glasses
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @var integer
     */
    private $glassdiameter;

    /**
     * @var integer
     */
    private $glassbridge;

    /**
     * @var integer
     */
    private $glassarm;


    /**
     * Set glassdiameter
     *
     * @param integer $glassdiameter
     * @return Glasses
     */
    public function setGlassdiameter($glassdiameter)
    {
        $this->glassdiameter = $glassdiameter;

        return $this;
    }

    /**
     * Get glassdiameter
     *
     * @return integer 
     */
    public function getGlassdiameter()
    {
        return $this->glassdiameter;
    }

    /**
     * Set glassbridge
     *
     * @param integer $glassbridge
     * @return Glasses
     */
    public function setGlassbridge($glassbridge)
    {
        $this->glassbridge = $glassbridge;

        return $this;
    }

    /**
     * Get glassbridge
     *
     * @return integer 
     */
    public function getGlassbridge()
    {
        return $this->glassbridge;
    }

    /**
     * Set glassarm
     *
     * @param integer $glassarm
     * @return Glasses
     */
    public function setGlassarm($glassarm)
    {
        $this->glassarm = $glassarm;

        return $this;
    }

    /**
     * Get glassarm
     *
     * @return integer 
     */
    public function getGlassarm()
    {
        return $this->glassarm;
    }

    /**
     * @var \EntityBundle\Entity\User
     */
    private $user;
    
    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     * @return Glasses
     */
    public function setUser(\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
