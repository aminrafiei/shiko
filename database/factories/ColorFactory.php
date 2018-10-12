<?php

	use Faker\Generator as Faker;
	use App\Color;

	/** @var \Illuminate\Database\Eloquent\Factory $factory */
	$factory -> define(Color::class, function (Faker $faker) {
		return [
			'color' => $faker -> colorName,
		];
	});
