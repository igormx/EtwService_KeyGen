<?php
use EtwService\KeyGen;
/**
 * KeyGen test case.
 */
class KeyGenTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var KeyGen
     */
    private $KeyGen;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();        
        $this->KeyGen = new KeyGen();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    { 
        $this->KeyGen = null;        
        parent::tearDown();
    }


}