<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beer
 *
 * @ORM\Table(name="beer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BeerRepository")
 */
class Beer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Foobar", mappedBy="beer")
     */
    private $foobar;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Beer
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
     * Constructor
     */
    public function __construct()
    {
        $this->foobar = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add foobar
     *
     * @param \AppBundle\Entity\Foobar $foobar
     *
     * @return Beer
     */
    public function addFoobar(\AppBundle\Entity\Foobar $foobar)
    {
        $this->foobar[] = $foobar;

        return $this;
    }

    /**
     * Remove foobar
     *
     * @param \AppBundle\Entity\Foobar $foobar
     */
    public function removeFoobar(\AppBundle\Entity\Foobar $foobar)
    {
        $this->foobar->removeElement($foobar);
    }

    /**
     * Get foobar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFoobar()
    {
        return $this->foobar;
    }
}
