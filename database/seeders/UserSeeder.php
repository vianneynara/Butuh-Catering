<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->JSONData() as $data) {
            User::factory()->create([
                'user_id' => $data['user_id'], // This will be overridden by the table's auto-incrementer
                'username' => $data['username'],
                'password' => Hash::make($data['username']),
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'date_of_birth' => $data['date_of_birth'],
                'usertype' => $data['usertype'],
                'email_verified_at' => $data['email_verified_at'],
                'remember_token' => $data['remember_token'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at']
            ]);
        }
    }

    public function initialRunner(): void
    {
        User::factory()->count(10)->create();
    }

    private function JSONData(): array
    {
        return [
            [
                "user_id" => 1,
                "username" => "rosariomaggio",
                "password" => "rosariomaggio",
                "first_name" => "Rosario",
                "last_name" => "Maggio",
                "email" => "rosariomaggio@example.org",
                "phone_number" => "650-913-8936",
                "date_of_birth" => "2003-09-05",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "3bvJ4PK0Ai",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 2,
                "username" => "lindsayc",
                "password" => "lindsayc",
                "first_name" => "Lindsay",
                "last_name" => "Casper",
                "email" => "lindsayc@example.com",
                "phone_number" => "+17759135109",
                "date_of_birth" => "1998-07-17",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "GauBTMCxbu",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 3,
                "username" => "mackd",
                "password" => "mackd",
                "first_name" => "Mack",
                "last_name" => "Doyle",
                "email" => "mackd@example.net",
                "phone_number" => "1-272-653-4767",
                "date_of_birth" => "2006-06-02",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "H1xmuDtrBL",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 4,
                "username" => "zackk",
                "password" => "zackk",
                "first_name" => "Zack",
                "last_name" => "Koepp",
                "email" => "zackk@example.org",
                "phone_number" => "1-513-723-5264",
                "date_of_birth" => "2020-08-02",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "YZgA1IF7th",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 5,
                "username" => "peff",
                "password" => "peff",
                "first_name" => "Pinkie",
                "last_name" => "Effertz",
                "email" => "peff@example.org",
                "phone_number" => "(747) 434-6489",
                "date_of_birth" => "1975-02-24",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "xEclT8JiMG",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 6,
                "username" => "ggrimes",
                "password" => "ggrimes",
                "first_name" => "Gonzalo",
                "last_name" => "Grimes",
                "email" => "ggrimes@example.org",
                "phone_number" => "1-805-232-4096",
                "date_of_birth" => "1972-11-12",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "UNeiKz8ERR",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 7,
                "username" => "reese",
                "password" => "reese",
                "first_name" => "Reese",
                "last_name" => "Kozey",
                "email" => "reese@example.com",
                "phone_number" => "+1-618-460-7190",
                "date_of_birth" => "1970-09-29",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "YvMAEGMWZx",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 8,
                "username" => "geneaa",
                "password" => "geneaa",
                "first_name" => "Gene",
                "last_name" => "Aufderhar",
                "email" => "geneaa@example.org",
                "phone_number" => "458-978-5059",
                "date_of_birth" => "1978-08-10",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "Ia405lA1pq",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 9,
                "username" => "kuphal",
                "password" => "kuphal",
                "first_name" => "Kristoffer",
                "last_name" => "Kuphal",
                "email" => "kuphal@example.net",
                "phone_number" => "+1.651.613.0889",
                "date_of_birth" => "1989-03-02",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "RtrLrgVuxl",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 10,
                "username" => "ccole",
                "password" => "ccole",
                "first_name" => "Clyde",
                "last_name" => "Cole",
                "email" => "ccole@example.com",
                "phone_number" => "1-484-805-6821",
                "date_of_birth" => "1972-09-23",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "zD23gCzSSk",
                "created_at" => "2024-06-18 20:47:28",
                "updated_at" => "2024-06-18 20:47:28"
            ],
            [
                "user_id" => 11,
                "username" => "nara",
                "password" => "nara",
                "first_name" => "Nara",
                "last_name" => "N",
                "email" => "nara@kons.dev",
                "phone_number" => "0812345678910",
                "date_of_birth" => "2003-09-23",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "zD13ZCS3uk",
                "created_at" => "2024-06-20 01:47:10",
                "updated_at" => "2024-06-20 01:47:10"
            ],
            [
                "user_id" => 12,
                "username" => "dito",
                "password" => "dito",
                "first_name" => "Dito",
                "last_name" => "M",
                "email" => "dito@kons.dev",
                "phone_number" => "0812334553453",
                "date_of_birth" => "2003-02-11",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "zDg3gCSGEk",
                "created_at" => "2024-06-20 01:47:10",
                "updated_at" => "2024-06-20 01:47:10"
            ],
            [
                "user_id" => 13,
                "username" => "yoga",
                "password" => "yoga",
                "first_name" => "Yoga",
                "last_name" => "G",
                "email" => "yoga@example.com",
                "phone_number" => "081123378910",
                "date_of_birth" => "2003-09-23",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "zD135zY3uk",
                "created_at" => "2024-06-20 01:47:10",
                "updated_at" => "2024-06-20 01:47:10"
            ],
            [
                "user_id" => 14,
                "username" => "bayu",
                "password" => "bayu",
                "first_name" => "Bayu",
                "last_name" => "G",
                "email" => "bayu@kons.dev",
                "phone_number" => "0812qwe45323",
                "date_of_birth" => "2003-11-30",
                "usertype" => "user",
                "email_verified_at" => "2024-06-18 20:47:28",
                "remember_token" => "Z1DDwszdEk",
                "created_at" => "2024-06-20 01:47:10",
                "updated_at" => "2024-06-20 01:47:10"
            ]
        ];
    }
}
