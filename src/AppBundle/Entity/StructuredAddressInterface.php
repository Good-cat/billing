<?php
/**
 * This file is part of Minskvodokanal-Billing project
 * Created by Mikhail Peghasin
 * mikhail.pegasin@itmhouse.com
 */

namespace AppBundle\Entity;


interface StructuredAddressInterface {

    /**
     * Структурированный адрес: область
     */
    public function getNameRegion();

    /**
     * Структурированный адрес: район
     */
    public function  getNameDistr();

    /**
     * Структурированный адрес: сельсовет
     */
    public function  getNameSelSov();

    /**
     * Структурированный адрес: тип территориальной единицы (деревня, город и т.п.)
     */
    public function  getObjTypName();

    /**
     * Структурированный адрес: наименование территориальной единицы
     */
    public function getObjectName();

    /**
     * Структурированный адрес: тип элемента улично-дорожной сети
     */
    public function getElemTypName();
    /**
     * Структурированный адрес: наименование элемента улично-дорожной сети
     */
    public function getElemName();

    /**
     * Структурированный адрес: тип строения
     */
    public function getTypHouse();

    /**
     * Структурированный адрес: номер строения
     */
    public function getNumHouse();

    /**
     * Структурированный адрес: индекс строения
     */
    public function getIndHouse();

    /**
     * Структурированный адрес: номер корпуса
     */
    public function getNumCorp();

    /**
     * Структурированный адрес: индекс корпуса
     */
    public function getIndCorp();

    /**
     * Структурированный адрес: тип помещения
     */
    public function getTypPom();

    /**
     * Структурированный адрес: номер помещения
     */
    public function getNumPom();

    /**
     * Структурированный адрес: индекс помещения
     */
    public function getIndPom();
} 