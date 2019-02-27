<?php

// src/Entity/Product.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    private $name;

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    private $category;

    /**
     * @Assert\NotBlank()
     * @ORM\column(type="string")
     */
    private $sku;

    /**
     * @Assert\GreaterThan(0)
     * @ORM\column(type="integer")
     */
    private $quantity;

    /**
     * @Assert\GreaterThan(0)
     * @ORM\column(type="decimal")
     */
    private $price;

    /**
     * @var \DateTime|null
     * @ORM\column(type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     * @ORM\column(type="datetime")
     */
    private $modifiedAt;


    public function __construct()
    {
        $this->modifiedAt = new \DateTime('now');
        $this->createdAt = new \DateTime('now');
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Product
     */
    public function setName($name): Product
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return Product
     */
    public function setCategory($category): Product
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku): Product
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return decimal|null
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param decimal $price
     *
     * @return Product
     */
    public function setPrice($price): Product
    {
        $this->price = $price ;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity): Product
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Product
     */
    public function setCreatedAt($createdAt): Product
    {
//        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getModifiedAt(): ?\DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     *
     * @return Product
     */
    public function setModifiedAt($modifiedAt): Product
    {
//        $this->modifiedAt = $modifiedAt;
        return $this;
    }
}