<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="dictionary_bank", options={"comment":"Справочник банков"})
 */
class DictionaryBank implements DictionaryBankInterface{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", options={"comment":"Код банка (три последние цифры кода по МФО"})
     */
    protected $code;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Головной банк"})
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DictionaryBank", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\DictionaryBank", mappedBy="parent")
     */
    protected $children;

    /**
     * @ORM\Column(type="string", options={"comment":"Наименование банка"})
     */
    protected $name;

    /**
     * @ORM\Column(type="string", options={"comment":"Код по МФО"})
     */
    protected $mfo;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"SWIFT BIC банковский идентификационный код (ISO 9362:2014)"})
     */
    protected $swift;

    /**
     * @ORM\Column(type="string", options={"comment":"Адрес в виде символьной строки"})
     */
    protected $symbolicAddress;

    public function __construct() {
        $this->children = new ArrayCollection();
    }

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
     * Set code
     *
     * @param string $code
     * @return DictionaryBank
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return DictionaryBank
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return DictionaryBank
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mfo
     *
     * @param string $mfo
     * @return DictionaryBank
     */
    public function setMfo($mfo)
    {
        $this->mfo = $mfo;

        return $this;
    }

    /**
     * Get mfo
     *
     * @return string 
     */
    public function getMfo()
    {
        return $this->mfo;
    }

    /**
     * Set swift
     *
     * @param string $swift
     * @return DictionaryBank
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * Get swift
     *
     * @return string 
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * Add children
     *
     * @param \AppBundle\Entity\DictionaryBank $children
     * @return DictionaryBank
     */
    public function addChild(DictionaryBankInterface $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \AppBundle\Entity\DictionaryBank $children
     */
    public function removeChild(DictionaryBankInterface $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set symbolicAddress
     *
     * @param string $symbolicAddress
     * @return DictionaryBank
     */
    public function setSymbolicAddress($symbolicAddress)
    {
        $this->symbolicAddress = $symbolicAddress;

        return $this;
    }

    /**
     * Get symbolicAddress
     *
     * @return string 
     */
    public function getSymbolicAddress()
    {
        return $this->symbolicAddress;
    }

    public function __toString() {
        return $this->getName();
    }
}
