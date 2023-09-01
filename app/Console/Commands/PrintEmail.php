<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PrintEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'print the email of user who login';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $users = User::all();
        $bar = $this->output->createProgressBar(count($users));
 
        $bar->start();
         
        foreach ($users as $user) {
           // $this->performTask($user);
           $this->info( $user->name);
         
            $bar->advance();
        }
         
        $bar->finish();
        // $this->table(
        //     ['Name', 'Email'],
        //     User::all(['name', 'email'])->toArray()
        // );

        // if ($this->confirm('Do you wish to continue?')) {
        //     echo "Good Person";
        // }
        // else {
        //     echo "not Good Person";

        // }
        // $email = $this->secret('What is your email?');


        // $this->info($email);

        // $this->info('hi zayed'.$this->argument('email'));

        // return DB::table('users')->where('id' , 1)->first() ? 1 : 0;


        // return Command::SUCCESS;
    }
}
