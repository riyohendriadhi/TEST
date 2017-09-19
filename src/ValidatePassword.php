<?php 
/**
 * summary
 */
class ValidatePassword
{
    
	const MIN_LENGTH = 6;
	const MAX_LENGTH = 20;

    public function __construct()
    {
        
    }

    public function validLength($password)
    {
    	$pass_length = strlen($password);
    	return $pass_length >= self::MIN_LENGTH && $pass_length <= MAX_LENGTH;
    }
}