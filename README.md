Generate WP nonces 

Installation

composer install

Usage

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
