<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class Agreement {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Номер договора"})
     */
    protected $number;

    /**
     * @ORM\Column(type="date", nullable=true, options={"comment":"Дата заключения договора"})
     */
    protected $createAt;

    /**
     * Главная организация
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Organization", mappedBy="agreement", orphanRemoval=false, cascade={"persist"})
     */
    protected $mainOrganization;

    /**
     * Организация-плательщик
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Organization", mappedBy="agreement", orphanRemoval=false, cascade={"persist"})
     */
    protected $payerOrganization;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Должность представителя, от лица которого организация заключает договор (в родительном падеже)"})
     */
    protected $inPersonPost;

    /**
     * @ORM\Column(type="string", nullable=false, options={"comment":"ФИО представителя, от лица которого организация заключает договор (в родительном падеже)"})
     */
    protected $inPersonName;

    /**
     * @ORM\Column(type="string", nullable=false, options={"comment":"Документ (название, номер, дата), на основании которого действует представитель, от лица которого организация заключает договор (в родительном падеже)"})
     */
    protected $inPersonBasis;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Телефон представителя, от лица которого организация заключает договор"})
     */
    protected $inPersonPhone;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Должность ответственного за техническое состояние"})
     */
    protected $responsiblePersonPost;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"ФИО ответственного за техническое состояние"})
     */
    protected $responsiblePersonName;

    /**
     * @ORM\Column(type="string", nullable=true, options={"comment":"Телефон ответственного за техническое состояние"})
     */
    protected $responsiblePersonPhone;

    /**
     * @ORM\Column(type="date", nullable=true, options={"comment":"Дата окончания действия договора"})
     */
    protected $dateOfEnd;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"comment":"Признак того, что договор действующий"})
     */
    protected $isActive;

    protected $consumers;
} 