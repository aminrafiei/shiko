<?php

	use App\Product;
	use App\User;
	use App\Comment;
	use Faker\Generator as Faker;

	/** @var \Illuminate\Database\Eloquent\Factory $factory */

	$factory -> define(Comment::class, function (Faker $faker) {
		$user = factory(User::class) -> create();
		$product = factory(Product::class) -> create();
		return [
			'user_id' => $user -> id,
			'product_id' => $product -> id,
			'title' => $faker -> title,
			'description' => $faker -> text($maxNbChars = 100),
			'isShow' => 0,
		];
	});
