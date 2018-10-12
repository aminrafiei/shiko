<?php

	use App\Comment;
	use App\User;
	use Illuminate\Database\Seeder;

	class UserCommentsTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			factory(User::class,10) -> create() -> each(function (User $user) {
				factory(Comment::class,5) -> make() -> each(function (Comment $com) use ($user) {
					$user -> comment() -> save($com);
				});
			});
		}
	}
