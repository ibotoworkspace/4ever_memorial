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
                'details' => '
                <div class="col-sm-6">
                                        <div class="plandata">
                                            <h4>STANDARD (15 MEMORIAL PAGES)</h4>
                                            <div class="mincardboxhght">
                                                <p>Highly Secure With Password Login Access <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Decease Bio <span class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Flower Donation Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Image Gallery <span class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(1)"
                                                        class="btn btn-primary banclick">Buy Now</button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                ',
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
                'details' => '
                <div class="col-sm-6">
                                        <div class="plandata">
                                            <h4>PREMIUM (30 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>All in Standard And Biography of Deceased And Family Members <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Automated Anniversary Reminder <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Virtual Anniversary Organize By 4Ever (Extra Cost) <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Tribute Notes And Letters By Friends <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">

                                                    <button onclick="submit_update_plan(2)"
                                                        class="btn btn-primary banclick">Buy Now</button>


                                                </a>
                                            </div>
                                        </div>
                                    </div>
                ',
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
                'details' => '
                <div class="col-sm-6">

                                        <div class="plandata">
                                            <h4>PREMIUM PLUS (50 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>All in Standard And Premium Including <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Tribute Page For Message From Family And Friends <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>Grave Yard Image On Top Of The Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Link To Physical Grave Site <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Link Memorials Of Relative To Their Pages, Example <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>A. Wife Page Link To Husband Or Husband Page Link Wife <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                                <p>B. Husband Or Wife Memorials Merge Together <span
                                                        class="sidetick"><i class="fa fa-check-circle"
                                                            aria-hidden="true"></i></span></p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(3)"
                                                        class="btn btn-primary banclick">Buy Now</button>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                ',
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
                'details' => '
                <div class="col-sm-6">

                                        <div class="plandata">
                                            <h4>VIP PREMIUM PLUS (80 MEMORIAL PAGES)</h4>

                                            <div class="mincardboxhght">
                                                <p>(All in Premium Plus) <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Customized Dedicated Page <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Highly Secure Login Access <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>And All in Premium Plus <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                                <p>Search By Name For A Brief Information <span class="sidetick"><i
                                                            class="fa fa-check-circle" aria-hidden="true"></i></span>
                                                </p>
                                            </div>

                                            <div class="inerpkgclick">
                                                <a data-toggle="tab" href="#menu3">
                                                    <button onclick="submit_update_plan(4)"
                                                        class="btn btn-primary banclick">Buy Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                ',
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