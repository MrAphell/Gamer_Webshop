<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [];

        $categories = [1, 2, 3, 4, 5];

        $electronics = [
            ['name' => 'iPhone 13', 'description' => 'Legújabb iPhone, 128GB, iOS 15', 'price' => 799.99, 'stock' => 50],
            ['name' => 'Samsung Galaxy S21', 'description' => 'Samsung okostelefon, 128GB, Android 11', 'price' => 749.99, 'stock' => 40],
            ['name' => 'Sony WH-1000XM4', 'description' => 'Kiváló zajszűrő fejhallgató', 'price' => 349.99, 'stock' => 60],
            ['name' => 'LG 55" OLED TV', 'description' => 'OLED televízió, 4K, HDR támogatás', 'price' => 1299.99, 'stock' => 30],
            ['name' => 'Bose SoundLink Revolve+', 'description' => 'Hordozható bluetooth hangszóró', 'price' => 299.99, 'stock' => 70],
        ];

        $games = [
            ['name' => 'The Legend of Zelda: Breath of the Wild', 'description' => 'Nintendo Switch játék, kaland és akció', 'price' => 59.99, 'stock' => 100],
            ['name' => 'FIFA 22', 'description' => 'Foci játék, PS5, új szezon', 'price' => 49.99, 'stock' => 80],
            ['name' => 'Minecraft', 'description' => 'Kreatív építkezés, PC és konzol verziók', 'price' => 29.99, 'stock' => 120],
            ['name' => 'Call of Duty: Vanguard', 'description' => 'Katonai akciójáték, PS4, FPS', 'price' => 59.99, 'stock' => 70],
            ['name' => 'Mario Kart 8 Deluxe', 'description' => 'Versenyjáték, Nintendo Switch', 'price' => 49.99, 'stock' => 50],
        ];

        $accessories = [
            ['name' => 'Anker PowerCore 10000mAh', 'description' => 'Hordozható töltő, 10000mAh', 'price' => 24.99, 'stock' => 200],
            ['name' => 'Apple AirPods Pro', 'description' => 'Bluetooth fülhallgató aktív zajszűréssel', 'price' => 249.99, 'stock' => 120],
            ['name' => 'Logitech MX Master 3', 'description' => 'Vezeték nélküli egér, professzionális használatra', 'price' => 99.99, 'stock' => 150],
            ['name' => 'Samsung T5 500GB SSD', 'description' => 'Külső SSD meghajtó, 500GB', 'price' => 129.99, 'stock' => 80],
            ['name' => 'UGREEN USB-C to HDMI Adapter', 'description' => 'Adapter USB-C és HDMI csatlakozáshoz', 'price' => 19.99, 'stock' => 180],
        ];

        $computing = [
            ['name' => 'Dell XPS 13', 'description' => 'Laptop, Intel Core i7, 16GB RAM, 512GB SSD', 'price' => 1299.99, 'stock' => 40],
            ['name' => 'HP Omen 15', 'description' => 'Játék laptop, Nvidia RTX 3060, 16GB RAM', 'price' => 1499.99, 'stock' => 30],
            ['name' => 'Logitech G Pro X', 'description' => 'Gaming fejhallgató, kivehető mikrofon', 'price' => 129.99, 'stock' => 100],
            ['name' => 'Corsair K95 RGB', 'description' => 'Mechanikus billentyűzet RGB világítással', 'price' => 199.99, 'stock' => 60],
            ['name' => 'Razer DeathAdder V2', 'description' => 'Gaming egér, 20K DPI', 'price' => 69.99, 'stock' => 150],
        ];

        $home_appliances = [
            ['name' => 'iRobot Roomba 980', 'description' => 'Robotporszívó, Wi-Fi vezérlés', 'price' => 499.99, 'stock' => 30],
            ['name' => 'Nespresso VertuoPlus', 'description' => 'Kávéfőző, automata kapszula rendszer', 'price' => 179.99, 'stock' => 50],
            ['name' => 'Dyson Pure Cool', 'description' => 'Légkondicionáló és légtisztító egyben', 'price' => 499.99, 'stock' => 20],
            ['name' => 'Philips Sonicare', 'description' => 'Elektromos fogkefe, UV tisztítóval', 'price' => 129.99, 'stock' => 80],
            ['name' => 'Honeywell HPA300', 'description' => 'HEPA légtisztító, 465 m2', 'price' => 249.99, 'stock' => 40],
        ];

        foreach ($electronics as $product) {
            $products[] = array_merge($product, ['category_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        foreach ($games as $product) {
            $products[] = array_merge($product, ['category_id' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        foreach ($accessories as $product) {
            $products[] = array_merge($product, ['category_id' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        foreach ($computing as $product) {
            $products[] = array_merge($product, ['category_id' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        foreach ($home_appliances as $product) {
            $products[] = array_merge($product, ['category_id' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }

        DB::table('products')->insert($products);
    }
}
