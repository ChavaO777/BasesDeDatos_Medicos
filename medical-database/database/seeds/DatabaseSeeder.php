<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('StatesTableSeeder');
        $this->call('CitiesTableSeeder');
        $this->call('AddressesTableSeeder');
        $this->call('HospitalsTableSeeder');
        $this->call('OfficesTableSeeder');
        $this->call('PatientsTableSeeder');
        $this->call('SpecialtiesTableSeeder');
        $this->call('DoctorsTableSeeder');
        $this->call('ReviewsTableSeeder');
        $this->call('Doctors_OfficesTableSeeder');
    }
}
