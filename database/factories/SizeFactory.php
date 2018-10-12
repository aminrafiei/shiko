<?php

	use Faker\Generator as Faker;
	use App\Size;
	/** @var \Illuminate\Database\Eloquent\Factory $factory */
	$factory->define(Size::class, function (Faker $faker) {
		$size=$faker ->randomElement([
			'S',
			'M',
			'L',
			'XL',
			'XXL',
			'XXXL',
		]);
		return [
			'cloth_size'=>$size,
			'pants_size'=>null,
		];
	});
