# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## ## 2.1.0 - 2020-09-15

### Added

- Set label option flag to request a waybill document, contributed by D. Fairbrother and [@JustoHermano](https://github.com/JustoHermano) via [PR #11](https://github.com/netresearch/dhl-sdk-api-express/pull/11)

## 2.0.2 - 2020-09-01

### Added

- Support for PHP 7.4
- Pass through tracking error details, contributed by [@kdrdmr](https://github.com/kdrdmr) via [PR #8](https://github.com/netresearch/dhl-sdk-api-express/pull/8)

### Removed

- Support for PHP 5.6 and PHP 7.0

### Changed

- Request and response parsing, contributed by [@tomazJakomin](https://github.com/tomazJakomin) via [PR #5](https://github.com/netresearch/dhl-sdk-api-express/pull/5):
  
  - Class Map: add missing ResponseServiceHeader type
  - Delete Shipment: fix passing Reason code from request builder to SOAP type
  - Track: introduce constants for usage in TrackingRequestBuilderInterface::setPiecesEnabled
  - Track: handle empty ShipmentEvent type during response processing

### Fixed

- Webservice response logging

## 2.0.1 - 2020-02-06

### Fixed

- Always round weight to 3 decimal digits as defined by the API

## 2.0.0 - 2019-12-05

### Added

- Support for PHP 7.3
- Improved logged information for errors during rates request

### Changed

- Changed public API to always require a \DateTime object when 
  handling date/time information to avoid timezone bugs
- Cleaned up missing or incorrect public API annotations

## 1.2.0 - 2019-08-26

### Fixed 
- Check "no products available" behaviour with Express API

## 1.1.0 - 2019-05-08

### Added
- Possibility to create service instances for production or sandpit
- Pass through shipper and recipient email to the shipment request
- Stub classes for Pickup Requests, with no actual usage as of yet

### Changed
- Default endpoint is now production

## 1.0.1 - 2018-09-24

### Fixed
- Catch every InvalidArgumentException when preparing a Rate Request

### Added
- Better log messages for Rate Request argument errors

## 1.0.0 - 2018-09-17

- Initial Release
