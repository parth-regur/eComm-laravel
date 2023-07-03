<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $viewPath = resource_path('views/' . $name . '.blade.php');

        if (File::exists($viewPath)) {
            $this->error('View already exists!');
            return Command::FAILURE;
        }

        File::put($viewPath, '');

        $this->info('View created successfully: ' . $name);

        return Command::SUCCESS;
    }
}
