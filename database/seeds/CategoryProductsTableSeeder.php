<?php

	use App\Category;
	use App\Color;
	use App\Picture;
	use App\Product;
	use App\Size;
	use Illuminate\Database\Seeder;

	class CategoryProductsTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			factory(Product::class,20) -> create() -> each(function (Product $pro) {
				factory(Category::class,4) -> make() -> each(function (Category $cat) use ($pro) {
					$pro -> category() -> save($cat);
				});
				factory(Size::class,3) -> make() -> each(function (Size $size) use ($pro) {
					$pro -> size() -> save($size);
				});
				factory(Picture::class) -> make() -> each(function (Picture $pic) use ($pro) {
					$pro -> picture() -> save($pic);
				});
			});
		}
	}
