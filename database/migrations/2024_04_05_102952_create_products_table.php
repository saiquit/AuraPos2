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
            $table->id();
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name');
            $table->string('sku');
            $table->string('slug');            
            $table->text('description')->nullable();
            $table->decimal('cost', 8, 2);
            $table->decimal('price', 8, 2);
            $table->decimal('tax', 8, 2);
            $table->boolean('is_active')->default(true);
            $table->string('dimension')->nullable();
            $table->string('weight')->nullable();

            $table->boolean('is_new')->default(false);
            $table->boolean('is_sale')->default(false);
            $table->dateTime('sale_start_date')->nullable();
            $table->dateTime('sale_end_date')->nullable();

            $table->string('size')->nullable(); // for clothing
            $table->string('color')->nullable(); // for clothing
            
            $table->string('skin_type')->nullable(); // for cosmetic
            $table->string('type_of_eye')->nullable(); // for cosmetic
            $table->string('type_of_skin')->nullable(); // for cosmetic
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
