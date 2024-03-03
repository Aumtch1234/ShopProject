<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('products_id');
            $table->string('brand');
            $table->foreignId('users_id')->constrained('users');
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('image');
            $table->timestamp('create_time_product')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
