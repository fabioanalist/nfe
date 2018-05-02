# Exemplo

```php
// Transforma o XML da NF-e em um array 
$nfeXML = new NFeXML('webroot/import/uploads/' . $file->name());

/** 
* Transforma as informações do XML em um Objeto, lendo as informações conforme o modelo de NF-e 3.10.
* Podendo ser criado outros tipos de NF-e 
* @var NFe $nfe 
*/
$nfe = $nfeXML->buildFromXML(new NFe310());
```
