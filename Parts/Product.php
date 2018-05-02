<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 12:10
 */

namespace NFe\Parts;


class Product {

    protected $name;
    protected $cfop;
    protected $unity;
    protected $quantity;
    protected $unityValue;
    protected $value;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Método para setar o nome do produto
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCfop()
    {
        return $this->cfop;
    }

    /**
     * Método para setar o CFOP
     * @param $cfop
     * @return $this
     */
    public function setCfop($cfop)
    {
        $this->cfop = $cfop;
        return $this;
    }

    /**
     * Método para obter
     * @return mixed
     */
    public function getUnity()
    {
        return $this->unity;
    }

    /**
     * Método para setar se UNIDADE ou PEÇA
     * @param $unity
     * @return $this
     */
    public function setUnity($unity)
    {
        $this->unity = $unity;
        return $this;
    }

    /**
     * Método para obter a quantidade do produto
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Método setar a quantidade do produto
     * @param $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Método para obter o valor unitário do produto
     * @return mixed
     */
    public function getUnityValue()
    {
        return $this->unityValue;
    }

    /**
     * Método para setar o valor unitário do produto
     * @param $unityValue
     * @return $this
     */
    public function setUnityValue($unityValue)
    {
        $this->unityValue = $unityValue;
        return $this;
    }

    /**
     * Método para obter o valor total do produto
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Método para setar o valor total do produto
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

}