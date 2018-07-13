<?php

use Illuminate\Database\Seeder;

class SignatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('signatures')->insert([
          'name' => 'Beth Salvatore',
          'email' => 'beth@example.com',
          'body' => 'This is a test.'
        ]);
    }
}
