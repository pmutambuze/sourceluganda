<?php

use Illuminate\Database\Seeder;
use App\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            ['description' => 'Instant Paper Submission'],
            ['description' => 'No Copyright Transfer'],
            ['description' => 'Publication Certificate'],
            ['description' => 'Quick Editorial Decision'],
            ['description' => 'Priority Author Service'],
            ['description' => 'Loyalty Reward'],
            ['description' => 'Loyalty Reward Validity'],
            ['description' => 'Premium Category Display'],
            ['description' => 'Featured Article Promotion'],
            ['description' => 'Author Photographs'],
            ['description' => 'Author Biography'],
            ['description' => 'Author Social Media Profile'],
            ['description' => 'Top Listing In Current Issue'],
            ['description' => 'Article Title Highlighter'],
            ['description' => 'Social Media Promotion'],
            ['description' => 'Modification After Publication'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
