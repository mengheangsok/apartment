<?php

namespace App\Console\Commands;

use App\Mail\Birthday;
use App\User;
use Illuminate\Console\Command;
use Mail;

class AlertBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (date('m-d', strtotime('+1 days')) == date('m-d', strtotime($user->date_of_birth))) {
                Mail::to($user->email)->send(new Birthday($user));
            }
        }
    }
}
