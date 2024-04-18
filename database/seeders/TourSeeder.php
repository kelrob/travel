<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $abeokutaContent = '
           <div id="overview" class="col-12">
               <h3 class="text-22 fw-500 pt-40 border-top-light">
                    THE OLUMO ROCK
               </h3>
               <p class="text-dark-1 text-15 mt-20">
                    The most popular place in Abeokuta is the Olumo rock! A
                    visit to Abeokuta is never complete without visiting the
                    famous rock. This rock provide sanctuary to the people.
                    <br /><br />
                    The first dwellers of Abeokuta settled here on the rocks and
                    in caves and gradually spread out of this location. The rock
                    still serve as the home of a few old Egba women whon are the
                    spiritual heads of Abeokuta
               </p>
               <p class="mt-10">
                    Things to do at the Olumo rock include climbing the mountain
                    on man-made stairs carved into the mountain and rocks.
                    Guests are advised to go along with cameras to take
                    beautiful photos that will be added to their photo albums
                    and bring back magnificent memories. Also, a water bottle is
                    needed during the climb up the mountain. You are advised to
                    wear comfortable but protective clothes as you climb the
                    mountain.
               </p>
               <p class="mt-10">
                    The Olumo rock has folklore of the Egba people and guests
                    would be taken through it by a guide who is available on
                    site. The rock itself is a sight to behold and the Ogun
                    river is also a must-see. One other best feature is that the
                    highest point of the rock is 137 meter above the sea level.
               </p>

           </div>

            <div id="overview" class="col-12">
                <h3 class="text-22 fw-500 pt-40 border-top-light">
                    THE ADIRE MARKET
                </h3>
                <p class="text-dark-1 text-15 mt-20">
                    Adire (Yoruba) textile is a type of dyed cloth made in south
                    west Nigeria by Yoruba women, using a variety
                    of resist-dyeing technique. It is a material designed
                    with wax-resit methods that produce patterned designs in
                    dazzling arrays of tints and hues. It is common among
                    the egba people of Ogun State. The name of the adire market
                    in Abeokuta is known as ITOKUN MARKET.
                </p>
                <p class="mt-10">
                    HIGHLIGHT OF 10 THINGS TO DO IN THIS ADIRE MARKET
                </p>
                <ol>
                    <li style="list-style: decimal">Buy local adire fabric</li>
                    <li style="list-style: decimal">Shop for spices</li>
                    <li style="list-style: decimal">Buy souvenir</li>
                    <li style="list-style: decimal">Enjoy local cuisine</li>
                    <li style="list-style: decimal">Try local craft beer</li>
                    <li style="list-style: decimal">
                        Explore the market history
                    </li>
                    <li style="list-style: decimal">Buy fresh produce></li>
                    <li style="list-style: decimal">Shop for jewelry</li>
                    <li style="list-style: decimal">Buy hand made goods</li>
                    <li style="list-style: decimal">Take in the atmosphere</li>
                </ol>

            </div>

            <div id="overview" class="col-12">
                <h3 class="text-22 fw-500 pt-40 border-top-light">
                    OOPPL ( OLUSEGUN OBASANJO PRESIDENTIAL LIBRARY)
                </h3>
                <p class="text-dark-1 text-15 mt-20">
                    The Olusegun Obasanjo Library Complex exists a full
                    community. It encompasses the Presidential Library and
                    Museum, several tourist attractions such as the zoological
                    gardens, the amphitheatre, the Adire and African Fabrics
                    Centre, as well as several advocacy centres that highlight
                    President Obasanjo’s ongoing preoccupation with improving
                    the lot of his fellow citizens.
                </p>


            </div>

            <div id="overview" class="col-12">
                <h3 class="text-22 fw-500 pt-40 border-top-light">
                    WILDLIFE PARK
                </h3>
                <p class="text-dark-1 text-15 mt-20">
                    The OOPL Wildlife Park is the part of the presidential
                    library which houses over one hundred and forty indigenous
                    and exotic animals. It was set up to encourage wildlife
                    conservation, educate the general public, promote tourism
                    and also support research.
                    <br /><br />
                    Highlights of our Zoo’s collection are lions, spotted and
                    striped hyenas, a Marabou Stork, pythons and a striking
                    aviary that houses several species of fowl.
                </p>
                <p class="mt-10">
                    The Wildlife Park also provides the Animal Adoption
                    Programme. This programme is aimed at recruiting individual
                    and corporate partners who will support the Park in
                    providing the financial resources for the preservation and
                    care of animals that are on the brink of extinction as a
                    result of increased human activities.For more information
                    about the program, please contact us.
                </p>
                <p class="mt-10">
                    The OOPL Wildlife park is opened from 9am to 6pm daily.
                </p>
            </div>
        ';

        $laTropicanaContent = '
            <p class="text-15 text-dark-1">
               Welcome to La Campagne Tropicana Beach Resort, where luxury meets nature in an exquisite fusion of relaxation and adventure. Nestled along the pristine shores of the Atlantic Ocean, our resort offers an unparalleled escape from the ordinary, inviting you to indulge in the beauty and tranquility of Nigeria\'s coastline.
            </p>

            <h4 class="mt-40">A World of Experiences Awaits:</h4>
            <ul>
                <li class="mt-10">
                    <b>Beachfront Bliss:</b> Immerse yourself in the serene beauty of our private beach, where golden sands meet crystal-clear waters. Lounge beneath the swaying palm trees, take a refreshing dip in the ocean, or simply soak up the sun as you unwind in paradise.
                </li>

                <li class="mt-20">
                    <b>Luxurious Accommodations:</b> Experience the height of comfort and elegance in our range of luxurious accommodations, from cozy beachfront cottages to spacious villas overlooking the sea. Each room is thoughtfully designed to ensure a restful and rejuvenating stay.
                </li>

                <li class="mt-20">
                    <b>Cultural Immersion:</b>Delve into the rich cultural heritage of Nigeria with our immersive experiences, including traditional dance performances, storytelling sessions, and arts and
                    crafts workshops led by local artisans. Gain insight into the vibrant traditions of the region as you connect with the vibrant spirit of the Nigerian people.
                </li>

                <li class="mt-20">
                    <b>Adventure and Excitement:</b> Embark on thrilling adventures amidst the natural splendor of our resort. Explore the mangrove forests on a guided canoe ride, soar through the treetops on a zip line adventure, or embark on a safari tour to spot native wildlife in their natural habitat.
                </li>

                <li class="mt-20">
                    <b>Gourmet Dining:</b>Savor the flavors of Nigeria and beyond with our diverse dining options, featuring fresh seafood, international cuisine, and traditional African dishes prepared with the finest ingredients. Enjoy al fresco dining with panoramic views of the ocean, or indulge in a romantic candlelit dinner under the stars.
                </li>
            </ul>

            <h4 class="mt-40">Why Choose La Campagne Tropicana:</h4>
            <ul>
                <li class="mt-10">
                    <b>Unparalleled Beauty:</b> Our dedicated staff are committed to ensuring that your every need is met, from arranging excursions to providing personalized concierge services.
                </li>

                <li class="mt-20">
                    <b>Memorable Experiences:</b> Whether you\'re seeking relaxation, adventure, or cultural immersion, La Campagne Tropicana promises an unforgettable getaway tailored to your desires.
                </li>
            </ul>
            <h4 class="mt-40">Book Your Daycation/Staycation Today:</h4>
            <p class="text-15 text-dark-1">
              Experience the magic of La Campagne Tropicana Beach Resort and create memories that will last a lifetime. Contact us now to reserve your slice of paradise and embark on the ultimate tropical retreat.
            </p>
        ';

        $badagryContent = '
            <p class="text-15 text-dark-1">
               Welcome to Badagry, a city steeped in history and heritage, where every cobblestone street tells a story and every landmark echoes with the footsteps of the past. Discover the rich tapestry of Nigeria\'s cultural legacy as you embark on a journey through time in this captivating destination.
            </p>

            <h4 class="mt-40">Highlights of Badagry:</h4>
            <ul>
                <li class="mt-10">
                    <b>Slave Trade History:</b> Delve into the dark but important history of the transatlantic slave trade at sites like the Badagry Slave Route and the Slave Port. Explore the relics of this tumultuous period, including the Point of No Return, where enslaved Africans departed for the Americas.
                </li>

                <li class="mt-20">
                    <b>Historic Landmarks:</b> Visit iconic landmarks such as the Brazilian Baracoon and the first storey building in Nigeria, which offer insight into Badagry\'s colonial past and its connections to the wider world.
                </li>

                <li class="mt-20">
                    <b>Cultural Immersion:</b>Immerse yourself in the vibrant culture of Badagry as you interact with local communities and partake in traditional ceremonies and festivals. Experience
                    the rhythm of local music and dance, sample authentic cuisine, and learn about indigenous customs and traditions.
                </li>

                <li class="mt-20">
                    <b>Natural Beauty:</b> Explore the scenic beauty of Badagry\'s coastline, with its pristine beaches and tranquil waters. Take a leisurely boat ride along the lagoon, go fishing with local fishermen, or simply relax and enjoy the stunning sunsets over the Gulf of Guinea.
                </li>

                <li class="mt-20">
                    <b>Art and Handicrafts:</b>Discover the creativity and craftsmanship of Badagry\'s artisans as you browse local markets and workshops. Shop for handmade souvenirs, including intricately woven textiles, carved wooden masks, and vibrant beadwork.
                </li>
            </ul>

            <h4 class="mt-40">Why Visit Badagry:</h4>
            <ul>
                <li class="mt-10">
                    <b>Historical Significance:</b> Badagry offers a unique opportunity to learn about Nigeria\'s past and its role in the global slave trade, making it a must-visit destination for history enthusiasts.
                </li>

                <li class="mt-20">
                    <b>Cultural Enrichment:</b> Experience the warmth and hospitality of the local people as you engage with their customs, traditions, and way of life.
                </li>

                <li class="mt-20">
                    <b>Educational Experience:</b> A visit to Badagry provides valuable insights into Nigeria\'s history, culture, and identity, making it an enriching experience for visitors of all ages.
                </li>
            </ul>
            <h4 class="mt-40">Plan Your Badagry Excursion:</h4>
            <li class="mt-20">
                <b>Guided Tours:</b> Explore Badagry\'s historic sites and cultural attractions with knowledgeable guides who can provide context and interpretation.
            </li>
            <li class="mt-20">
                <b>Educational Programs:</b> Participate in educational programs and workshops focused on topics such as African history, heritage preservation, and community development.
            </li>
             <li class="mt-20">
                <b>Community Engagement:</b> Support local initiatives and community-led projects that aim to preserve Badagry\'s heritage and promote sustainable tourism.
            </li>
        ';

        $cotonouContent = '
            <p class="text-15 text-dark-1">
               Welcome to Casa Del Papa, where luxury meets adventure on the stunning shores of Cotonou, Benin. Allow us to be your guide as you explore the vibrant culture, rich history, and natural beauty of Cotonou and its surrounding areas, creating unforgettable memories along the way.
            </p>

            <h4 class="mt-40">Discover Cotonou: Highlights of Your Tour:</h4>
            <ul>
                <li class="mt-10">
                    <b>City Exploration:</b> Dive into the heart of Cotonou and discover its bustling markets, vibrant neighborhoods, and historic landmarks. Explore the Grand Marché Dantokpa, one
                    of West Africa\'s largest markets, where you can shop for local crafts, textiles, and spices amidst a lively atmosphere.
                </li>

                <li class="mt-20">
                    <b>Historical Sites:</b> Immerse yourself in the history of Benin with visits to iconic landmarks such as the Fondation Zinsou, a contemporary art museum showcasing the country\'s cultural heritage, and the Ouidah Museum of History, which offers insights into Benin\'s colonial past and its role in the transatlantic slave trade.
                </li>

                <li class="mt-20">
                    <b>Cultural Encounters:</b> Experience the rich cultural tapestry of Cotonou through encounters with local artisans, musicians, and storytellers. Visit traditional craft workshops, attend live music performances, and sample authentic Beninese cuisine at local eateries.
                </li>

                <li class="mt-20">
                    <b>Natural Wonders:</b> Venture beyond the city limits and explore the natural beauty of Benin\'s coastline and countryside. Take a boat tour of Lake Nokoué, home to picturesque fishing villages and stunning birdlife, or relax on the pristine beaches of Grand Popo and Ouidah.
                </li>

                <li class="mt-20">
                    <b>Adventure and Excursions:</b>Embark on thrilling excursions and outdoor activities that showcase the diverse landscapes of Benin Republic
                </li>
            </ul>

            <h4 class="mt-40">Why Choose Casa Del Papa:</h4>
            <ul>
                <li class="mt-10">
                    <b>Expert Guides:</b> Our experienced guides will accompany you on your tour of Cotonou, providing insights into the city\'s history, culture, and traditions.
                </li>

                <li class="mt-20">
                    <b>Convenient Accommodations:</b> After a day of exploration, return to the comfort and luxury of Casa Del Papa, where you can relax and rejuvenate in our tranquil surroundings.
                </li>

                <li class="mt-20">
                    <b>Tailored Experiences:</b> Whether you\'re interested in history, culture, or outdoor adventure, we\'ll customize your tour to suit your interests and preferences.
                </li>
            </ul>
        ';

        $dohaContent = '
            <p class="text-15 text-dark-1">
               Welcome to Doha, the vibrant capital of Qatar, where modernity intertwines seamlessly with tradition, offering a kaleidoscope of experiences waiting to be explored. Let us be your guide as you embark on an enriching journey through the heart of this dynamic city.
            </p>

            <h4 class="mt-40">Highlights of Your Doha Tour:</h4>
            <ul>
                <li class="mt-10">
                    <b>Iconic Landmarks:</b> Explore Doha\'s impressive skyline adorned with architectural marvels. Marvel at the iconic silhouette of the Torch Tower, snap photos of the futuristic Doha Tower, and admire the grandeur of the Katara Cultural Village.
                </li>

                <li class="mt-20">
                    <b>Cultural Immersion:</b> Immerse yourself in Qatar\'s rich heritage with visits to cultural hubs like the Museum of Islamic Art, where you can admire priceless artifacts and exhibitions showcasing the region\'s artistic legacy. Dive into the vibrant atmosphere of
                    Souq Waqif, a bustling marketplace brimming with traditional handicrafts, spices, and souvenirs.
                </li>

                <li class="mt-20">
                    <b>Culinary Delights:</b> Indulge your senses with the flavors of Qatari cuisine. Sample mouthwatering dishes such as fragrant lamb machboos, savory kebabs, and delectable Arabian sweets at local eateries and fine dining restaurants.
                </li>

                <li class="mt-20">
                    <b>Desert Adventures:</b> Venture into the vast expanse of the Qatari desert for an exhilarating adventure. Embark on a thrilling desert safari, where you can experience the rush of dune bashing, ride camels across the sandy terrain, and witness a breathtaking desert sunset.
                </li>

                <li class="mt-20">
                    <b>Modern Luxuries:</b> Treat yourself to a taste of luxury in Doha\'s upscale districts. Shop till you drop at world-class malls like Villaggio Mall and The Pearl-Qatar, indulge in rejuvenating spa treatments at luxurious wellness centers, and savor gourmet cuisine at Michelin-starred restaurants.
                </li>
            </ul>

            <h4 class="mt-40">Why Choose Doha for Your Tour:</h4>
            <ul>
                <li class="mt-10">
                    <b>Diverse Experiences:</b> Doha offers a diverse range of attractions, from cultural landmarks to modern leisure facilities, ensuring there\'s something for every traveler.
                </li>

                <li class="mt-20">
                    <b>Warm Hospitality:</b> Experience the renowned hospitality of Qatar as you interact with locals and immerse yourself in the city\'s welcoming atmosphere.
                </li>

                <li class="mt-20">
                    <b>Safety and Comfort:</b> Enjoy peace of mind knowing that Doha prioritizes safety and comfort for its visitors, providing a secure and enjoyable travel experience.
                </li>
            </ul>
        ';

        $kigaliContent = '
            <p class="text-15 text-dark-1">
               Welcome to Kigali, the vibrant and thriving capital city of Rwanda, where the past seamlessly merges with the present to create a dynamic and culturally rich urban center. Let us be your guide as you delve into the essence of this remarkable city, where warmth, resilience, and progress converge.
            </p>

            <h4 class="mt-40">Highlights of Your Kigali Tour:</h4>
            <ul>
                <li class="mt-10">
                    <b>Genocide Memorial:</b> Begin your journey at the Kigali Genocide Memorial, a poignant tribute to the victims of the 1994 Rwandan genocide. Explore the memorial\'s exhibits, gardens, and monuments, gaining insight into Rwanda\'s tragic history and the nation\'s
                </li>

                <li class="mt-20">
                    <b>Cultural Encounters:</b> Immerse yourself in Rwanda\'s vibrant culture with visits to local markets, artisan cooperatives, and cultural centers. Discover traditional crafts, such as colorful textiles and intricate basketry, and engage with local artisans to learn about their techniques and heritage.
                </li>

                <li class="mt-20">
                    <b>Gorilla Trekking: </b> Embark on an unforgettable adventure to Volcanoes National Park, home to the majestic mountain gorillas. Trek through lush rainforests, guided by experienced trackers, and encounter these magnificent creatures in their natural habitat, an experience that promises to be both humbling and awe-inspiring.
                </li>

                <li class="mt-20">
                    <b>City Exploration: </b> Explore the bustling streets and vibrant neighborhoods of Kigali, where modern skyscrapers stand alongside bustling markets and historic landmarks. Visit the vibrant Kimironko Market, where you can sample local produce and interact with friendly vendors and admire the panoramic views from the Kigali Convention Centre.
                </li>

                <li class="mt-20">
                    <b>Culinary Delights:</b> Savor the flavors of Rwandan cuisine, a delightful fusion of East African, Indian, and European influences. Sample traditional dishes such as hearty brochettes (grilled skewers), spicy bean stew, and fragrant pilau rice, accompanied by refreshing banana beer or locally brewed coffee.
                </li>
            </ul>

            <h4 class="mt-40">Why Choose Kigali for Your Tour:</h4>
            <ul>
                <li class="mt-10">
                    <b>Warm Hospitality:</b> Experience the renowned warmth and hospitality of the Rwandan people as you interact with locals and immerse yourself in the city\'s welcoming atmosphere.
                </li>

                <li class="mt-20">
                    <b>Cultural Diversity:</b> Kigali offers a rich tapestry of cultural experiences, from poignant memorials to vibrant markets and lively street scenes, providing insights into Rwanda\'s complex history and diverse heritage.
                </li>

                <li class="mt-20">
                    <b>Natural Beauty:</b>Discover the breathtaking landscapes and diverse ecosystems of Rwanda, from the verdant rainforests of Nyungwe National Park to the serene shores of Lake Kivu, offering opportunities for outdoor adventures and wildlife encounters.
                </li>
            </ul>
        ';

        $tours = [
            [
                'featured_image' => 'https://live.staticflickr.com/960/40079593530_fce35b75ab_b.jpg',
                'title' => 'Abeokuta Adventures: Explore Beyond Expectations',
                'departure_date' => '2024-03-18',
                'price' => '5000000',
                'location' => 'Abeokuta, Ogun State',
                'images' => json_encode([
                    'https://upload.wikimedia.org/wikipedia/commons/3/36/Front_view_of_the_Olusegun_Obasanjo_Presidential_Library.jpg',
                    'https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcShN6q6SyzJSAW9usOTQsvf5oRzFdsYA3sMGcQ-6nQn14SbSl6VIevJIO2RW3KTO8dwj6BfP5UvKYGIJqlHLeymwM12qn5-Pklh-GsfUg',
                    'https://lh5.googleusercontent.com/p/AF1QipOz_xa-yzGHxybYRNDYvF1iS6C9x-M1RbNS8XxX=w810-h468-n-k-no',
                    'https://lh5.googleusercontent.com/p/AF1QipNRcJ0wka_dA1XDShEubdv1V7ZLoKkjNeQjoUDP=w810-h468-n-k-no'
                ]),
                'text' => trim($abeokutaContent),
            ],
            [
                'featured_image' => 'https://images.pexels.com/photos/6126944/pexels-photo-6126944.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'title' => 'Lacampagne Tropicana Beach Resort: Discover Paradise at La Campagne Tropicana Beach Resort',
                'departure_date' => '2024-01-18',
                'price' => '5500000',
                'location' => 'Lekki, Lagos State',
                'images' => json_encode([
                    'https://lacampagnetropicana.com/asset/img/kodi4.jpg',
                    'https://lacampagnetropicana.com/asset/img/beach1.jpg',
                    'https://lacampagnetropicana.com/asset/img/obailerigi2.jpg',
                    'https://lacampagnetropicana.com/asset/img/snookbar.jpg',
                    'https://lacampagnetropicana.com/asset/img/beach5.jpg'
                ]),
                'text' => trim($laTropicanaContent),
            ],
            [
                'featured_image' => 'https://images.unsplash.com/photo-1664276928719-7748f6d912be?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Badagry: Journey Through History: Explore Badagry, Nigeria\'s Gateway to the Past',
                'departure_date' => '2024-11-18',
                'price' => '5540000',
                'location' => 'Badagry, Lagos State',
                'images' => json_encode([
                    'https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcRLqeRn_Fd3V9nAYirHaIki_z1kneVB-E63CSLKJZYRtXX7zmIH22Yehr_xRi1BtLGyTX1SdVoCupkxiyBHfdoMEvxZRH1TOKnnrzPR3Q',
                    'https://lh5.googleusercontent.com/p/AF1QipOvPQVKY_PSXb2IkaDc0dZrZwbKFDY8J7qHv-Ow=w810-h468-n-k-no',
                    'https://lh5.googleusercontent.com/p/AF1QipMCXMA5RQBGjfvQCpq8SxD_OcYQV965RYhekFeP=w810-h468-n-k-no',
                ]),
                'text' => trim($badagryContent),
            ],
            [
                'featured_image' => 'https://images.pexels.com/photos/11740221/pexels-photo-11740221.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'title' => 'Experience the Best of Cotonou with Casa Del Papa: Your Gateway to Adventure',
                'departure_date' => '2024-09-18',
                'price' => '1540000',
                'location' => 'Cotonou, Benin Republic',
                'images' => json_encode([
                    'https://lh3.googleusercontent.com/p/AF1QipP9XAPOIVoBHM7dMgpCDSbcAbrhsdGZOIg7xKxS=s1360-w1360-h1020',
                    'https://lh3.googleusercontent.com/p/AF1QipP1kxnMj8XzhgyJhmd1KMcVufKjFwVjwqemmSVX=s1360-w1360-h1020',
                    'https://lh3.googleusercontent.com/p/AF1QipPH_XFCU-0s34Xq_PSri3ey0v2_O31NH9-CDH1f=s1360-w1360-h1020',
                    'https://lh3.googleusercontent.com/p/AF1QipOhPta4FeI1O2wC_i1iUeDdiGMiNBlF9DN2nmOK=s1360-w1360-h1020'
                ]),
                'text' => trim($cotonouContent),
            ],
            [
                'featured_image' => 'https://images.pexels.com/photos/5075093/pexels-photo-5075093.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2',
                'title' => 'Discover Doha: Your Gateway to Unforgettable Experiencess',
                'departure_date' => '2024-08-18',
                'price' => '5403000',
                'location' => 'Doha',
                'images' => json_encode([
                    'https://images.pexels.com/photos/12074226/pexels-photo-12074226.jpeg?auto=compress&cs=tinysrgb&w=600',
                    'https://plus.unsplash.com/premium_photo-1697730103920-525936ee11ee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1507904139316-3c7422a97a49?q=80&w=2025&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1562823083-3f86817ec7a2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1604433203862-93bc73b0f1e9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
                ]),
                'text' => trim($dohaContent),
            ],
            [
                'featured_image' => 'https://images.unsplash.com/photo-1598605170898-853b9ae903fc?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Discover Kigali: Unveiling the Heart of Rwanda',
                'departure_date' => '2024-08-30',
                'price' => '15403000',
                'location' => 'Rwanda, Kigali',
                'images' => json_encode([
                    'https://images.unsplash.com/photo-1598605272254-16f0c0ecdfa5?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1565349479047-d6211d4efc90?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1648708511872-5426c0f29c27?q=80&w=1862&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1668875438994-4388304392ef?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                    'https://images.unsplash.com/photo-1665069674660-b4787aada043?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                ]),
                'text' => trim($kigaliContent),
            ]
        ];

        DB::table('tours')->insert($tours);
    }
}
