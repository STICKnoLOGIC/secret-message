<?php

namespace Database\Seeders;

use App\Models\AdsUrlBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsBanner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ads = [
            [
                'url' => '//pl27792213.effectivegatecpm.com/bcb746976ca53f11f9d6d0db360d6a56/invoke.js',
                'div' => 'container-bcb746976ca53f11f9d6d0db360d6a56',
            ],
            [
                'url' => '//pl27792213.effectivegatecpm.com/bcb746976ca53f11f9d6d0db360d6a56/invoke.js',
                'div' => 'container-bcb746976ca53f11f9d6d0db360d6a56',
            ],
            [
                'url' => '',
                'div' => '',
            ],
            [
                'url' => '',
                'div' => '',
            ],
            [
                'url' => '',
                'div' => '',
            ],
        ];

        foreach ($ads as $ad) {
            AdsUrlBanner::updateOrCreate(
                ['div' => $ad['div']], // prevent duplicates
                $ad
            );
        }
    }
}
