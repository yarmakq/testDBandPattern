<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++){
            \DB::table('organizations')->insert([
                'name_organization'=>'org'.$i,
                'inn'=>rand(10000,20000),
                'kpp'=>rand(10000,20000),
                'legal_address'=>'',
                'mailing_address'=>'',
                'manager'=>'Manager '.$i,
                'email_manager'=>rand(1000,1000).'@mail.ru',
                'number_ati'=>rand(1000,10000),
                'checking_account'=>'',
                'correspondent_account'=>''
            ]);
        }
    }
}
