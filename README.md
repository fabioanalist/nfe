# Exemplo

```php
/**
* Faz a leitura do XML e o transforma em um array.
*/
$nfeXML = new NFeXML('diretorio/onde/esta/o/xml/' . $file->name());

/** 
* Transforma as informações do XML em um Objeto, lendo as informações conforme o modelo de NF-e 3.10.
* Podendo ser criado outros tipos de NF-e 
* @var NFe $nfe 
*/
$nfe = $nfeXML->buildFromXML(new NFe310());
```
