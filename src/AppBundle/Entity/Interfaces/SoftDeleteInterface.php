<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity\Interfaces;


interface SoftDeleteInterface
{
    public function setIsActive($isActive);

    public function getIsActive();
} 