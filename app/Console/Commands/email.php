<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\test;

class email extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sent email...';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to("test@gmail.com")->send(new test());
        $this->info("Mail sent");
    }
}
