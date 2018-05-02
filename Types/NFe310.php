<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 10:04
 */

namespace NFe\Types;


use NFe\NFe;
use NFe\NFeInterface;
use NFe\Parts\Product;

/**
 * NFe Modelo 3.10
 * Class NFe310
 * @package Application\NFe\Types
 */
class NFe310 implements NFeBuilderInterface {

    private $xml;
    private $nfe;

    /**
     * Método para obter a versão da NF
     * @return $this|mixed
     */
    public function addVersion()
    {
        $this->getNFe()
             ->setVersion($this->getXmlInformations()['protNFe']['@versao']);
        return $this;
    }

    public function addDateExitEntry()
    {
        $this->getNFe()
             ->setDateExitEntry($this->getXmlInformations()['NFe']['infNFe']['ide']['dhSaiEnt']);
        return $this;
    }

    /**
     * Método para obter a chave eletrônica da NF
     * @return $this|mixed
     */
    public function addElectronicKey()
    {
        $this->getNFe()
             ->setElectronicKey($this->getXmlInformations()['protNFe']['infProt']['chNFe']);
        return $this;
    }

    /**
     * Método para obter o número da NF
     * @return $this|mixed
     */
    public function addNumber()
    {
        $this->getNFe()
             ->setNumber($this->getXmlInformations()['NFe']['infNFe']['ide']['nNF']);
        return $this;
    }

    /**
     * Método para obter os produtos da NF
     * @return $this|mixed
     */
    public function addProducts()
    {
        $products = [];

        foreach ($this->getXmlInformations()['NFe']['infNFe']['det'] as $productXML) {
            if (is_array($productXML)) {

                if (key_exists('prod', $productXML))
                    $productXML = $productXML['prod'];

                if (key_exists('vProd', $productXML)) {
                    $product = new Product();
                    $product->setValue($productXML['vProd'])
                            ->setCfop($productXML['CFOP'])
                            ->setName($productXML['xProd'])
                            ->setQuantity($productXML['qCom'])
                            ->setUnityValue($productXML['vUnCom'])
                            ->setUnity($productXML['uCom']);

                    $products[] = $product;
                }
            }
        }

        $this->getNFe()
             ->setProducts($products);
        return $this;
    }

    /**
     * Método para obter o CNPJ do Emitente da NF
     * @return $this|mixed
     */
    public function addCNPJIssuer()
    {
        $this->getNFe()
             ->setCNPJIssuer($this->getXmlInformations()['NFe']['infNFe']['emit']['CNPJ']);
        return $this;
    }

    /**
     * Método para obter a inscrição estadual do Emitente da NF
     * @return $this|mixed
     */
    public function addStateRegistrationIssuer()
    {
        $this->getNFe()
             ->setStateRegistrationIssuer($this->getXmlInformations()['NFe']['infNFe']['emit']['IE']);
        return $this;
    }

    /**
     * Método par obter o CNPJ do Remetente da NFe
     * @return $this|mixed
     */
    public function addCNPJShipper()
    {
        $this->getNFe()
             ->setCNPJShipper($this->getXmlInformations()['NFe']['infNFe']['dest']['CNPJ']);
        return $this;
    }

    /**
     * Método para obter a Inscrição Estadual do Remetente da NFe
     * @return $this|mixed
     */
    public function addStateRegistrationSender()
    {
        $this->getNFe()
             ->setStateRegistrationSender($this->getXmlInformations()['NFe']['infNFe']['dest']['IE']);
        return $this;
    }


    /**
     * Método para obter observação da NF
     * @return $this|mixed
     */
    public function addObservation()
    {
        $observation = 'SEM OBSERVAÇÃO';

        if (array_key_exists('infCpl', $this->getXmlInformations()['NFe']['infNFe']['infAdic']))
            $observation = $this->getXmlInformations()['NFe']['infNFe']['infAdic']['infCpl'];

        $this->getNFe()
             ->setObservation($observation);
        return $this;
    }

    /**
     * Método para obter o valor total da NF
     * @return $this|mixed
     */
    public function addTotalValue()
    {
        $this->getNFe()
             ->setTotalValue($this->getXmlInformations()['NFe']['infNFe']['total']['ICMSTot']['vNF']);
        return $this;
    }

    /**
     * Método para setar as informações da NF vindas do XML
     * @param array $xml
     */
    public function setXmlInformations(array $xml)
    {
        $this->xml = $xml;
    }

    /**
     * Método para obter as informações da NF vindas do XML
     * @return mixed
     */
    public function getXmlInformations()
    {
        if (is_null($this->xml))
            throw new \InvalidArgumentException('As informações do XML da NFe não foram carregadas');

        return $this->xml;
    }

    /**
     * Método para construir uma NFe
     */
    public function createNFe()
    {
        $this->nfe = null;

        if ($this->isValid()) {
            $this->nfe = new NFe();
            return true;
        }

        return false;
    }

    /**
     * Método para obter a instância da NFe
     * @return NFeInterface
     */
    public function getNFe()
    {
        return $this->nfe;
    }

    /**
     * Método para verificar se a estrutura do XML está de acordo com o modelo da NFe
     * @return mixed|bool
     */
    public function isValid()
    {
        $xml = $this->xml;

        if (empty($xml))
            return false;

        if (!array_key_exists('protNFe', $xml))
            return false;

        if (!array_key_exists('NFe', $xml))
            return false;

        return true;
    }

}