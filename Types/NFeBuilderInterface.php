<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 09:54
 */

namespace NFe\Types;

interface NFeBuilderInterface {

    /**
     * Método para obter a versão da NF
     * @return $this|mixed
     */
    public function addVersion();

    /**
     * Método para obter a chave eletrônica da NF
     * @return $this|mixed
     */
    public function addElectronicKey();

    /**
     * Método para obter o número da NF
     * @return $this|mixed
     */
    public function addNumber();

    /**
     * Método para obter os produtos da NF
     * @return $this|mixed
     */
    public function addProducts();

    /**
     * Método para obter o CNPJ do Emitente da NF
     * @return $this|mixed
     */
    public function addCNPJIssuer();

    /**
     * Método para obter a inscrição estadual do Emitente da NF
     * @return $this|mixed
     */
    public function addStateRegistrationIssuer();

    /**
     * Método para obter o CNPJ do Remetente da NFe
     * @return $this|mixed
     */
    public function addCNPJShipper();

    /**
     * Método para obter a Inscrição Estadual do Remetente da NFe
     * @return $this|mixed
     */
    public function addStateRegistrationSender();

    /**
     * Método para obter observação da NF
     * @return $this|mixed
     */
    public function addObservation();

    /**
     * Método para obter o valor total da NF
     * @return $this|mixed
     */
    public function addTotalValue();

    /**
     * Método para setar as informações da NF vindas do XML
     * @param array $xml XML da NF
     * @return $this|mixed
     */
    public function setXmlInformations(array $xml);

    /**
     * Método para obter as informações da NF vindas do XML
     * @return mixed
     */
    public function getXmlInformations();

    /**
     * Método para construir uma NFe
     */
    public function createNFe();

    /**
     * Método para obter a instância da NFe
     * @return mixed
     */
    public function getNFe();

    /**
     * Verifica se a estrutura do XML está de acordo com o formato da NFe
     * @return mixed
     */
    public function isValid();

}