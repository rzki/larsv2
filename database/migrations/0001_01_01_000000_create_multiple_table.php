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
        });
        Schema::create('idn_regencies', function(Blueprint $table){
            $table->id();
            $table->foreignId('province_id')->constrained('idn_provinces', 'id', 'province_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
        });
        Schema::create('idn_districts', function(Blueprint $table){
            $table->id();
            $table->foreignId('regency_id')->constrained('idn_regencies', 'id', 'regency_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
        });
        Schema::create('idn_villages', function(Blueprint $table){
            $table->id();
            $table->foreignId('district_id')->constrained('idn_districts', 'id', 'district_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
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
