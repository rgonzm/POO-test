<?php
/**
 * Created by PhpStorm.
 * User: rgonzm
 * Date: 07-02-17
 * Time: 16:12
 */

namespace Classes;
require '../vendor/autoload.php';

use Abstracts\Vehiculo;
use Carbon\Carbon;

/**
 * Class Iniciador Segun el patrón de diseño Factory se debe separar el "producto" y la clase
 * creadora en este caso el "iniciador", para mantener el bajo acoplamiento.
 * @package Classes
 */
class Iniciador
{
    /**
     * Método que sirve para inicializar los objetos según la clase de moto que se requiera y
     * a su vez se debe indicar el tipo de moto que se creará.
     * @param $claseMoto
     * @param $tipoMoto
     * @return Cuatriomoto|Moto|Trimoto
     */
    public static function crearMotocicleta($claseMoto, $tipoMoto) {
        switch($claseMoto) {
            case Vehiculo::CUATRIMOTO:
                return new Cuatriomoto($tipoMoto);
                break;
            case Vehiculo::MOTO:
                return new Moto($tipoMoto);
                break;
            case Vehiculo::TRIMOTO:
                return new Trimoto($tipoMoto);
        }
    }
}
// Variable para calcular el tiempo de inicio de la ejecución del programa
$tic = Carbon::now();

echo "Hora Actual: ". Carbon::now()->toDateTimeString() ."<br/>\n";

// Creación de los objetos para probar el código.
$cuadrimoto = Iniciador::crearMotocicleta(Vehiculo::CUATRIMOTO,"ATV");
$trimoto = Iniciador::crearMotocicleta(Vehiculo::TRIMOTO,"TAXI MOTO");
$moto = Iniciador::crearMotocicleta(Vehiculo::MOTO,"CROSS");
$moto2 = Iniciador::crearMotocicleta(Vehiculo::MOTO,"ENDURO");

// Una vez creado los objetos se puede llamar el método Run que nos brinda la información de la motocicleta.
$cuadrimoto->run();
$trimoto->run();
$moto->run();
$moto2->run();

// Variable para calcular el tiempo de finalización de la ejecución del programa
$toc = Carbon::now();

echo "Tiempo de ejecución ".$toc->diffForHumans($tic)."<br/>\n";