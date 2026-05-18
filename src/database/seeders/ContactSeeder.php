<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([

            'email' => 'deliaggkwkw@gmail.com',

            'instagram' => 'https://instagram.com/imphyy4',

            'github' => 'https://github.com/phymoyy-beep',

        ]);
    }
}