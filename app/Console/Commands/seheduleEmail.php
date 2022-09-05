<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\test;

class seheduleEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test mail';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to("test@gmail.com")->send(new test());
        $this->info("Mail sent");
        return 0;
    }
}
