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
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new blade file ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        //get the argument

        $argument = $this->argument('view');

        //craete full path from your argument 


       $path = $this->getFullPath($argument);

        $this->checkFolder($path);

        if(File::exists($path)){
            $this->error('this file already exists');
            return 0;

        }
        File::put($path , $path);
        $this->info('view has been created succesfully');


        //check ig not exists 

      // return Command::SUCCESS;
    }

    public function getFullPath($argument): string {



        $view =str_replace('.' , '/' , $argument);
        $view .= '.blade.php';

        $path="resources/views/{$view}";




        return $path;
        dd($path);
    }

    public function checkFolder($path){
        $directory =dirname($path);


        if(!\file_exists($directory)){
            mkdir($directory , 0777 , true);
        }
        //($directory);

    }
}
