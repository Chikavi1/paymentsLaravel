<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatform;
class PaymentPlatformsTableSeeder extends Seeder
{

    public function run()
    {
       PaymentPlatform::create([
       		'name' => 'Paypal',
       		'image'=> 'img/payment-platform/paypal.jpg'
       ]);
       PaymentPlatform::create([
       		'name' => 'Stripe',
       		'image'=> 'img/payment-platform/stripe.jpg'
       ]);

    }
}
