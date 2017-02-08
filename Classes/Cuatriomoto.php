<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 14:09
 */

namespace Classes;

use Abstracts\Vehiculo;
use Interfaces\Motocicleta;
use Interfaces\Motor;

/**
 * Class Cuadriomoto
 * @package Classes
 */
class Cuatriomoto extends Vehiculo implements Motocicleta,Motor
{
    const RUEDAS = 4;
    /**
     * Variable que espcifica que tipo de Cuatrimoto puede ser ej: ATV, ENDURO, SQUAD, entre otros.
     * @var
     */
    private $tipo;

    /**
     * Funcion que se utiliza despues de haber creado el objeto para obtener una informacion
     * de la motocicleta que se esta utilizando.
     */
    function run()
    {
        echo "Objeto Cudrimoto de tipo ".$this->tipo." de ".self::RUEDAS." ruedas <br/>\n";
    }

    /**
     * Cuadriomoto constructor. Al momento de crear el objeto se le pasa el parametro de tipo
     * de Cuatrimoto para que el constructor los asigne a la variable privada del objeto.
     * @param $tipo
     */
    function __construct($tipo)
    {
        parent::__construct();
        CuaTriomoto::setTipo($tipo);
    }

    /**
     * Metodo que a modo prueba no sera implementado pero sirve como ejemplo para saber como funcionan las
     * interfaces, basicamente se se debe hacer el cálculo de los caballos de fuerza que tiene la motocicleta
     * este variará según su peso, torque y revoluciones.
     */
    function cantidadHP()
    {
        // TODO: Implement cantidadHP() method.
    }

    /**
     * Metodo para la asignación del tipo de Trimoto que se está creando
     * @param $tipo
     */
    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

}