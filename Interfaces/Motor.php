<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 14:10
 */

namespace Interfaces;


/**
 * Interface Motor
 * Se crea la interfaz Motor para poder separar elementos de una motocicleta que
 * conceptualmente tienen relación pero su cálculo o especificación varía.
 * @package Abstracts
 */
interface Motor
{

    /**
     * Metodo que nos entrega la cantidad de Caballos de Fuerza que tiene la
     * motocicleta este varía según su peso, torque y revoluciones.
     * @return mixed
     */
    function cantidadHP();
}