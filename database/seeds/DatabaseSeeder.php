<?php

use App\Address;
use App\Brand;
use App\Category;
use App\Color;
use App\Customer;
use App\Item;
use App\Kasut\dummy;
use App\Order;
use App\Photo;
use App\Review;
use App\Size;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /* seed user admin */
        User::create([
            'username' => 'admin',
            'email' => 'admin@kasut.dev',
            'password' => Hash::make('12345678'),
        ]);

        /* seed category */
        foreach (dummy::categories() as $category) {
            Category::create([
                'name' => $category
            ]);
        }

        /* seed brand */
        foreach (dummy::brands() as $brand) {
            Brand::create([
                'name' => $brand
            ]);
        }

        /* seed color */
        foreach (dummy::colorNames() as $color) {
            Color::create([
                'color' => $color
            ]);
        }

        /* seed size */
        for ($i = 15; $i <= 50; $i++) {
            Size::create([
                'size' => $i,
            ]);
        }

        factory(Customer::class, 100)->create()->each(function ($customer) {
            /* seed address */
            $address = factory(Address::class, 4)->make();
            $customer->addresses()->saveMany($address);
            /* seed order */
            $order = factory(Order::class, 5)->make();
            $customer->orders()->saveMany($order);
            /* seed review */
            $review = factory(Review::class, 10)->make();
            $customer->reviews()->saveMany($review);
        });

        factory(Item::class, 200)->create()->each(function ($item) {
            /* seed photo */
            $photo = factory(Photo::class, 3)->make();
            $item->photos()->saveMany($photo);
        });
        /* get all order attaching */
        $order = Order::all();

        /* populate the pivot table order detail */
        Item::all()->each(function ($item) use ($order) {
            $item->orders()->attach(
                $order->random(rand(1, $order->count()))->pluck('id')->toArray()
            );
        });
        /* get all color attaching */
        $color = Color::all();

        /* populate the pivot table order detail */
        Item::all()->each(function ($item) use ($color) {
            $item->colors()->attach(
                $color->random(rand(1, $color->count()))->pluck('id')->toArray()
            );
        });
        /* get all size attaching */
        $size = Size::all();

        /* populate the pivot table order detail */
        Item::all()->each(function ($item) use ($size) {
            $item->sizes()->attach(
                $size->random(rand(1, $size->count()))->pluck('id')->toArray()
            );
        });
        /* get all review attaching */
        $review = Review::all();

        /* populate the pivot table order detail */
        Item::all()->each(function ($item) use ($review) {
            $item->reviews()->attach(
                $review->random(rand(1, $review->count()))->pluck('id')->toArray()
            );
        });
    }
}
