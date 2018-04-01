<?php

namespace WpNonces;

/**
 * WpNoncesBaseClass class
 *
 * implements common logic for all types of WP nonces
 *
 */
abstract class WpNoncesBaseClass implements WpNoncesInterface
{
    /**
     * @var $action
     */
    private $action = null;
    
    /**
     * __construct method
     *
     * @param array $params to build nonce
     * @return void
     * @throws Exception in case of missing mandatory parameter 
     */
    public function __construct($params)
    {
        if (empty($params['action'])) {
            throw new Exception("Missing mandatory parameter 'action'!");
        }

        $this->action = $params['action'];
    }
    
    /**
     * abstract generate method
     *
     * @return string
     */
    abstract public generate();
}
