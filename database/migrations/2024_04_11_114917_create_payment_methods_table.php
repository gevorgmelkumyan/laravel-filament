<?php

use App\Models\Customer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('uuid')->unique();
            $table->string('type');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('payment_methods');
    }
};
