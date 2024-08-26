<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoryChatSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('history_chat')->insert([
            'send_chat' => 'Who am I?',
            'get_chat' => 'You are a sentient human being',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
