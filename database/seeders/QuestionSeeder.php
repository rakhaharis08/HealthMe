<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run()
     {
         $questions = [
             'Little interest or pleasure in doing things?',
             'Feeling down, depressed, or hopeless?',
             'Trouble falling or staying asleep, or sleeping too much?',
             'Feeling tired or having little energy?',
             'Poor appetite or overeating?',
             'Feeling bad about yourself — or that you are a failure or have let yourself or your family down?',
             'Trouble concentrating on things, such as reading the newspaper or watching television?',
             'Moving or speaking so slowly that other people could have noticed. Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual?',
             'Thoughts that you would be better off dead or of hurting yourself in some way?'
         ];
 
         foreach ($questions as $question) {
             DB::table('questions')->insert([
                 'question' => $question,
             ]);
         }
     }
}
