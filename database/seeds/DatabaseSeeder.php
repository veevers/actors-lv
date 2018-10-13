<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert([
    'name' => 'Big Daddy Linins',
    'email' => 'linins@big.lv',
    'password' => bcrypt('daddy'),
    ]);		
    DB::table('aktieris')->insert([
    'actor_name' => 'Kaspars',
    'actor_surname' => 'Ozoliņš',
    'birthday' => '1980.04.20',
    'actor_extra' => 'A',
    ]);
    DB::table('valoda')->insert([
    'actor_id' => '1',
    'language' => 'Latviešu',
    'speaking' => 'A',
    'writing' => 'A',
    'understanding' => 'A',
    ]);
    DB::table('valoda')->insert([
    'actor_id' => '1',
    'language' => 'Angļu',
    'speaking' => 'A',
    'writing' => 'A',
    'understanding' => 'A',
    ]);
    DB::table('valoda')->insert([
    'actor_id' => '1',
    'language' => 'Krievu',
    'speaking' => 'A',
    'writing' => 'A',
    'understanding' => 'A',
    ]);
   DB::table('physical')->insert([
    'actor_id' => '1',
    'height' => '174',
    'shoes' => '44',
    'clothes' => 'M',
    'eyes' => 'Zilas',
    'hair' => 'Tumši',
    'body_type' => 'Muskuļots',
    ]);
   DB::table('portfolio')->insert([
    'actor_id' => '1',
    'email' => 'vards.uzvards@inbox.lv',
    'phone_number' => '29123456',
    'address' => 'Rīga, Pilsētas iela 4',
    'education' => 'Angļu', 
    'experience' => 'A',
    'references' => 'A',
    ]);
    }
}
