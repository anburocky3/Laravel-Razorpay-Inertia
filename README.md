# Laravel Razorpay Integration with Inertia, React and Typescript.

1. Install Razorpay SDK: 

```sh
composer require razorpay/razorpay
```

2. Create Model, Controller, Migration, Service, etc.
3. Update your `.env` with the following values.

```dotenv
# Razorpay
RAZORPAY_KEY=
RAZORPAY_SECRET=
```
4. Open `config/services.php` and add the below at the end of the array.

```php
    'razorpay' => [
        'key' => env('RAZORPAY_KEY', ''),
        'secret' => env('RAZORPAY_SECRET', ''),
    ],
```

5. Have your routes like this.

```php
    // Payment
    Route::post('/create-order', [PaymentController::class, 'createOrder']);
    Route::post('/verify-payment', [PaymentController::class, 'verifyPayment']);
```

### Author:
- [Anbuselvan Annamalai](https://fb.me/anburocky3)
