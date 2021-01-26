<?php

namespace Database\Seeders;

use App\Models\History;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        for ($date_at = (new Carbon())->addMonths(-6); $date_at->isPast(); $date_at->addDay()) {
            History::factory()->state(compact('date_at'))->create();
        }
    }
}
