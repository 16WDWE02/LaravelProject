<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->insert([
			[
				'title' => 'Marroon Tee',
				'description' => 'Regular-Relaxed fit Scoop neck, longer body Lightweight, 150 GSM, 34-singles 100% combed cotton (marles 15% polyester) Self-fabric binding on neck, side seamed, double needle hems, preshrunk to minimise shrinkage',
				'image' => 'MarroonTee.jpg',
				'price' => '25.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Pocket Tee',
				'description' => 'Regular fit Crew neck, contrast colour pocket Mid-weight, 180 GSM, 28-singles 100% combed cotton (marles 15% polyester) Neck ribbing, side seamed, shoulder to shoulder tape, double needle hems, preshrunk to minimise shrinkage',
				'image' => 'PocketTee.jpg',
				'price' => '30.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Khaki Pants',
				'description' => 'Slim-Regular fit Chino pants, 2 side pockets, jet pockets at back Mid-weight, 250 GSM 96% cotton 4% spandex Belt loops on waist, button closure, metal YKK zip fly, preshrunk to minimise shrinkage',
				'image' => 'KhakiPants.jpg',
				'price' => '60.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Grey Track Pants',
				'description' => 'Regular fit Sweat pants, 2 side pockets, slight drop at crotch, cuffed legs Mid-weight, 320 GSM 75% cotton 25% polyester (non-marles 100% cotton) anti-pill French Terry fleece Elastic waistband, white external drawcord, stitching detail around pockets, preshrunk to minimise shrinkage',
				'image' => 'GreyTrackPants.jpg',
				'price' => '60.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Charcoal Shorts',
				'description' => 'Slim-Regular fit Chino shorts, 2 side pockets, jet pockets at back Mid-weight, 250 GSM 96% cotton 4% spandex Belt loops on waist, button closure, metal YKK zip fly, preshrunk to minimise shrinkage',
				'image' => 'CharcoalShorts.jpg',
				'price' => '45.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Case Hoodie',
				'description' => 'Slim-Regular fit Pullover hood, raglan sleeves, contrasting body colour, kangaroo pocket Mid-weight, 320 GSM 75% cotton 25% polyester (non-marles 100% cotton) anti-pill French Terry fleece Lined hood, shoestring drawcord, sleeve cuff ribbing, preshrunk to minimise shrinkage',
				'image' => 'CaseHoodie.jpg',
				'price' => '50.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Grey Sweat Shirt',
				'description' => 'Regular fit Crew sweat, raglan sleeves Heavyweight, 350 GSM 80% cotton 20% polyester anti-pill fleece Neck and sleeve cuff ribbing, preshrunk to minimise shrinkage',
				'image' => 'GreySweatShirt.jpg',
				'price' => '65.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Puffer Jacket',
				'description' => 'Regular fitZip-up hooded down jacket, zip and dome closure at front, 2 side pockets and 1 internal pocketHeavyweight, 90 GSM100% nylon outer (polyester liner), 80% down 20% feather innerPanelled body, elasticated sleeve cuffs, water and UV resistant',
				'image' => 'PufferJacket.jpg',
				'price' => '160.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Army Windbreaker',
				'description' => 'Regular fit Pullover zip-up hooded windbreaker, packable, rubber headphone patch, adjustable elastic drawcord at hem, 2 side pockets Lightweight, 90 GSM 100% polyester rip-stop Water resistant, SPF 40, double sided puller on front pouch zip, metal tipped tonal drawcord',
				'image' => 'ArmyWindbreaker.jpg',
				'price' => '75.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Lowdown Singlet',
				'description' => 'Regular fit Regular singlet shape Lightweight, 150 GSM, 34-singles 100% combed cotton (marles 15% polyester) Self-fabric bindings, double needle bottom hem, preshrunk to minimise shrinkage',
				'image' => 'LowdownSinglet.jpg',
				'price' => '22.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			],
			[
				'title' => 'Blue Stripped Shirt',
				'description' => 'Regular fit Crew neck, varied stripe width across colours Lightweight, 150 GSM, 34-singles 100% combed cotton (marles 15% polyester) Neck ribbing, side seamed, shoulder to shoulder tape, double needle hems, preshrunk to minimise shrinkage',
				'image' => 'BlueStrippedShirt.jpg',
				'price' => '40.00',
				'quantity' => '100',
				'created_at' => new \Carbon\Carbon,
				'updated_at' => new \Carbon\Carbon
			]

		]);
	}
}
