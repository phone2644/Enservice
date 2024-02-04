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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->string('topic')->nullable()->comment('หัวข้อ');
            $table->text('description')->nullable()->comment('รายละเอียด');
            $table->string('email')->nullable()->comment('E-mail ผู้แจ้ง');
            $table->string('name')->nullable()->comment('ชื่อผู้แจ้ง');
            $table->string('dropzone_file')->nullable()->comment('รูปภาพ');
            $table->string('phone')->nullable()->comment('เบอร์โทรติดต่อ');
            $table->string('line')->nullable()->comment('Line ID');
            $table->unsignedBigInteger('user_id')->nullable()->comment('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('position_id')->nullable()->comment('ตำแหน่งอุปกรณ์');
            
            $table->unsignedBigInteger('equipment_id')->default(1)->nullable();
            $table->foreign('equipment_id')->references('id')->default(1)->on('equipment');
            
            $table->string('contact_facebook')->nullable()->comment('Facebook Name/Facebook Link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
