<?php

namespace Hilal\RsaEncryptor\Commands;

use Illuminate\Console\Command;

class RsaEncryptorCommand extends Command
{
    public $signature = 'rsa-encryptor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
