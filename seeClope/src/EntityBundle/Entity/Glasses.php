<?php

namespace EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Glasses
 * @Vich\Uploadable
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
    /**
     * @var string
     */
    private $sex;


    /**
     * Set sex
     *
     * @param string $sex
     * @return Glasses
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * @var integer
     */
    private $price;


    /**
     * Set price
     *
     * @param integer $price
     * @return Glasses
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="glasses_image", fileNameProperty="firstImageName")
     *
     * @var File
     */
    private $firstImageFile;

    /**
     * @var string
     */
    private $firstImageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="glasses_image", fileNameProperty="secondImageName")
     *
     * @var File
     */
    private $secondImageFile;

    /**
     * @var string
     */
    private $secondImageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="glasses_image", fileNameProperty="thirdImageName")
     *
     * @var File
     */
    private $thirdImageFile;

    /**
     * @var string
     */
    private $thirdImageName;


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Glasses
     */
    public function setFirstImageFile(File $image = null)
    {
        $this->firstImageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get firstImageFile
     *
     * @return string 
     */
    public function getFirstImageFile()
    {
        return $this->firstImageFile;
    }

    /**
     * Set firstImageName
     *
     * @param string $firstImageName
     * @return Glasses
     */
    public function setFirstImageName($firstImageName)
    {
        $this->firstImageName = $firstImageName;

        return $this;
    }

    /**
     * Get firstImageName
     *
     * @return string 
     */
    public function getFirstImageName()
    {
        return $this->firstImageName;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Glasses
     */
    public function setSecondImageFile(File $image = null)
    {
        $this->secondImageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get secondImageFile
     *
     * @return string 
     */
    public function getSecondImageFile()
    {
        return $this->secondImageFile;
    }

    /**
     * Set secondImageName
     *
     * @param string $secondImageName
     * @return Glasses
     */
    public function setSecondImageName($secondImageName)
    {
        $this->secondImageName = $secondImageName;

        return $this;
    }

    /**
     * Get secondImageName
     *
     * @return string 
     */
    public function getSecondImageName()
    {
        return $this->secondImageName;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Glasses
     */
    public function setThirdImageFile(File $image = null)
    {
        $this->thirdImageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get thirdImageFile
     *
     * @return string 
     */
    public function getThirdImageFile()
    {
        return $this->thirdImageFile;
    }

    /**
     * Set thirdImageName
     *
     * @param string $thirdImageName
     * @return Glasses
     */
    public function setThirdImageName($thirdImageName)
    {
        $this->thirdImageName = $thirdImageName;

        return $this;
    }

    /**
     * Get thirdImageName
     *
     * @return string 
     */
    public function getThirdImageName()
    {
        return $this->thirdImageName;
    }
}
