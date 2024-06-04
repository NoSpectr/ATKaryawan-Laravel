<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('username', 30);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tb_admin');
    }
};
