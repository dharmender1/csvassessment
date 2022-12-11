<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use Faker\Factory as Faker;
class generateCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:generatecsv {totalrow}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for generatecsv';

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
     * @return int
     */
    public function handle()
    {

        
        $faker = Faker::create();
        
        //name, email, class, school, total-score, address, phone
        echo $usersData = $this->argument('totalrow');
        for ($i = 0; $i < $usersData; $i++) { 
            $student = new Student();
            $student->name = $faker->name;
            $student->email = $faker->email;
            $student->phone = $faker->phoneNumber;
            $student->school =  $faker->company;
            $student->class =$faker->numberBetween(1,12);
            $student->address =  $faker->address;
            $student->total_score =  $faker->numberBetween(30,90);
            $student->save();
        }  

    }
}
