<?php
namespace Shineklbm\AesFileEncryption;

interface AES256Implementation
{
	public function checkDependencies();
	public function createIV();
	public function createRandomKey();
	public function encryptData($the_data, $iv, $enc_key);
	public function decryptData($the_data, $iv, $enc_key);
}
