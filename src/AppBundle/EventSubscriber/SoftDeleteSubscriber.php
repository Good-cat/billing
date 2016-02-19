<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\EventSubscriber;

use AppBundle\Entity\Interfaces\SoftDeleteInterface;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\LifecycleEventArgs as EventArgs;

class SoftDeleteSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [Events::onFlush];
    }

    public function onFlush(EventArgs $args)
    {
        $em =  $args->getEntityManager();
        $uow = $em->getUnitOfWork();

        foreach ($uow->getScheduledEntityDeletions() as $entity)
        {
            if($entity instanceof SoftDeleteInterface) {
                $entity->setIsActive(false);
                $em->persist($entity);
                $em->flush( $entity );
            }
        }
    }
} 