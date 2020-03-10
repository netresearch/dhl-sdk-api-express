# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

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
