<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity;


interface DictionaryBankInterface {
    /**
     * Код банка (три последние цифры кода по МФО)
     * @return mixed
     */
    public function getCode();

    /**
     * Головной банк
     * @return mixed
     */
    public function getParent();

    /**
     * Наименование банка
     * @return mixed
     */
    public function getName();

    /**
     * Код по МФО (межфилиальные обороты)
     * @return mixed
     */
    public function getMfo();

    /**
     * SWIFT BIC (ISO 9362:2014)
     * @return mixed
     */
    public function getSwift();
} 