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

    /**
     * A data provider
     * 
     * @return multitype:number
     */
    public function getDifferentKeyLengths ()
    {
        return array(
                array(
                        2
                ),
                array(
                        3
                ),
                array(
                        4
                ),
                array(
                        5
                ),
                array(
                        8
                ),
                array(
                        10
                ),
                array(
                        15
                )
        );
    }

    /**
     * Test Get a single character
     */
    public function testGetCharacter ()
    {
        $character = $this->Keys->getCharacter();
        $this->assertNotNull($character);
        $this->assertInternalType("string", $character);
    }

    /**
     * Test Get a normal key
     */
    public function testGetKey ()
    {
        $key = $this->Keys->getKey();
        $this->assertNotNull($key);
        $this->assertInternalType("string", $key);
    }

    /**
     * Test Changing the characterLenght of the Key and you get the proper
     * Lenght
     *
     * @dataProvider getDifferentKeyLengths
     */
    public function testChangeKeyLenght ($keyLength)
    {
        $this->Keys->setCharactersNumber($keyLength);
        $key = $this->Keys->getKey();
        $this->assertEquals(strlen($key), $keyLength);
    }

    /**
     * Test Do not Generante 2 equals keys between 10 tries
     */
    public function testGenerateDifferentKeys ()
    {
        $keys = array();
        for ($i = 0; $i <= 9; $i ++) {
            $key = $this->Keys->getKey();
            $this->assertArrayNotHasKey($key, $keys);
            $keys[] = $key;
        }
    }
}