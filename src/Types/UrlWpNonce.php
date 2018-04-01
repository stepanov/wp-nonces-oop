<?php

namespace WpNoncesOop\Types;

use WpNoncesOop\WpNoncesBaseClass;

/**
 * UrlWpNonce class
 *
 * implements logic to build nonce for given URL and action
 *
 */
class UrlWpNonce extends WpNoncesBaseClass
{
    /**
     * @var $url
     */
    protected $url = null;
    
    /**
     * __construct method
     *
     * @param array $params to build Url nonce
     * @return void
     * @throws Exception in case of missing mandaory parameter 
     */
    public function __construct($params = [])
    {
        parent::__construct($params);

        if (empty($params['url'])) {
            throw new Exception("Missing mandaory parameter 'url'!");
        }

        $this->url = $params['url'];
    }
    
    /**
     * generate method
     *
     * @return string
     */
    public function generate()
    {
        // TODO: add here actual implementation: action + url
        return md5($this->url . $this->action);
    }
}
