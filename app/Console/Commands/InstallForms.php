<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallForms extends Command
{
    protected $signature = 'install:forms';

    protected $description = 'Install the form submissions table without running unrelated migrations';

    public function handle(): int
    {
        $result = $this->call('migrate', [
            '--path' => 'database/migrations/2026_10_15_000000_create_form_submissions_table.php',
            '--force' => true,
        ]);

        if ($result !== self::SUCCESS) {
            return $result;
        }

        foreach (['config:clear', 'route:clear', 'view:clear'] as $command) {
            if ($this->call($command) !== self::SUCCESS) {
                return self::FAILURE;
            }
        }

        $this->info('Form submissions installed. Open /vr/home → Form Submissions.');

        return self::SUCCESS;
    }
}
