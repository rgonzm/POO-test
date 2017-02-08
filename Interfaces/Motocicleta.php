<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 13:52
 */

namespace Interfaces;


/**
 * Interface Motocicleta
 * Interfaz que esta engargada de lograr diferenciar los tipos de motocicleta que existen.
 * @package Interfaces
 */
interface Motocicleta
{
    /**
     * Funcion que como esta en una inferfaz no esta implementada pero si se sabe que
     * recibe un parametro indicando que tipo de motocicleta es.
     * @param $tipo
     * @return mixed
     */
    function setTipo($tipo);
}