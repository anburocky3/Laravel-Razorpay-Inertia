<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('r_payment_id');
            $table->string('method');
            $table->string('currency');
            $table->string('mobileNo');
            $table->foreignId('user_id');
            $table->string('amount');
            $table->longText('json_response');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
