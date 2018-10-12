<?php

	use Faker\Generator as Faker;
	use App\Product;
	use App\Picture;
	use Illuminate\Http\UploadedFile;

	/** @var \Illuminate\Database\Eloquent\Factory $factory */
	$factory -> define(Picture::class, function (Faker $faker) {

		$product = factory(Product::class) -> create();

		return [
			//'picture' => $file = UploadedFile ::fake() -> image('picture.png', 800, 400),

			'picture' => $faker->image('public/images',400,300, null, false),
			'product_id' => $product -> id,
		];
	});
