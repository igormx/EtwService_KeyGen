<?php
namespace EtwService;

/**
 *
 * @author gnr
 *        
 */
class KeyGen
{

    /**
     *
     * @param int $charactersNumber            
     */
    public function setCharactersNumber ($charactersNumber)
    {
        $this->charactersNumber = $charactersNumber;
        return $this;
    }

    /**
     * Get a Random Character
     * 
     * @return string
     */
    public function getCharacter ()
    {
        switch (mt_rand(0, 100) % 3) {
            case 0:
                {
                    $car = mt_rand(65, 90);
                    break;
                }
            case 1:
                {
                    $car = mt_rand(97, 122);
                    break;
                }
            case 2:
                {
                    $car = mt_rand(48, 57);
                    break;
                }
        }
        
        return chr($car);
    }

    /**
     * Get a Key of random character
     * 
     * @return string
     */
    public function getKey ($charactersNumber=6)
    {
        if((int)$charactersNumber<0) {
            $charactersNumber=6;
        }
        
        $key = "";
        for ($i = 0; $i < $charactersNumber; $i ++) {
            $key .= $this->getCharacter();
        }
        return $key;
    }
}