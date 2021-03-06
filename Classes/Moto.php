<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 13:42
 */

namespace Classes;

use Abstracts\Vehiculo;
use Interfaces\Motocicleta;
use Interfaces\Motor;

/**
 * Class Moto
 * @package Classes
 */
class Moto extends Vehiculo implements Motocicleta,Motor
{
    const RUEDAS = 2;
    /**
     * Variable que espcifica que tipo de Moto puede ser ej: CROSS, ENDURO, MINI, entre otros.
     * @var
     */
    private $tipo;

    /**
     * Funcion que se utiliza despues de haber creado el objeto para obtener una informacion
     * de la motocicleta que se esta utilizando.
     */
    function run()
    {
        echo "Objeto Moto de tipo ".$this->tipo." de ".self::RUEDAS." ruedas <br/>\n";
    }

    /**
     * Moto constructor. Al momento de crear el objeto se le pasa el parametro de tipo
     * de Moto para que el constructor los asigne a la variable privada del objeto.
     * @param $tipo
     */
    function __construct($tipo)
    {
        parent::__construct();
        Moto::setTipo($tipo);
    }

    /**
     * Metodo que a modo prueba no sera implementado pero sirve como ejemplo para saber como funcionan las
     * interfaces, basicamente se se debe hacer el cálculo de los caballos de fuerza que tiene la motocicleta
     * este variará según su peso, torque y revoluciones.
     * que brinde.
     */
    function cantidadHP()
    {
        // TODO: Implement cantidadHP() method.
    }

    /**
     * @param $tipo
     */
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }


}