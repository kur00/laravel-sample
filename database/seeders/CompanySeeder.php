<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create(['name' => '株式会社サンプル', 'address' => '東京都千代田区1-1-1']);
        Company::create(['name' => '合同会社デモ', 'address' => '大阪府大阪市北区2-2-2']);
    }
}
