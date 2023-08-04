<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::firstOrCreate(
            ['id' => 1],
            [
                'id' => '1',
                'name' => 'STANDARD (15 MEMORIAL PACKAGE)',
                'details' => '',
                'secure_access' => 1,
                'decease_bio' => 1,
                'flower_donation' => 1,
                'image_gallery' => 1,
                'automated_anniversary_reminder' => 0,
                'virtual_anniversary' => 0,
                'tribute_notes' => 0,
                'tribute_page' => 0,
                'grave_img' => 0,
                'link_to_grave_site' => 0,
                'link_to_relative_page' => 0,
                'link_wife_to_husband' => 0,
                'merge_wife_and_husband' => 0,
                'dedicated_page' => 0,
                'search_by_name' => 0,

            ],
        );


        Package::firstOrCreate(
            ['id' => 2],
            [
                'id' => '2',
                'name' => 'PREMIUM (30 MEMORIAL PAGES)',
                'details' => '',
                'secure_access' => 1,
                'decease_bio' => 1,
                'flower_donation' => 1,
                'image_gallery' => 1,
                'automated_anniversary_reminder' => 1,
                'virtual_anniversary' => 1,
                'tribute_notes' => 1,
                'tribute_page' => 0,
                'grave_img' => 0,
                'link_to_grave_site' => 0,
                'link_to_relative_page' => 0,
                'link_wife_to_husband' => 0,
                'merge_wife_and_husband' => 0,
                'dedicated_page' => 0,
                'search_by_name' => 0,

            ],
        );
        Package::firstOrCreate(
            ['id' => 3],
            [
                'id' => '3',
                'name' => 'PREMIUM PLUS (50 MEMORIAL PAGES)',
                'details' => '',
                'secure_access' => 1,
                'decease_bio' => 1,
                'flower_donation' => 1,
                'image_gallery' => 1,
                'automated_anniversary_reminder' => 1,
                'virtual_anniversary' => 1,
                'tribute_notes' => 1,
                'tribute_page' => 1,
                'grave_img' => 1,
                'link_to_grave_site' => 1,
                'link_to_relative_page' => 1,
                'link_wife_to_husband' => 1,
                'merge_wife_and_husband' => 1,
                'dedicated_page' => 0,
                'search_by_name' => 0,

            ],
        );
        Package::firstOrCreate(
            ['id' => 4],
            [
                'id' => '4',
                'name' => 'VIP PREMIUM PLUS (80 MEMORIAL PAGES)',
                'details' => '',
                'secure_access' => 1,
                'decease_bio' => 1,
                'flower_donation' => 1,
                'image_gallery' => 1,
                'automated_anniversary_reminder' => 1,
                'virtual_anniversary' => 1,
                'tribute_notes' => 1,
                'tribute_page' => 1,
                'grave_img' => 1,
                'link_to_grave_site' => 1,
                'link_to_relative_page' => 1,
                'link_wife_to_husband' => 1,
                'merge_wife_and_husband' => 1,
                'dedicated_page' => 1,
                'search_by_name' => 1,

            ]
        );
    }
}