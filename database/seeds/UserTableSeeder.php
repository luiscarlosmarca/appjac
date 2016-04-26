<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->truncate(); //elimina la bd cada vez que realizo el seed

       
        factory(App\User::class)->create([
            'name'  =>'luiscarlosmarca',
            'email' =>'root@app.com.co',
            
            'password'=>bcrypt('secret')

            ]);


       

    }
}
