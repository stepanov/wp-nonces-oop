<?php

namespace WpNoncesOop; 

use Exception;

/**
 * class WpNonces
 *
 * Implements functionlity to build nonce with specified type
 * 
 * @author: Michael Stepanov <stepanov.michael@gmail.com>
 */
class WpNonces
{
    const TYPES_DIR = 'Types';
    const TYPES_POSTFIX = 'WpNonce';
    const TYPES_INTERFACE = 'WpNoncesInterface';
    
    /**
     * createNonceUrl method
     *
     * @param array $params with data to build URL nonce
     * @param string
     */
    public function createNonceUrl($params=[])
    {
        return $this->createNonce('url', $params);
    }

    /**
     * createNonceField method
     *
     * @param array $params with data to build filed nonce
     * @param string
     */
    public function createNonceField($params = [])
    {
        return $this->createNonce('field', $params);
    }
    
    /**
     * createNoncePlain method
     *
     * @param array $params with data to build plain nonce
     * @param string
     */
    public function createNoncePlain($params = [])
    {
        return $this->createNonce('plain', $params);
    }

    /**
     * createNonce method
     *
     * @param string $type of nonce - url, field or plain
     * @param array $params with data to build nonce with specified type
     * @param string
     * @throws Exception in case of non implemented method for given nonce type
     */
    protected function createNonce($type, $params)
    {
        $className = '\\' . __NAMESPACE__ . '\\' . static::TYPES_DIR . '\\' . ucfirst($type) . static::TYPES_POSTFIX;
        $interface = __NAMESPACE__ . '\\' . static::TYPES_INTERFACE;

        if (class_exists($className) && in_array($interface, class_implements($className))) {
            $nonce = new $className($params);

            return $nonce->generate();
        }

        throw new Exception("Missing implementation for nonce type $type --> $className; $interface!");
    }
}
