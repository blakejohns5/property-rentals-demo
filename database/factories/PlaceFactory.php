<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// called in factory definition for place.title
function getPlaceTitle() {
	$titleCatOne = [ 'Country', 'City', 'Urban', 'Beach', 'Village' ];
	$titleCatTwo = [ 'Villa', 'Apartment', 'Flat', 'Studio', 'Loft', 'House', 'Cottage', 'Cabin'];
	$catOne = $titleCatOne[rand(1, count($titleCatOne)-1)];
	$catTwo = $titleCatTwo[rand(1, count($titleCatTwo)-1)];
	return fake()->cityPrefix() . ' ' . $catOne . ' ' . $catTwo;
}

// called in factory definition for place.tags, returns 3
function getTagStr() {
	$tags = array('sunny', 'bright', 'urban', 'spacious', 'beach', 'walking', 'beach', 'hiking', 'city', 'views', 'terrace');
	shuffle($tags);
	$selectionTags = array_slice($tags, 0, 3);
	return $selectionTags[0] . ', ' . $selectionTags[1] . ', ' . $selectionTags[2];
}


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'title' => getPlaceTitle(),
			'description' => fake()->paragraph(),
			'city' => fake()->cityPrefix() . fake()->citySuffix(),
			'price' => fake()->numberBetween(55, 250) . '.' . fake()->numberBetween(1, 10) . 0,
			'contact' => fake()->safeEmail(),
			'tags' => getTagStr()
		];
	}
}
