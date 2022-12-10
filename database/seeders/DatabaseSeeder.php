<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


		Place::create([			
			'title' => 'Costa de Sol Beach 1',
			'description' => 'A bright, amazing apartment in a hidden corner of a small beach town on Costa de  Sol. A fantastic place for a family getaway or for much-needed relaxation.',
			'tags' => 'beach, sunny, renovated',
			'city' => 'Estepona',
			'price' => 196.00,
			'contact' => 'sunnybeachgetaway@example.com'
		]);

		Place::create([
				'title' => 'City Loft 1',
				'description' => 'A large, space fit for large families or groups looking for a creative, comfortable base for exploring the city.',
				'tags' => 'bright, central, open',
				'city' => 'Madrid',
				'price' => 200.00,
				'contact' => 'rocktheloft@example.com'
		]);
		
		Place::create([
				'title' => 'City Loft 2',
				'description' => 'Similar to our City Loft 1, but with even a bit more space for large groups travelling together. Large windows look out onto a local plaza, with plenty of activities and nightlife, and a metro within a 5-minute walk.',
				'tags' => 'bright, central, open',
				'city' => 'Madrid',
				'price' => 225.00,
				'contact' => 'urbanindustrial@example.com'
		]);
		 
		Place::create([
			'title' => 'Country Catalan Masia',
			'description' => 'In the countryside near popular beach destinations, this spectacular country house and property is a relaxing and unique place to spend a week with family or friends. A short drive from Tossa de Mar on the Catalonian Costa Brava, with restaurants, shops, and activities, but isolated enough to escape the hustle and bustle.',
			'tags' => 'beach, sunny, renovated',
			'city' => 'Girona Province',
			'price' => 180.00,
			'contact' => 'yourmasia@example.com'
		]);
    }
}
