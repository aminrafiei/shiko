<?php

	use App\Picture;
	use Illuminate\Database\Seeder;

	class PicturesTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			factory(Picture::class)->create();
		}
	}
