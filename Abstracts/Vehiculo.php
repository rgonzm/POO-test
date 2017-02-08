<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 13:38
 */

namespace Abstracts;

/**
 * Class Vehiculo
 * Clase que engloba el concepto mas abstracto de una motocileta el cual solo contiene la diferenciacion
 * de los tipos de motocicletas, ademas de una funcion abstracta que se encarga de hacer funcionar el objeto
 * @package Abstracts
 */
abstract class Vehiculo
{
    const CUATRIMOTO = 0;
    const MOTO = 1;
    const TRIMOTO = 2;

    /**
     * Funcion abstracta que se utiliza en las clases heredadas para hacer funcionar el objeto.
     * @return mixed
     */
    abstract function run();

    /**
     * Process constructor.
     */
    function __construct()
    {

    }
    /**
     * Process destructor.
     * Show
     */
    function __destruct()
    {

    }

}