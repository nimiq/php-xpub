# Nimiq XPub

[![Build Status](https://github.com/nimiq/php-xpub/actions/workflows/php.yml/badge.svg?branch=master)](https://github.com/nimiq/php-xpub/actions/workflows/php.yml)

A simple class to derive BTC and ETH extended public keys and addresses without GMP.
Only the BCMath extension is required (but GMP is still used for faster calculations when available).

Supports all formats:

| Type                  | Mainnet | Testnet |
|-----------------------|---------|---------|
| BIP44 (standard)      | xpub    | tpub    |
| BIP49 (nested segwit) | ypub    | upub    |
| BIP84 (native segwit) | zpub    | vpub    |

## Installation

The Nimiq XPub package is availabe via the [Packagist package registry](https://packagist.org/packages/nimiq/xpub) and can be installed with [Composer](https://getcomposer.org):

```bash
composer require nimiq/xpub
```

### Requirements

* PHP >= 7.1
* BCMath or GMP extension

## Usage

```php
# PSR-4 autoloading with composer
use Nimiq\XPub;

# Create an XPub class instance from an xpub/tpub/ypub/upub/zpub/vpub string.
$xpub = XPub::fromString( 'xpub...' ); // => BIP44 Original
$xpub = XPub::fromString( 'ypub...' ); // => BIP49 Nested SegWit
$xpub = XPub::fromString( 'zpub...' ); // => BIP84 Native SegWit

# You can also specify the address scheme to override auto-detection.
$xpub = XPub::fromString( 'xpub...', XPub::BIP84 );
$xpub = XPub::fromString( 'xpub...', XPub::BIP49 );
$xpub = XPub::fromString( 'zpub...', XPub::BIP44 );

# Derive a child extended public key from it.
$xpub_i = $xpub->derive( $i );
# You can also pass an array to derive a path.
$xpub_i_k = $xpub->derive( [$i, $k]);

# An XPub can be serialized back into a string.
# Pass $asHex = true to serialize into a HEX string, base58 is the default.
$xpub_string = $xpub_i->toString( $asHex = false );

# An XPub can be converted into an address.
# Pass $coin = 'eth' to convert into an ETH address.
#
# By default, xpubs are converted into standard addresses,
# ypubs are converted into nested segwit addresses,
# and zpubs are converted into native segwit addresses.
$address = $xpub_i->toAddress( $coin = 'btc' );
```

_[See the tests](test/test.php) for example usage._

The `XPub` class also exposes two common hashing methods:

```php
# Get a hash160
$hashed_hex = XPub::hash160( $input_hex );

# Get a double sha256
$hashed_hex = XPub::doubleSha256( $input_hex );
```

## Development

### Testing

To execute the test suite run:

```bash
composer run-script test
# or
php test/test.php
```
