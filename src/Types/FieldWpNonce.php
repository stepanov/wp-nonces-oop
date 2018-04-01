<?php

namespace WpNoncesOop\Types;

/**
 * FielldWpNonce class
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
        return $this->action;
    }
}
