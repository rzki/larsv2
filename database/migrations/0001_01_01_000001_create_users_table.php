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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('userId');
            $table->foreignId('role_id')->constrained('roles', 'id', 'role_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('no_induk')->nullable();
            $table->integer('nik')->nullable();
            $table->string('jabatan', 50)->nullable();
            $table->string('dinas')->nullable();
            $table->text('alamat')->nullable();
            $table->foreignId('prov')->nullable()->constrained('idn_provinces', 'id', 'prov')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kab')->nullable()->constrained('idn_regencies', 'id', 'kab')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kec')->nullable()->constrained('idn_districts', 'id', 'kec')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kel')->nullable()->constrained('idn_villages', 'id', 'kel')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('kode_pos')->nullable();
            $table->string('status', 20)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
