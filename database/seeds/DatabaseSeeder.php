<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryProductsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
//        $this->call(PostsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(UserCommentsTableSeeder::class);
    }
}
