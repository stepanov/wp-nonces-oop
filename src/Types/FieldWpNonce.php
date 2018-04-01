<?php

namespace WpNoncesOop\Types;

use WpNoncesOop\WpNoncesBaseClass;

/**
 * FieldWpNonce class
 *
 * implements logic to build nonce for given action
 *
 */
class FieldWpNonce extends WpNoncesBaseClass
{
    /**
     * generate method
     *
     * @return string
     */
    public function generate()
    {
        // TODO: add here actual implementation to generate nonce for given field
        return md5($this->action);
    }
}
