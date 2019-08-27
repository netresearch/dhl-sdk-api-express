# DHL Express Shipping API SDK for PHP

* version: 1.2.0

## Description

This library enables extension developers to prepare and parse messages for
DHL Express API communication and provides functionality for collecting request
data.

## Requirements

* PHP >= 5.6.5
* DHL Express customer account able to access the production endpoints (optionally sandpit too)

## Installation Instructions

```shell
composer require dhl/sdk-api-express
```

## Uninstallation

```shell
composer remove dhl/sdk-api-express
```

## Features

The DHL Express Shipping API SDK supports the following features:

* Retrieve Shipping Rates
* Create Shipping Label

### Shipping Rates

The _Rate Request_ will return DHL's product capabilities (products, services,
and estimated delivery time) and prices (where applicable) for a certain set of
input data.

#### Public API

The library's components suitable for consumption comprise of

* services:
  * service factory
  * rate service
  * data transfer object builder
* data transfer objects:
  * rate request
  * rate response

#### Usage

```php
$logger = new \Psr\Log\NullLogger();

$serviceFactory = new SoapServiceFactory();
$service = $serviceFactory->createRateService('api-user', 'api-pass', $logger)

$requestBuilder = new RateRequestBuilder()
$requestBuilder->setIsUnscheduledPickup($isUnscheduledPickup);
$requestBuilder->setShipperAccount($accountNumber);
$requestBuilder->setShipperAddress($countryCode, $postalCode, $city, $etc);
$requestBuilder->setRecipientAddress($countryCode, $postalCode, $city, $etc);
$requestBuilder->setWeightUOM($weightUOM);
$requestBuilder->setDimensionsUOM($dimensionsUOM);
$requestBuilder->setTermsOfTrade($termsOfTrade);
$requestBuilder->setContentType($contentType);
$requestBuilder->setReadyAtTimestamp($readyAtTimestamp);
$requestBuilder->addPackage($weight, $weightUom, $length, $width, $height, $dimensionsUom, $readyAtDate);
$requestBuilder->setInsurance($insuranceValue, $insuranceCurrency);

$request = $requestBuilder->build();
$response = $service->collectRates($request);
```

### Shipping Label

The _ShipmentRequest_ operation will allow you to generate an AWB number and
piece IDs, generate a shipping label, transmit manifest shipment detail to DHL,
and optionally book a courier for the pickup of a shipment.

#### Public API

The library's components suitable for consumption comprise of

* services:
  * service factory
  * shipment service
  * data transfer object builder
* data transfer objects:
  * shipment request
  * shipment response

#### Usage

```php
$logger = new \Psr\Log\NullLogger();

$serviceFactory = new SoapServiceFactory();
$service = $serviceFactory->createShipmentService('api-user', 'api-pass', $logger)

$requestBuilder = new ShipmentRequestBuilder()
$requestBuilder->setIsUnscheduledPickup($unscheduledPickup);
$requestBuilder->setTermsOfTrade($termsOfTrade);
$requestBuilder->setContentType($contentType);
$requestBuilder->setReadyAtTimestamp($readyAtTimestamp);
$requestBuilder->setNumberOfPieces($numberOfPieces);
$requestBuilder->setCurrency($currencyCode);
$requestBuilder->setDescription($description);
$requestBuilder->setServiceType($serviceType);
$requestBuilder->setPayerAccountNumber($accountNumber);
$requestBuilder->setInsurance($insuranceValue, $insuranceCurrency);
$requestBuilder->setShipper($countryCode, $postalCode, $city, $streetLines, $name, $company, $phone);
$requestBuilder->setRecipient($countryCode, $postalCode, $city, $streetLines, $name, $company, $phone);
$requestBuilder->setDryIce($unCode, $weight);
$requestBuilder->addPackage($sequenceNumber, $weight, $weightUOM, $length, $width, $height, $dimensionsUOM, $customerReferences);

$request = $requestBuilder->build();
$response = $service->createShipment($request);
```

## Support

The DHL Express Shipping API SDK was created to be used in conjunction with the Magento® 2 module
[DHL Express Rates at Checkout](https://marketplace.magento.com/dhl-module-rates-express.html).
Any other usage will not receive official support.

## Developer

Christoph Aßmann | [Netresearch GmbH & Co. KG](http://www.netresearch.de/) | [@mam08ixo](https://twitter.com/mam08ixo)

## License

See LICENSE.md for license details.
