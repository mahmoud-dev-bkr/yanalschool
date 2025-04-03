<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'locale' => 'en',
                'name' => 'English',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'locale' => 'ar',
                'name' => 'Arabic',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        foreach ($data as $key => $value) {

            $lang = DB::table('langs')->where('locale',$value['locale'])->first();
            if(!$lang)
                DB::table('langs')->insert($data);
        }
    }
}



