<?php

namespace WpNoncesOop;

use PHPUnit\Framework\TestCase;
use WpNoncesOop\WpNonces;

class WpNoncesTest extends TestCase
{
    public function setUp()
    {
        $this->url = 'http://example.com';
        $this->action = 'some_action';        
        $this->nonce = new WpNonces();
    }
    
    public function testCreateNonceUrl()
    {
        $this->assertEquals(
            $this->nonce->createNonceUrl([
                'url' => $this->url,
                'action' => $this->action
            ]), md5($this->url . $this->action)
        );
    }

    public function testCreateNonceField()
    {
        $this->assertEquals(
            $this->nonce->createNonceField([
                'action' => $this->action
            ]), md5($this->action)
        );
    }

    public function testCreateNoncePlain()
    {
        $this->assertEquals(
            $this->nonce->createNoncePlain([
                'action' => $this->action
            ]), md5($this->action)
        );
    }
}
