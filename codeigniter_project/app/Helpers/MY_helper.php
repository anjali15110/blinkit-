<?php
if(! function_exists('data_encode'))
{
	function data_encode($string)
	{
		$ciphering = "AES-128-CTR"; 
		$iv_length = openssl_cipher_iv_length($ciphering); 
		$options = 0; 
		$encryption_iv = '1234567891011121'; 
		$encryption_key = "GeniusWebSolutionsWorkingWithANJALIKASHYAP"; 
		$encryption = openssl_encrypt($string, $ciphering, $encryption_key, $options, $encryption_iv); 
		return $encryption;
	}
}


if ( ! function_exists('data_decode'))
{
	function data_decode($string)
	{
		$ciphering = "AES-128-CTR"; 
		$iv_length = openssl_cipher_iv_length($ciphering); 
		$options = 0; 
		$decryption_iv = '1234567891011121'; 
		$decryption_key = "GeniusWebSolutionsWorkingWithANJALIKASHYAP"; 
		$decryption=openssl_decrypt ($string, $ciphering, $decryption_key, $options, $decryption_iv); 
		return $decryption;
	}
}



?>