<?php

	use App\Category;
	use Faker\Generator as Faker;
	/** @var \Illuminate\Database\Eloquent\Factory $factory */

	$factory -> define(Category::class, function (Faker $faker) {
		$name = $faker -> randomElement([
			'کت جودون',
			'کت کتان',
			'کاپشن چهاخونه شمعی',
			'کاپشن فوتر ساده',
			'کاپشن فوتر خزدار',
			'شلوار پارچه ای فیلافیل',
			'شلوار پارچه ای مگا',
			'شلوار کتان راسته',
			'شلوار کتان کلاسیک',
			'شلوار کتان جودون',
			'پالتو فوتر خزدار',
			'پالتو فوتر بدون خز',
			'پالتو شمعی بارانی',
			'جلیقه',
		]);
		return [
			'name' => $name,
		];
	});
