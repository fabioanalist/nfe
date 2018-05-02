<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 10:36
 */

namespace NFe;


class NFe implements NFeInterface {

    protected $version;
    protected $electronicKey;
    protected $number;
    protected $products;
    protected $CNPJIssuer;
    protected $stateRegistrationIssuer;
    protected $CNPJShipper;
    protected $stateRegistrationSender;
    protected $observation;
    protected $totalValue;
    protected $dateExitEntry;

    /**
     * Método para obter a versão da NFe
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Método para setar a versão da NFe
     * @param string|null $version
     * @return mixed
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Método para obter a Chave Eletrônica da NFe
     * @return mixed
     */
    public function getElectronicKey()
    {
        return $this->electronicKey;
    }

    /**
     * Método para setar a Chave Eletrônica da NFe
     * @param string|null $key
     * @return mixed
     */
    public function setElectronicKey($key)
    {
        $this->electronicKey = $key;
        return $this;
    }

    /**
     * Método para obter o número da NFe
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Método para setar o número da NFe
     * @param string|null $number
     * @return mixed
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Método para obter os produtos da NFe
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Método para setar os produtos da NFe
     * @param array $products
     * @return mixed
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
        return $this;
    }

    /**
     * Método para obter o CNPJ do Emitente da NFe
     * @return mixed
     */
    public function getCNPJIssuer()
    {
        return $this->CNPJIssuer;
    }

    /**
     * Método para setar o CNPJ do Emitente da NFe
     * @param string|null $cnpj
     * @return mixed
     */
    public function setCNPJIssuer($cnpj)
    {
        $this->CNPJIssuer = $cnpj;
        return $this;
    }

    /**
     * Método para obter a Inscrição Estadual do Emitente da NFe
     * @return mixed
     */
    public function getStateRegistrationIssuer()
    {
        return $this->stateRegistrationIssuer;
    }

    /**
     * Método para setar a Inscrição Estadual do Emitente da NFe
     * @param string|null $stateRegistration
     * @return mixed
     */
    public function setStateRegistrationIssuer($stateRegistration)
    {
        $this->stateRegistrationIssuer = $stateRegistration;
        return $this;
    }

    /**
     * Método para obter o CNPJ do Remetente da NFe
     * @return mixed
     */
    public function getCNPJShipper()
    {
        return $this->CNPJShipper;
    }

    /**
     * Método para setar o CNPJ do Remetente da NFe
     * @param string|null $cnpj
     * @return mixed
     */
    public function setCNPJShipper($cnpj)
    {
        $this->CNPJShipper = $cnpj;
        return $this;
    }

    /**
     * Método para obter a Inscrição Estadual do Remetente da NFe
     * @return mixed
     */
    public function getStateRegistrationSender()
    {
        return $this->stateRegistrationSender;
    }

    /**
     * Método para setar a Inscrição Estadual do Remetente da NFe
     * @param string|null $stateRegistration
     * @return mixed
     */
    public function setStateRegistrationSender($stateRegistration)
    {
        $this->stateRegistrationSender = $stateRegistration;
        return $this;
    }

    /**
     * Método para obter a observação da NFe
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Método para setar a observação da NFe
     * @param mixed $observation
     * @return mixed
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Método para obter o valor total da NFe
     * @return mixed
     */
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /***
     * Método para setar o valor total da NFe
     * @param string|null $value
     * @return mixed
     */
    public function setTotalValue($value)
    {
        $this->totalValue = $value;
        return $this;
    }

    /**
     * Método para obter a data de saída/entrada da nota
     * @return mixed
     */
    public function getDateExitEntry()
    {
        return $this->dateExitEntry;
    }

    /**
     * Método para setar a data de saída/entrada da nota
     * @param $value
     * @return $this
     */
    public function setDateExitEntry($value)
    {
        $this->dateExitEntry = $value;
        return $this;
    }

}