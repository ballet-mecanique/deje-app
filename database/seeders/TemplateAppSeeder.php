<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Person;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        while ($i <= 10) {
            Employee::factory()
                ->for(Person::factory())
                ->for(Company::factory())
                ->create();
            $i++;
        }
    }
}