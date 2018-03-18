<?php
/**
 * Created by PhpStorm.
 * User: juliocesarcastillohernandez
 * Date: 17/03/18
 * Time: 20:16
 */

class Viaje
{
    private $id;
    private $usuario;
    private $genero;
    private $edad;
    private $inicioViaje;
    private $finViaje;
    private $origenId;
    private $destinoId;

    /**
     * Viaje constructor.
     * @param $id
     * @param $usuario
     * @param $genero
     * @param $edad
     * @param $inicioViaje
     * @param $finViaje
     * @param $origenId
     * @param $destinoId
     */
    public function __construct($id, $usuario, $genero, $edad, $inicioViaje, $finViaje, $origenId, $destinoId)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->genero = $genero;
        $this->edad = $edad;
        $this->inicioViaje = $inicioViaje;
        $this->finViaje = $finViaje;
        $this->origenId = $origenId;
        $this->destinoId = $destinoId;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getInicioViaje()
    {
        return $this->inicioViaje;
    }

    /**
     * @param mixed $inicioViaje
     */
    public function setInicioViaje($inicioViaje)
    {
        $this->inicioViaje = $inicioViaje;
    }

    /**
     * @return mixed
     */
    public function getFinViaje()
    {
        return $this->finViaje;
    }

    /**
     * @param mixed $finViaje
     */
    public function setFinViaje($finViaje)
    {
        $this->finViaje = $finViaje;
    }

    /**
     * @return mixed
     */
    public function getOrigenId()
    {
        return $this->origenId;
    }

    /**
     * @param mixed $origenId
     */
    public function setOrigenId($origenId)
    {
        $this->origenId = $origenId;
    }

    /**
     * @return mixed
     */
    public function getDestinoId()
    {
        return $this->destinoId;
    }

    /**
     * @param mixed $destinoId
     */
    public function setDestinoId($destinoId)
    {
        $this->destinoId = $destinoId;
    }

}