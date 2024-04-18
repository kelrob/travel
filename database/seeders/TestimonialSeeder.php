<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $testimonialOne = '
            We were referred to GTW Travels by a family friend, and they came highly recommended for their assistance with my mother\'s visa application to the U.S.

            \n Our primary contact was Mr. Joseph, who made the process incredibly smooth. He was extremely supportive, attentive to our needs, and handled everything with utmost professionalism.

            \n I highly recommend GTW Travels for all your travel and visa application needs.
        ';

        $testimonialTwo = '
          We were introduced to GTW Travels through a colleague, and they came highly
          recommended for their assistance with my parents\' visa application to Canada.
          \n
          Initially, I had doubts about working with Mr. Joseph, but he proved me wrong at
          every step of the process.
          \n
          I wholeheartedly recommend them for your travel and visa applications.
        ';

        $testimonialThree = '
            I have always without doubt recommended GTW Travels to all my friends, both abroad
            and in
            Nigeria, whenever they need assistance with a travel agent. Bro. Joseph excels in
            promptly securing desired dates at a very reasonable price. He consistently delivers
            results faster than expected. Without a doubt, I will continue to choose GTW for all
            my travel needs.
        ';

        $testimonialFour = '
            Meets with clients to determine travel needs, budgets, and preferences. Sells and
            coordinates transportation, accommodations, insurance, tours, and activities.
            Advises clients regarding destinations, cultures, customs, weather, and activities.
            Collects payments, books travel arrangements, and pays applicable fees. Handles
            travel issues, conflicts, complaints, cancellations, and refunds. Builds and
            maintains relationships with travel and tour vendors. Attends travel seminars and
            conferences. Conducts research on destinations and industry trends. Maintains
            accurate records of bookings, payments, transactions, phone calls, and meetings. GTW
            Travel: Trusted and Tested ✅✅✅
        ';

        $testimonials = [
            [
                'testimonial' => trim($testimonialOne)
            ],
            [
                'testimonial' => trim($testimonialTwo)
            ],
            [
                'testimonial' => trim($testimonialThree)
            ],
            [
                'testimonial' => trim($testimonialFour)
            ]
        ];
        DB::table('testimonials')->insert($testimonials);
    }
}
