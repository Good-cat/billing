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
 * @ORM\Table(name="organization", options={"comment":"Организации, которые в общем случае могут быть: абонентами, плательщиками, субабонентами, нарушителями, пользователями прочих услуг (например, слив по талонам)"})
 *
 *
 */
class Organization {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Agreement", inversedBy="mainOrganization")
     * @ORM\JoinColumn(name="main_organization_id", referencedColumnName="id")
     */
    protected $agreement;

    /**
     * @ORM\Column(type="string", options={"comment":"Полное наименование организации"})
     */
    protected $fullName;

    /**
     * @ORM\Column(type="string", options={"comment":"Сокращенное наименование организации"})
     */
    protected $shortName;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\DictionaryMinistry")
     * @ORM\JoinColumn(name="ministry_id", referencedColumnName="id")
     */
    protected $ministry;

    /**
     * @ORM\Column(type="string", options={"comment":"Учетный номер плательщика"})
     */
    protected $unp;

    /**
     * @ORM\Column(type="string", options={"comment":"Общегосударственный классификатор предприятий и организаций"})
     */
    protected $okpo;

    /**
     * @ORM\Column(type="string", options={"comment":"Расчетный счет"})
     */
    protected $bankAccount;

    /**
     * @ORM\Column(type="string", options={"comment":"IBAN: расчетный счет по (ISO 13616)"})
     */
    protected $iban;

    /**
     * @ORM\ManyToOne(targetEntity="DictionaryBank")
     * @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     */
    protected $bank;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Facility", mappedBy="organization", orphanRemoval=true, cascade={"persist"})
     */
    protected $facilities;

    public function __construct()
    {
        $this->facilities = new ArrayCollection();
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
     * Set fullName
     *
     * @param string $fullName
     * @return Organization
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return Organization
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set ministry
     *
     * @param string $ministry
     * @return Organization
     */
    public function setMinistry($ministry)
    {
        $this->ministry = $ministry;

        return $this;
    }

    /**
     * Get ministry
     *
     * @return string 
     */
    public function getMinistry()
    {
        return $this->ministry;
    }

    /**
     * Set unp
     *
     * @param string $unp
     * @return Organization
     */
    public function setUnp($unp)
    {
        $this->unp = $unp;

        return $this;
    }

    /**
     * Get unp
     *
     * @return string 
     */
    public function getUnp()
    {
        return $this->unp;
    }

    /**
     * Set okpo
     *
     * @param string $okpo
     * @return Organization
     */
    public function setOkpo($okpo)
    {
        $this->okpo = $okpo;

        return $this;
    }

    /**
     * Get okpo
     *
     * @return string 
     */
    public function getOkpo()
    {
        return $this->okpo;
    }

    /**
     * Set bankAccount
     *
     * @param string $bankAccount
     * @return Organization
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return string 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Organization
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string 
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set bank
     *
     * @param \AppBundle\Entity\DictionaryBank $bank
     * @return Organization
     */
    public function setBank(\AppBundle\Entity\DictionaryBank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \AppBundle\Entity\DictionaryBank 
     */
    public function getBank()
    {
        return $this->bank;
    }

    public function __toString()
    {
        return $this->getShortName();
    }

    /**
     * Add facilities
     *
     * @param \AppBundle\Entity\Facility $facilities
     * @return Organization
     */
    public function addFacility(\AppBundle\Entity\Facility $facility)
    {
        $facility->setOrganization($this);
        $this->facilities[] = $facility;

        return $this;
    }

    /**
     * Remove facilities
     *
     * @param \AppBundle\Entity\Facility $facilities
     */
    public function removeFacility(\AppBundle\Entity\Facility $facilities)
    {
        $this->facilities->removeElement($facilities);
    }

    /**
     * Get facilities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacilities()
    {
        return $this->facilities;
    }
}
