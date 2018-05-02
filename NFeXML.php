<?php
/**
 * Created by PhpStorm.
 * User: Yuri Gress
 * Date: 06/02/2018
 * Time: 11:45
 */

namespace NFe;


use NFe\Types\NFeBuilderInterface;


class NFeXML {

    private $xml;

    /**
     * Método construtor
     * NFeXML constructor.
     * @param string|null $xmlPath
     */
    public function __construct($xmlPath = null)
    {
        if (!is_null($xmlPath)) {
            $this->setXML($xmlPath);
        }
    }

    /**
     * Método para setar o arquivo XML que será lido
     * @param string $xmlPath Caminho onde fica o arquivo XML da NFe
     * @return $this
     */
    public function setXML($xmlPath)
    {
        try {
            $xml = Xml::build($xmlPath);
            $data = Xml::toArray($xml)['nfeProc'];

        } catch (\Exception $exception) {
            $data = [];
        } finally {
            $this->xml = $data;
        }

        return $this;
    }

    /**
     * Método para obter o XML da NFe
     * @return array|Xml
     */
    public function getXML()
    {
        return $this->xml;
    }

    /**
     * Método para gerar uma NFe apartir do XML
     * @param NFeBuilderInterface $builder
     * @return mixed
     */
    public function buildFromXML(NFeBuilderInterface $builder)
    {
        $builder->setXmlInformations($this->getXML());

        if ($builder->createNFe()) {
            $builder->addVersion()
                    ->addElectronicKey()
                    ->addNumber()
                    ->addProducts()
                    ->addCNPJIssuer()
                    ->addStateRegistrationIssuer()
                    ->addCNPJShipper()
                    ->addStateRegistrationSender()
                    ->addObservation()
                    ->addTotalValue()
                    ->addDateExitEntry();


            return $builder->getNFe();
        }

        return false;
    }
}