<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Name Company',
            'description' => 'Lorem Ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Isikan Alamat (Jln, Kota, Provinsi)',
            'email' => 'email@gmail.com',
            'telepon' => '089xxxxxxxxx',
            'maps_embed' => 'maps.com',
        ]);
    }
}
