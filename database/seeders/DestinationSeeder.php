<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $usaContent = '
            <p class="text-15 text-dark-1">
                Welcome to the land of opportunity, where dreams come to life and adventures await at every
                turn. As you prepare to embark on your journey to the United States, let us be your trusted
                guide,
                illuminating the path to unforgettable experiences and cherished memories.
            </p>

            <h4 class="mt-40">Why Choose the USA?</h4>
            <ul>
                <li class="mt-10">
                    <b>Diverse Landscapes:</b> From the majestic grandeur of the Grand Canyon to the glittering
                    skylines of New York City, the USA boasts a vast tapestry of landscapes waiting to be
                    explored.
                </li>

                <li class="mt-20">
                    <b>Cultural Melting Pot:</b> Immerse yourself in a rich tapestry of cultures, from the
                    vibrant
                    rhythms of New Orleans to the cosmopolitan flair of Los Angeles
                </li>

                <li class="mt-20">
                    <b>Epicurean Delights:</b>Indulge your palate with a mouthwatering array of culinary
                    delights, from sizzling street food to haute cuisine crafted by world-renowned chefs
                </li>

                <li class="mt-20">
                    <b>Iconic Attractions:</b> Stand in awe before iconic landmarks such as the Statue of
                    Liberty,
                    the Golden Gate Bridge, and the dazzling lights of Las Vegas.
                </li>

                <li class="mt-20">
                    <b>Adventure Awaits:</b> : Whether you seek thrills in the great outdoors or excitement in
                    bustling cityscapes, the USA offers endless opportunities for adventure and exploration.
                </li>
            </ul>

            <h4 class="mt-40">Why Wait?</h4>
            <ul>
                <li class="mt-10">
                    <b>Effortless Application:</b>Let our expert team guide you through the visa application
                    process, ensuring a smooth and stress-free experience.
                </li>

                <li class="mt-20">
                    <b>Tailored Itineraries:</b> Whether you long to soak up the sun on a California beach or
                    marvel at the wonders of the Smithsonian museums, we\'ll craft the perfect itinerary to
                    suit your interests.
                </li>

                <li class="mt-20">
                    <b>Unforgettable Memories:</b>From the awe-inspiring beauty of natural wonders to the
                    excitement of iconic attractions, the USA promises a journey filled with unforgettable
                    moments and cherished memories.
                </li>
            </ul>
        ';

        $ukContent = '
            <p class="text-15 text-dark-1">
               Welcome to a world of enchantment and discovery in the United Kingdom!
               Prepare to be spellbound as you embark on a journey that promises to
               awaken your senses and ignite your imagination.
            </p>

            <h4 class="mt-40">Why Choose the USA?</h4>
            <ul>
                <li class="mt-10">
                    <b>Rich Heritage:</b> Immerse yourself in centuries of history as you explore iconic landmarks like the Tower of London and the mystical Stonehenge.
                </li>

                <li class="mt-20">
                    <b>Cultural Marvels:</b>From the electrifying energy of London\'s West End to the serene beauty of Scotland\'s Highlands, the UK offers a cultural tapestry like no other.
                </li>

                <li class="mt-20">
                    <b>Epicurean Delights:</b>Indulge your palate with a mouthwatering array of culinary
                    delights, from sizzling street food to haute cuisine crafted by world-renowned chefs
                </li>

                <li class="mt-20">
                    <b>Gastronomic Delight:</b> Indulge your palate with a tantalizing array of flavors, from traditional fish and chips to exquisite afternoon teas.
                </li>

                <li class="mt-20">
                    <b>Natural Wonders:</b> Lose yourself in the breathtaking landscapes of Cornwall\'s coastline, the Lake District\'s verdant forests, and the rugged beauty of the Scottish Highlands.
                </li>

                <li class="mt-20">
                    <b>Timeless Traditions:</b> Experience the charm of age-old customs, from the pomp and pageantry of the Changing of the Guard to the festive atmosphere of English country fairs.
                </li>
            </ul>

            <h4 class="mt-40">Why Wait?</h4>
            <ul>
                <li class="mt-10">
                    <b>Expert Guidance:</b>Let our experienced team streamline your visa application process, ensuring a stress-free experience.
                </li>

                <li class="mt-20">
                    <b>Tailored Itineraries:</b> Whether you crave cultural immersion or outdoor adventure, we\'ll craft a bespoke itinerary to suit your interests.
                </li>

                <li class="mt-20">
                    <b>Unforgettable Memories:</b>The UK promises an unforgettable journey filled with enchanting moments and cherished memories.
                </li>
            </ul>
        ';

        $canadaContent = '
            <p class="text-15 text-dark-1">
               Welcome to the Great White North, where breathtaking landscapes, vibrant cities, and warm hospitality await. Get ready to embark on a journey of discovery and create memories that will last a lifetime as you prepare to explore Canada.
            </p>

            <h4 class="mt-40">Why Choose the Canada?</h4>
            <ul>
                <li class="mt-10">
                    <b>Natural Wonders:</b> From the majestic Rocky Mountains to the pristine shores of the Great Lakes, Canada is home to some of the world\'s most awe-inspiring natural wonders
                </li>

                <li class="mt-20">
                    <b>Cultural Diversity:</b>Immerse yourself in a rich tapestry of cultures, from the historic charm of Old Quebec to the vibrant neighborhoods of Toronto and Vancouver.
                </li>

                <li class="mt-20">
                    <b>Outdoor Adventures:</b>Whether you\'re skiing in the Rockies, kayaking along the rugged coastline, or hiking through lush forests, Canada offers endless opportunities for outdoor adventure.
                </li>

                <li class="mt-20">
                    <b>Culinary Delight:</b>Indulge your taste buds with a diverse array of culinary experiences, from savory poutine to fresh seafood on the Atlantic coast.
                </li>

                <li class="mt-20">
                    <b>Warm Hospitality:</b> Experience the renowned Canadian hospitality as you meet friendly locals and discover the unique traditions of Indigenous communities across the country.
                </li>
            </ul>

            <h4 class="mt-40">Why Wait?</h4>
            <ul>
                <li class="mt-10">
                    <b>Effortless Application:</b> Let our experienced team guide you through the visa application process, making it simple and stress-free.
                </li>

                <li class="mt-20">
                    <b>Customized Itineraries:</b> Whether you\'re seeking a scenic road trip through the Canadian Rockies or a cultural exploration of Montreal\'s vibrant arts scene, we\'ll create the perfect itinerary tailored to your interests.
                </li>

                <li class="mt-20">
                    <b>Unforgettable Experiences:</b>From witnessing the mesmerizing Northern Lights to exploring charming small towns, Canada promises unforgettable experiences around every corner.
                </li>
            </ul>
        ';

        $franceContent = '
            <p class="text-15 text-dark-1">
               Welcome to the epitome of elegance, where art, culture, and gastronomy converge to create a symphony for the senses. Prepare to be enchanted by the allure of France as you embark on a journey that promises to captivate your heart and soul.
            </p>

            <h4 class="mt-40">Why Choose France?</h4>
            <ul>
                <li class="mt-10">
                    <b>Artistic Heritage</b> Immerse yourself in centuries of artistic excellence as you explore world-renowned museums like the Louvre and admire architectural masterpieces such as the Eiffel Tower and Notre-Dame Cathedral.
                </li>

                <li class="mt-20">
                    <b>Cultural Diversity:</b>Indulge in the culinary treasures of France, from buttery croissants and creamy cheeses to exquisite wines and decadent pastries. Savor the flavors of French cuisine in charming bistros and Michelin-starred restaurants alike.
                </li>

                <li class="mt-20">
                    <b>Charming Countryside:</b>Escape the hustle and bustle of city life and discover the idyllic beauty of the French countryside. Explore picturesque villages nestled amidst rolling vineyards, and wander through fragrant lavender fields in Provence.
                </li>

                <li class="mt-20">
                    <b>Cultural Richness: </b>From the opulence of the Palace of Versailles to the bohemian vibes of Montmartre, France is a country steeped in cultural richness and diversity. Experience
                    the magic of Parisian nightlife, stroll along the Seine River, or lose yourself in the charm of quaint coastal towns.
                </li>

                <li class="mt-20">
                    <b>Fashion and Style:</b> Immerse yourself in the world of haute couture and high fashion as you explore the chic boutiques of Paris and attend glamorous fashion shows during Fashion Week.
                </li>
            </ul>

            <h4 class="mt-40">Why Wait?</h4>
            <ul>
                <li class="mt-10">
                    <b>Effortless Application:</b> Let our experienced team guide you through the visa application process, making it simple and stress-free.
                </li>

                <li class="mt-20">
                    <b>Tailored Experiences:</b> Whether you dream of a romantic getaway in Paris, a wine-tasting tour through Bordeaux, or a cultural immersion in Provence, we\'ll create a customized itinerary to suit your preferences.
                </li>

                <li class="mt-20">
                    <b>Unforgettable Experiences:</b>From sipping champagne atop the Eiffel Tower to watching the sunset over the lavender fields of Provence, France promises a journey filled with unforgettable moments and cherished memories.
                </li>
            </ul>
        ';

        $nigeriaContent = '
             <p class="text-15 text-dark-1">
               Welcome to Nigeria, where vibrant cultures, bustling cities, and warm hospitality await. Prepare to be immersed in a tapestry of traditions, flavors, and experiences as you embark on a journey to this dynamic African nation.
             </p>

            <h4 class="mt-40">Why Choose Nigeria?</h4>
            <ul>
                <li class="mt-10">
                    <b>Cultural Diversity</b> Experience the rich tapestry of Nigeria\'s cultures, from the colorful festivals of the Yoruba people to the vibrant music and dance of the Igbo and Hausa-Fulani communities.
                </li>

                <li class="mt-20">
                    <b>Natural Beauty:</b>Explore the diverse landscapes of Nigeria, from the lush rainforests of Cross River State to the rolling hills of the Plateau region and the breathtaking waterfalls of the Jos Plateau.
                </li>

                <li class="mt-20">
                    <b>Historic Sites:</b>Discover Nigeria\'s fascinating history at UNESCO World Heritage Sites such as the ancient city of Benin, with its impressive walls and moats, and the sacred Osun-Osogbo Grove, a forest sanctuary dedicated to the Yoruba goddess of fertilit
                </li>

                <li class="mt-20">
                    <b>Culinary Delight: </b>Indulge your taste buds with the flavors of Nigerian cuisine, from spicy jollof rice and flavorful soups to succulent grilled meats and delicious street food snacks like suya and akara.
                </li>

                <li class="mt-20">
                    <b>Hospitality:</b> Experience the legendary warmth and hospitality of the Nigerian people as you explore bustling markets, interact with locals, and immerse yourself in everyday life.
                </li>
            </ul>

            <h4 class="mt-40">Why Wait?</h4>
            <ul>
                <li class="mt-10">
                    <b>Effortless Application:</b> Let our experienced team guide you through the visa application process, making it simple and stress-free.
                </li>

                <li class="mt-20">
                    <b>Tailored Experiences:</b> Whether you dream of a romantic getaway in Paris, a wine-tasting tour through Bordeaux, or a cultural immersion in Provence, we\'ll create a customized itinerary to suit your preferences.
                </li>

                <li class="mt-20">
                    <b>Unforgettable Experiences:</b>From sipping champagne atop the Eiffel Tower to watching the sunset over the lavender fields of Provence, France promises a journey filled with unforgettable moments and cherished memories.
                </li>
            </ul>
        ';

        $destinations = [
            [
                'name' => 'United States of America',
                'image' => 'https://images.pexels.com/photos/3166785/pexels-photo-3166785.jpeg?auto=compress&cs=tinysrgb&w=600',
                'banner_image' => 'https://images.unsplash.com/photo-1580655653885-65763b2597d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'text' => trim($usaContent),
                'latitude' => '39.872983285468145',
                'longitude' => '-103.81320926933981'
            ],
            [
                'name' => 'United Kingdom',
                'image' => 'https://images.pexels.com/photos/77171/pexels-photo-77171.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'banner_image' => 'https://images.pexels.com/photos/2611465/pexels-photo-2611465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'text' => trim($ukContent),
                'latitude' => '55.107548589277606',
                'longitude' => '-3.1499703503645082'
            ],
            [
                'name' => 'Canada',
                'image' => 'https://images.pexels.com/photos/3300825/pexels-photo-3300825.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'banner_image' => 'https://images.pexels.com/photos/1750754/pexels-photo-1750754.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'text' => trim($canadaContent),
                'latitude' => '59.78360123582117',
                'longitude' => '-111.38523615411106'
            ],
            [

                'name' => 'France',
                'image' => 'https://images.pexels.com/photos/699466/pexels-photo-699466.jpeg?auto=compress&cs=tinysrgb&w=600',
                'banner_image' => 'https://images.pexels.com/photos/161901/paris-sunset-france-monument-161901.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'text' => trim($franceContent),
                'latitude' => '46.59501691701151',
                'longitude' => '2.912739555971374'
            ],
            [

                'name' => 'Nigeria',
                'image' => 'https://images.unsplash.com/photo-1618828665347-d870c38c95c7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8TmlnZXJpYXxlbnwwfHwwfHx8MA%3D%3D',
                'banner_image' => 'https://images.unsplash.com/photo-1587590010936-300da0d70b9e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'text' => trim($nigeriaContent),
                'latitude' => '9.51637439011505',
                'longitude' => '8.077651501781919'
            ]
        ];

        DB::table('destinations')->insert($destinations);
    }
}
