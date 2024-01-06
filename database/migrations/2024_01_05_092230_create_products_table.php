<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table -> string('name');
            $table->boolean('active')->default(1);
            $table->boolean('type')->default(1);
            $table->boolean('color')->default(0);
            $table -> string('description')->nullable();
            $table->foreignId('supplier_id')->constrained('suppliers')->cascadeOnDelete();
       //     $table->foreignId('images_id')->constrained('images')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
