<?php

declare(strict_types=1);

namespace Modules\Fixcity\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Categorie
        DB::table('categories')->insert([
            [
                'id' => 'strade',
                'name' => 'Strade',
                'description' => 'Problemi relativi a strade e marciapiedi',
                'icon' => 'road'
            ],
            [
                'id' => 'illuminazione',
                'name' => 'Illuminazione',
                'description' => 'Problemi di illuminazione pubblica',
                'icon' => 'lightbulb'
            ],
            // ... altre categorie
        ]);

        // Reports
        $this->call([
            ReportContentSeeder::class
        ]);
    }
} 