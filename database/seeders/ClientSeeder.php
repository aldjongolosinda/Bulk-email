<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Golosinda',
                'first_name' => 'Aldjohn',
                'middle_name' => 'Barahan',
                'phone_number' => '09568250887',
                'address' => 'Macaas, Tubigon, Bohol.',
                'birth_date' => '2000-09-07',
                'email' => 'aldjohngolosinda@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Olaivar',
                'first_name' => 'Jane',
                'middle_name' => 'Golosinda',
                'phone_number' => '09482772278',
                'address' => 'Trinidad, Guindulman, Bohol.',
                'birth_date' => '1997-03-13',
                'email' => 'janeolaivar@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Golosinda',
                'first_name' => 'Louie',
                'middle_name' => 'Naive',
                'phone_number' => '09398292167',
                'address' => 'Guio-ang, Guindulman, Bohol.',
                'birth_date' => '2002-08-21',
                'email' => 'Louiegolosinda@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Bantula',
                'first_name' => 'Carl',
                'middle_name' => 'Golosinda',
                'phone_number' => '09755453647',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '2002-04-16',
                'email' => 'Carlbantula@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Culaste',
                'first_name' => 'Rowela',
                'middle_name' => 'Golosinda',
                'phone_number' => '0937562823',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '1991-05-11',
                'email' => 'rowelaculaste@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Culaste',
                'first_name' => 'ruel',
                'middle_name' => 'Golosinda',
                'phone_number' => '0987562828',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '1990-12-16',
                'email' => 'ruelculaste@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Golosinda',
                'first_name' => 'Lance',
                'middle_name' => 'Naive',
                'phone_number' => '0987562828',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '1997-11-10',
                'email' => 'lancegolosinda@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Golosinda',
                'first_name' => 'John',
                'middle_name' => 'Barahan',
                'phone_number' => '0947562828',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '1995-11-23',
                'email' => 'johngols@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Gols',
                'first_name' => 'Rio',
                'middle_name' => 'olaiv',
                'phone_number' => '0976562828',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '2000-05-11',
                'email' => 'jojo@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Timbal',
                'first_name' => 'Grasya',
                'middle_name' => 'Bunggo',
                'phone_number' => '0977562828',
                'address' => 'Guio-ang, Guindulman Bohol.',
                'birth_date' => '2003-10-23',
                'email' => 'grasya@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach ($client as $c) {
            Client::create($c);
        }
    }
}
