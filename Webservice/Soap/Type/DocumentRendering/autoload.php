<?php


 function autoload_165fb1248aeae7235207541c8ecc8898($class)
{
    $classes = array(
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSService' => __DIR__ .'/GLSService.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest' => __DIR__ .'/GLSDocRequest.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse' => __DIR__ .'/GLSDocResponse.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType' => __DIR__ .'/HdrType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr' => __DIR__ .'/Sndr.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\TAddr' => __DIR__ .'/TAddr.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\CommandType' => __DIR__ .'/CommandType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldType' => __DIR__ .'/FieldType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\DataType' => __DIR__ .'/DataType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldListType' => __DIR__ .'/FieldListType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\MapType' => __DIR__ .'/MapType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\Entry' => __DIR__ .'/Entry.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType' => __DIR__ .'/DocumentType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\TemplateType' => __DIR__ .'/TemplateType.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\Message' => __DIR__ .'/Message.php',
        'Dhl\Express\Webservice\Soap\Type\DocumentRendering\PrintDocumentType' => __DIR__ .'/PrintDocumentType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_165fb1248aeae7235207541c8ecc8898');

// Do nothing. The rest is just leftovers from the code generation.
{
}
