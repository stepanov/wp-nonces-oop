<?php

namespace WpNoncesOop\Types;

use WpNoncesOop\WpNoncesBaseClass;

/**
 * PlaindWpNonce class
 *
 * implements logic to build nonce for given action
 *
 */
class PlainWpNonce extends WpNoncesBaseClass
{
    /**
     * generate method
     *
     * @return string
     */
    public function generate()
    {
        // TODO: add here actual implementation to generate nonce for given action
        return md5($this->action);
    }
}
