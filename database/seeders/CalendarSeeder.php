<?php

namespace Database\Seeders;

use App\Models\PresentForms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CalendarSeeder extends Seeder
{
    public function run()
    {
        $today = Carbon::today();

        for ($i = 0; $i < 30; $i++) {
            Calendar::create([
                'date' => $today->addDays($i),
                'event_name' => 'Sample Event ' . ($i + 1),
                'event_description' => 'This is a sample event description for Event ' . ($i + 1),
            ]);
        }
    }
}