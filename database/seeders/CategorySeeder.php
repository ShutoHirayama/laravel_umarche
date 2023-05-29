<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '食材・調味料',
                'sort_order' => 1,
            ],
            [
                'name' => 'アルコール・ソフトドリンク',
                'sort_order' => 2,
            ],
            [
                'name' => '備品',
                'sort_order' => 3,
            ],
            ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => '精肉・加工肉',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '鮮魚・干物',
                'sort_order' => 2,
                'primary_category_id' => 1
            ],
            [
                'name' => '野菜・果物',
                'sort_order' => 3,
                'primary_category_id' => 1
            ],
            [
                'name' => '調味料',
                'sort_order' => 4,
                'primary_category_id' => 1
            ],
            [
                'name' => 'アルコール',
                'sort_order' => 5,
                'primary_category_id' => 2
            ],
            [
                'name' => 'ソフトドリンク',
                'sort_order' => 6,
                'primary_category_id' => 2
            ],
            ]);

    
        }
}
