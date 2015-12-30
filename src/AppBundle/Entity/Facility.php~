<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Organization;

/**
 * @ORM\Entity
 * @ORM\Table(name="facility", options={"comment":"Объект (сооружение, здание), которое принадлежит организации. Объект потребляет услуги и лежит в основе субабонента"})
 */
class Facility implements StructuredAddressInterface{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Organization", inversedBy="facilities", cascade={"persist"})
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="id")
     */
    protected $organization;

    /**
     * @ORM\Column(type="string", options={"comment":"Наименование объекта"})
     */
    protected $name;

    /**
     * @ORM\Column(type="float", options={"comment":"Номер участка контролера"})
     */
    protected $sectorNumber;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Адрес в виде символьной строки (не структурированный)"})
     */
    protected $symbolicAddress;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: почтовый индекс"})
     */
    protected $postcode;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: область"})
     */
    protected $nameRegion;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: район"})
     */
    protected $nameDistr;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: сельсовет"})
     */
    protected $nameSelSov;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: тип территориальной единицы (деревня, город и т.п.)"})
     */
    protected $objTypName;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: наименование территориальной единицы"})
     */
    protected $objectName;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: тип элемента улично-дорожной сети"})
     */
    protected $elemTypName;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: наименование элемента улично-дорожной сети"})
     */
    protected $elemName;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: тип строения"})
     */
    protected $typHouse;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: номер строения"})
     */
    protected $numHouse;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: индекс строения"})
     */
    protected $indHouse;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: номер корпуса"})
     */
    protected $numCorp;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: индекс корпуса"})
     */
    protected $indCorp;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: тип помещения"})
     */
    protected $typPom;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: номер помещения"})
     */
    protected $numPom;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Структурированный адрес: индекс помещения"})
     */
    protected $indPom;

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
     * Set name
     *
     * @param string $name
     * @return Facility
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
     * Set symbolicAddress
     *
     * @param string $symbolicAddress
     * @return Facility
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

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Facility
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set nameRegion
     *
     * @param string $nameRegion
     * @return Facility
     */
    public function setNameRegion($nameRegion)
    {
        $this->nameRegion = $nameRegion;

        return $this;
    }

    /**
     * Get nameRegion
     *
     * @return string 
     */
    public function getNameRegion()
    {
        return $this->nameRegion;
    }

    /**
     * Set nameDistr
     *
     * @param string $nameDistr
     * @return Facility
     */
    public function setNameDistr($nameDistr)
    {
        $this->nameDistr = $nameDistr;

        return $this;
    }

    /**
     * Get nameDistr
     *
     * @return string 
     */
    public function getNameDistr()
    {
        return $this->nameDistr;
    }

    /**
     * Set nameSelSov
     *
     * @param string $nameSelSov
     * @return Facility
     */
    public function setNameSelSov($nameSelSov)
    {
        $this->nameSelSov = $nameSelSov;

        return $this;
    }

    /**
     * Get nameSelSov
     *
     * @return string 
     */
    public function getNameSelSov()
    {
        return $this->nameSelSov;
    }

    /**
     * Set objTypName
     *
     * @param string $objTypName
     * @return Facility
     */
    public function setObjTypName($objTypName)
    {
        $this->objTypName = $objTypName;

        return $this;
    }

    /**
     * Get objTypName
     *
     * @return string 
     */
    public function getObjTypName()
    {
        return $this->objTypName;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     * @return Facility
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;

        return $this;
    }

    /**
     * Get objectName
     *
     * @return string 
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * Set elemTypName
     *
     * @param string $elemTypName
     * @return Facility
     */
    public function setElemTypName($elemTypName)
    {
        $this->elemTypName = $elemTypName;

        return $this;
    }

    /**
     * Get elemTypName
     *
     * @return string 
     */
    public function getElemTypName()
    {
        return $this->elemTypName;
    }

    /**
     * Set elemName
     *
     * @param string $elemName
     * @return Facility
     */
    public function setElemName($elemName)
    {
        $this->elemName = $elemName;

        return $this;
    }

    /**
     * Get elemName
     *
     * @return string 
     */
    public function getElemName()
    {
        return $this->elemName;
    }

    /**
     * Set typHouse
     *
     * @param string $typHouse
     * @return Facility
     */
    public function setTypHouse($typHouse)
    {
        $this->typHouse = $typHouse;

        return $this;
    }

    /**
     * Get typHouse
     *
     * @return string 
     */
    public function getTypHouse()
    {
        return $this->typHouse;
    }

    /**
     * Set numHouse
     *
     * @param string $numHouse
     * @return Facility
     */
    public function setNumHouse($numHouse)
    {
        $this->numHouse = $numHouse;

        return $this;
    }

    /**
     * Get numHouse
     *
     * @return string 
     */
    public function getNumHouse()
    {
        return $this->numHouse;
    }

    /**
     * Set indHouse
     *
     * @param string $indHouse
     * @return Facility
     */
    public function setIndHouse($indHouse)
    {
        $this->indHouse = $indHouse;

        return $this;
    }

    /**
     * Get indHouse
     *
     * @return string 
     */
    public function getIndHouse()
    {
        return $this->indHouse;
    }

    /**
     * Set numCorp
     *
     * @param string $numCorp
     * @return Facility
     */
    public function setNumCorp($numCorp)
    {
        $this->numCorp = $numCorp;

        return $this;
    }

    /**
     * Get numCorp
     *
     * @return string 
     */
    public function getNumCorp()
    {
        return $this->numCorp;
    }

    /**
     * Set indCorp
     *
     * @param string $indCorp
     * @return Facility
     */
    public function setIndCorp($indCorp)
    {
        $this->indCorp = $indCorp;

        return $this;
    }

    /**
     * Get indCorp
     *
     * @return string 
     */
    public function getIndCorp()
    {
        return $this->indCorp;
    }

    /**
     * Set typPom
     *
     * @param string $typPom
     * @return Facility
     */
    public function setTypPom($typPom)
    {
        $this->typPom = $typPom;

        return $this;
    }

    /**
     * Get typPom
     *
     * @return string 
     */
    public function getTypPom()
    {
        return $this->typPom;
    }

    /**
     * Set numPom
     *
     * @param string $numPom
     * @return Facility
     */
    public function setNumPom($numPom)
    {
        $this->numPom = $numPom;

        return $this;
    }

    /**
     * Get numPom
     *
     * @return string 
     */
    public function getNumPom()
    {
        return $this->numPom;
    }

    /**
     * Set indPom
     *
     * @param string $indPom
     * @return Facility
     */
    public function setIndPom($indPom)
    {
        $this->indPom = $indPom;

        return $this;
    }

    /**
     * Get indPom
     *
     * @return string 
     */
    public function getIndPom()
    {
        return $this->indPom;
    }

    /**
     * Set organization
     *
     * @param \AppBundle\Entity\Organization $organization
     * @return Facility
     */
    public function setOrganization(\AppBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return \AppBundle\Entity\Organization 
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set sectorNumber
     *
     * @param $sectorNumber
     * @return Facility
     */
    public function setSectorNumber($sectorNumber)
    {
        $this->sectorNumber = $sectorNumber;

        return $this;
    }

    /**
     * Get sectorNumber
     *
     * @return \number 
     */
    public function getSectorNumber()
    {
        return $this->sectorNumber;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Facility
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    public function __toString()
    {
        if ($this->getName()) {
            return $this->getName();
        } else {
            return 'Новый объект';
        }
    }
}
