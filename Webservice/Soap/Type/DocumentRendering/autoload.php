<?php


use Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocRequest;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSDocResponse;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\HdrType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\Sndr;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\TAddr;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\CommandType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\DataType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\FieldListType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\MapType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\Entry;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\DocumentType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\TemplateType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\Message;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\PrintDocumentType;
use Dhl\Express\Webservice\Soap\Type\DocumentRendering\GLSService;

function autoload_165fb1248aeae7235207541c8ecc8898($class)
{
    $classes = array(
        GLSService::class        => __DIR__ . '/GLSService.php',
        GLSDocRequest::class     => __DIR__ . '/GLSDocRequest.php',
        GLSDocResponse::class    => __DIR__ . '/GLSDocResponse.php',
        HdrType::class           => __DIR__ . '/HdrType.php',
        Sndr::class              => __DIR__ . '/Sndr.php',
        TAddr::class             => __DIR__ . '/TAddr.php',
        CommandType::class       => __DIR__ . '/CommandType.php',
        FieldType::class         => __DIR__ . '/FieldType.php',
        DataType::class          => __DIR__ . '/DataType.php',
        FieldListType::class     => __DIR__ . '/FieldListType.php',
        MapType::class           => __DIR__ . '/MapType.php',
        Entry::class             => __DIR__ . '/Entry.php',
        DocumentType::class      => __DIR__ . '/DocumentType.php',
        TemplateType::class      => __DIR__ . '/TemplateType.php',
        Message::class           => __DIR__ . '/Message.php',
        PrintDocumentType::class => __DIR__ . '/PrintDocumentType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_165fb1248aeae7235207541c8ecc8898');

// Do nothing. The rest is just leftovers from the code generation.
{
}
