<?php

namespace Hilal\RsaEncryptor;

use Exception;
use phpseclib\Crypt\RSA;

class RsaEncryptor
{
    protected $publicKey;

    protected $privateKey;

    /**
     * Construct a new RsaEncrypter instance with the given public and private key files.
     *
     * @param  string  $publicKeyFile The path to the public key file.
     * @param  string  $privateKeyFile The path to the private key file.
     *
     * @throws Exception if the public or private key file cannot be read.
     */
    public function __construct()
    {
        // Load the public key from file
        $publicKeyFile = config('rsa-encryptor.public_key_path');
        $privateKeyFile = config('rsa-encryptor.private_key_path');
        $publicKey = file_get_contents($publicKeyFile);
        if ($publicKey === false) {
            throw new Exception("Failed to read public key file: $publicKeyFile");
        }
        $this->publicKey = openssl_pkey_get_public($publicKey);
        if ($this->publicKey === false) {
            throw new Exception("Failed to parse public key: $publicKey");
        }

        // Load the private key from file
        $privateKey = file_get_contents($privateKeyFile);
        if ($privateKey === false) {
            throw new Exception("Failed to read private key file: $privateKeyFile");
        }
        $this->privateKey = openssl_pkey_get_private($privateKey);
        if ($this->privateKey === false) {
            throw new Exception("Failed to parse private key: $privateKey");
        }
    }

    /**
     * Encrypt a plaintext string using RSA encryption with the public key.
     *
     * @param  string  $plaintext The plaintext string to encrypt.
     * @return string The encrypted ciphertext string.
     *
     * @throws Exception if encryption fails.
     */
    public function encrypt(string $plaintext): string
    {
        $encrypted = '';
        $success = openssl_public_encrypt($plaintext, $encrypted, $this->publicKey, OPENSSL_PKCS1_PADDING);
        if (! $success) {
            throw new Exception('Encryption failed: '.openssl_error_string());
        }

        return base64_encode($encrypted);
    }

    /**
     * Decrypt a ciphertext string using RSA decryption with the private key.
     *
     * @param  string  $ciphertext The ciphertext string to decrypt.
     * @return string The decrypted plaintext string.
     *
     * @throws Exception if decryption fails.
     */
    public function decrypt(string $ciphertext): string
    {
        $ciphertext = base64_decode($ciphertext);
        $decrypted = '';
        $success = openssl_private_decrypt($ciphertext, $decrypted, $this->privateKey, OPENSSL_PKCS1_PADDING);
        if (! $success) {
            throw new Exception('Decryption failed: '.openssl_error_string());
        }

        return $decrypted;
    }
}
