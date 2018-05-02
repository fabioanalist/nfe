<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 10:38
 */

namespace NFe;


interface NFeInterface {

    /**
     * Método para obter a versão da NFe
     * @return mixed
     */
    public function getVersion();

    /**
     * Método para setar a versão da NFe
     * @param string|null $version
     * @return mixed
     */
    public function setVersion($version);

    /**
     * Método para obter a Chave Eletrônica da NFe
     * @return mixed
     */
    public function getElectronicKey();

    /**
     * Método para setar a Chave Eletrônica da NFe
     * @param string|null $key
     * @return mixed
     */
    public function setElectronicKey($key);

    /**
     * Método para obter o número da NFe
     * @return mixed
     */
    public function getNumber();

    /**
     * Método para setar o número da NFe
     * @param string|null $number
     * @return mixed
     */
    public function setNumber($number);

    /**
     * Método para obter os produtos da NFe
     * @return mixed
     */
    public function getProducts();

    /**
     * Método para setar os produtos da NFe
     * @param array $products
     * @return mixed
     */
    public function setProducts(array $products);

    /**
     * Método para obter o CNPJ do Emitente da NFe
     * @return mixed
     */
    public function getCNPJIssuer();

    /**
     * Método para setar o CNPJ do Emitente da NFe
     * @param string|null $cnpj
     * @return mixed
     */
    public function setCNPJIssuer($cnpj);

    /**
     * Método para obter a Inscrição Estadual do Emitente da NFe
     * @return mixed
     */
    public function getStateRegistrationIssuer();

    /**
     * Método para setar a Inscrição Estadual do Emitente da NFe
     * @param string|null $stateRegistration
     * @return mixed
     */
    public function setStateRegistrationIssuer($stateRegistration);

    /**
     * Método para obter o CNPJ do Remetente da NFe
     * @return mixed
     */
    public function getCNPJShipper();

    /**
     * Método para setar o CNPJ do Remetente da NFe
     * @param string|null $cnpj
     * @return mixed
     */
    public function setCNPJShipper($cnpj);

    /**
     * Método para obter a Inscrição Estadual do Remetente da NFe
     * @return mixed
     */
    public function getStateRegistrationSender();

    /**
     * Método para setar a Inscrição Estadual do Remetente da NFe
     * @param string|null $stateRegistration
     * @return mixed
     */
    public function setStateRegistrationSender($stateRegistration);

    /**
     * Método para obter a observação da NFe
     * @return mixed
     */
    public function getObservation();

    /**
     * Método para setar a observação da NFe
     * @param mixed $observation
     * @return mixed
     */
    public function setObservation($observation);

    /**
     * Método para obter o valor total da NFe
     * @return mixed
     */
    public function getTotalValue();

    /***
     * Método para setar o valor total da NFe
     * @param string|null $value
     * @return mixed
     */
    public function setTotalValue($value);

    /**
     * Método para obter a data de saída/entrada da nota
     * @return mixed
     */
    public function getDateExitEntry();

    /**
     * Método para setar a data de saída/entrada da nota
     * @param $value
     * @return $this
     */
    public function setDateExitEntry($value);

}