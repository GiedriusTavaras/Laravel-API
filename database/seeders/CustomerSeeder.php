<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $giedrius = Customer::create(['name' => 'Giedrius', 'last_name' => 'Tavaras', 'address' => 'Vilnius, Traku r.', 'password' => 'Gtgvb76td']);
        $joe = Customer::create(['name' => 'Joe', 'last_name' => 'Rogan', 'address' => 'New Zealand, Hastings', 'password' => 'Nztbjjs']);
        $peter = Customer::create(['name' => 'Peter', 'last_name' => 'Liurvelin', 'address' => 'Edinburgh, 55  Park Row', 'password' => 'asdfghjk854345']);
        $emma = Customer::create(['name' => 'Emma', 'last_name' => 'Lewthwaite', 'address' => 'Edinburgh, 90  Park Row', 'password' => 'aszdfseegsegs54345']);

        $giedrius->emails()->createMany([
            ['email' => 'tavaraz@gmail.com'],
        ]);

        $joe->emails()->createMany([
            ['email' => 'rogan.nz@nz.com'],
        ]);

        $emma->emails()->createMany([
            ['email' => 'emma.lewthwaite@gmail.com'],
        ]);

    }
}
