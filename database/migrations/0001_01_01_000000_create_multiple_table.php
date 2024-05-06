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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->uuid('roleId');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
        });
        Schema::create('idn_provinces', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('code');
        });
        Schema::create('idn_regencies', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('full_code');
            $table->foreignId('provinsi_id')->constrained('idn_provinces', 'id', 'provinsi_id')->cascadeOnDelete()->cascadeOnUpdate();
        });
        Schema::create('idn_districts', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('full_code');
            $table->foreignId('kabupaten_id')->constrained('idn_regencies', 'id', 'kabupaten_id')->cascadeOnDelete()->cascadeOnUpdate();

        });
        Schema::create('idn_villages', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('full_code');
            $table->string('pos_code');
            $table->foreignId('kecamatan_id')->constrained('idn_districts', 'id', 'kecamatan_id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region');
    }
};
