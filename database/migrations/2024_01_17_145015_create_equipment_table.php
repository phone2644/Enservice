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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('problem_id')->default(1)->nullable();
            $table->foreign('problem_id')->references('id')->on('problems'); //หากจะใช้ ต้องมีunsignedBigInteger และสร้าง id ที่จะเชื่อมต่อก่อน
=======
            $table->text('name')->nullable();;
            $table->text('description')->nullable();;
            $table->unsignedBigInteger('problem')->nullable();
            $table->foreign('problem')->references('problem_id')->on('problems'); //หากจะใช้ ต้องมีunsignedBigInteger และสร้าง id ที่จะเชื่อมต่อก่อน
>>>>>>> origin/main
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
