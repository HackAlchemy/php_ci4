<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama'          => 'Angga Yudha',
        //         'alamat'        => 'Jalan Sampulung Jakarta',
        //         'created_at'    => Time::now('Asia/Jakarta'),
        //         'updated_at'    => Time::now('Asia/Jakarta')
        //     ],
        //     [
        //         'nama'          => 'Joko Purwadi',
        //         'alamat'        => 'Jalan Cempaka Jakarta',
        //         'created_at'    => Time::now('Asia/Jakarta'),
        //         'updated_at'    => Time::now('Asia/Jakarta')
        //     ],
        //     [
        //         'nama'          => 'Joni Purwadi',
        //         'alamat'        => 'Jalan Cempaka Jakarta',
        //         'created_at'    => Time::now('Asia/Jakarta'),
        //         'updated_at'    => Time::now('Asia/Jakarta')
        //     ]
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'          => $faker->name,
                'alamat'        => $faker->address,
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now('Asia/Jakarta')
            ];
            $this->db->table('orang')->insertBatch($data);
        }

        // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)",
        //     $data
        // );
    }
}
