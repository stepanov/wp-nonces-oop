# OOP WP Nonces Generator

## About

Generates WP nonces in OOP manner 


## Installation

### Composer

Install generator globally:

```
composer global require "stepanov/wp-nonces-oop=*"
```

To add to your project:

```
{
    "require": {
        "stepanov/wp-nonces-oop": "1.*"
    }
}
```

## Usage

```
$nonce = new WpNonces();

$urlNonce = $nonce->createNonceUrl([
    'url' => 'http://example.com',
    'action' => 'some_action'
]);

$plainNonce = $nonce->createNoncePlain([
    'action' => 'some_action'
])

$fieldNonce = $nonce->createNonceField([
    'action' => 'some_action'
]);
```
