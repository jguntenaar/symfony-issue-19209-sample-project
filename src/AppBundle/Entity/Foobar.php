<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foobar
 *
 * @ORM\Table(name="foobar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FoobarRepository")
 */
class Foobar
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Beer", inversedBy="foobar")
     */
    private $beer;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cake", inversedBy="foobar")
     */
    private $cake;

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
     * Set beer
     *
     * @param \AppBundle\Entity\Beer $beer
     *
     * @return Foobar
     */
    public function setBeer(\AppBundle\Entity\Beer $beer = null)
    {
        $this->beer = $beer;

        return $this;
    }

    /**
     * Get beer
     *
     * @return \AppBundle\Entity\Beer
     */
    public function getBeer()
    {
        return $this->beer;
    }

    /**
     * Set cake
     *
     * @param \AppBundle\Entity\Cake $cake
     *
     * @return Foobar
     */
    public function setCake(\AppBundle\Entity\Cake $cake = null)
    {
        $this->cake = $cake;

        return $this;
    }

    /**
     * Get cake
     *
     * @return \AppBundle\Entity\Cake
     */
    public function getCake()
    {
        return $this->cake;
    }
}
