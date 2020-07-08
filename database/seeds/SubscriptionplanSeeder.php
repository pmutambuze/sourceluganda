<?php

use Illuminate\Database\Seeder;
use App\Subscriptionplan;

class SubscriptionplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'student',
                'rate' => 49,
                'word_limit' => '0-3000 words',
                'interval' => 0,
                'currency' => 'dollars',
            ],
            [
                'name' => 'economy',
                'rate' => 69,
                'word_limit' => '3001-4500 words',
                'interval' => 0,
                'currency' => 'dollars',
            ],
            [
                'name' => 'basic',
                'rate' => 89,
                'word_limit' => '4501-6000 words',
                'interval' => 4,
                'currency' => 'dollars',
            ],
            [
                'name' => 'premium',
                'rate' => 109,
                'word_limit' => '6001-7500 words',
                'interval' => 8,
                'currency' => 'dollars',
            ],
            [
                'name' => 'superpremium',
                'rate' => 129,
                'word_limit' => '7501-9000 words',
                'interval' => 12,
                'currency' => 'dollars',
            ],
        ];

        foreach ($plans as $plan) {
            Subscriptionplan::create($plan);
        }
    }
}
