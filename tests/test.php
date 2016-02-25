<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Shineklbm\AesFileEncryption\MCryptAES256Implementation;
use Shineklbm\AesFileEncryption\AesFileEncryption;

//Construct the implementation
$mcrypt = new MCryptAES256Implementation();

//Use this to instantiate the encryption library class
$lib = new AesFileEncryption($mcrypt);

//This example encrypts and decrypts the README.md file
$file_to_encrypt = "README.md";
$encrypted_file = "README.md.aes";
$decrypted_file = "README.decrypted.txt";

//Ensure target file does not exist
@unlink($encrypted_file);
//Encrypt a file
$lib->encryptFile($file_to_encrypt, "1234", $encrypted_file);

//Ensure file does not exist
@unlink($decrypted_file);
//Decrypt using same password
$lib->decryptFile($encrypted_file, "1234", $decrypted_file);

echo "Done";