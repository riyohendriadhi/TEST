<?php 

/**
 * summary
 */
class ValidatePasswordTest extends PHPUnit_Framework_TestCase
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function testValidLength($pass='1234')
    {
    	$vallPass = new ValidatePassword();
    	$this->assertFalse($vallPass->validLength($pass));
    }
}