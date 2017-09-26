<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\liveaboard::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'star' => rand(1,5),
        'description' => '<p>The 50m Scubaspa Ying is a unique liveaboard located in the Maldives and expertly combines luxury scuba diving with luxury spa treatments to create the pinnacle of luxury liveaboards and sister ship to the ScubaSpa Yang. There are 29 staff members onboard Scubaspa Ying including 6 full time spa therapists. Scubaspa Ying has a variety of cabins and suites to meet the needs and expectations of every guest. All rooms are spacious, elegant and serene. The restaurant offers fine dining with an international flair and the finest wines.</p><p>Scubaspa Ying schedules diving cruises year round to the central atolls in the Maldives. The vessel can accommodate up to 44 passengers but only accommodates 22 divers. This allows divers personal attention from the dive crew for a fantastic dive excursion. Scuba Divers will enjoy spectacular diving on the best atolls in the Maldives. Scubaspa Ying is accompanied by its own spacious, well equipped dive boat, which serves as a floating dive centre.</p><p>Not only a great choice for divers, Scubaspa Ying caters perfectly to non-divers also. Non-divers can choose the "Spa Package" which includeds 8 spa treatments, but a variety of activities are also available on board. Included in all packages is daily morning yoga, snorkeling the clear blue waters of the Maldives, BBQ on a sandy island, kayaking and stand up paddleboarding. Whether you are a scuba diver, spa lover or both, Scubaspa Ying is the perfect liveaboard holiday for you.</p>',
        'boat_features' => '<li>Laundry Service</li>
        <li>Leisure Deck</li>
        <li>Shaded diving deck</li>
        <li>Massage</li>
        <li>Daily housekeeping</li>
        <li>Audio & video entertainment</li>
        <li>Free Internet</li>
        <li>Air Conditioned saloon</li>
        <li>Aircon Cabins</li>
        <li>Sun Deck</li>
        <li>Non-Diver (Snorkeler) Friendly</li>
        <li>Outdoor Dining</li>
        <li>Hot Tub</li>',
        'food_and_drinks' => '<li>Western Food</li>
        <li>Local Food</li>
        <li>Vegetarian Options</li>
        <li>Selection of wines</li>
        <li>Fine Cuisine</li>',
        'diving' => '<li>Nitrox available</li>
        <li>Dive deck</li>
        <li>Tenders for diving</li>',
        'gear_rental' => '<ul>
        <li><span>15L tanks:</span>USD 5 per dive   </li>
        <li><span>Wetsuit:</span>USD 12 per day (USD 60 per week)   </li>
        <li><span>Regulator:</span>USD 12 per day (USD 60 per week)   </li>
        <li><span>BCD:</span>USD 12 per day (USD 60 per week)   </li>
        <li><span>Dive Computer:</span>USD 12 per day (USD 60 per week)   </li>
        <li><span>U/W photo camera rental:</span>GoPro 4 Camera USD 30 per day (USD150 per week)   </li>
        </ul>',
        'vessel_layout_photo' => 'https://d2io85bc6qsg2z.cloudfront.net/picture_library/boat/4448/ScubaSpa_Ying_deckplan.jpg',
        'boat_specifications' => '<ul style="style-1 mb-0">
        <li><span>Length:</span>50 m</li>
        <li><span>Beam:</span>11.2 m</li>
        <li><span>Engines:</span>2 no CAT C9 Acert 503 BHP</li>
        <li><span>Max guests:</span>22 (44 pax in total including spa package guests)</li>
        <li><span>Number of cabins:</span>21</li>
        <li><span>Number of bathrooms:</span>24</li>
        <li><span>Tenders:</span>diving dhoni with CAT C7 275 BHP engine</li>
        <li><span>Water capacity:</span>22540 liter</li>
        <li><span>Fuel capacity:</span>19000 liters</li>
        <li><span>Freshwater maker:</span>2 no Aquagiv 260 ltr/hr</li>
        </ul>',
        'other_features' => '<li>GPS</li>
        <li>Emergency Rafts</li>
        <li>Life Vests</li>
        <li>Fire Alarm & Fire Extinguishers</li>
        <li>Oxygen</li>
        <li>First Aid Kits</li>',
        'owner_address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->url
        
    ];
});

$factory->define(App\liveaboard_photo::class, function (Faker $faker) {
    $photo = '/img/bg/' . rand(1,11) . '.jpg';

    return [
        'liveaboard_id' => factory(App\liveaboard::class)->create()->id,
        'photo_url' => $photo,
    ];
});