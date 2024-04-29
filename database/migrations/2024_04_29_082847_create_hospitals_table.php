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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('no_induk')->unique();
            $table->string('nama');
            $table->string('jenis');
            $table->integer('kapasitas');
            $table->string('kelas');
            $table->string('unit_instalasi');
            $table->string('no_telp');
            $table->string('email')->nullable()->unique();
            $table->string('nib');
            $table->string('niop');
            $table->date('masa_berlaku');
            $table->string('acc_status');
            $table->string('nama_direktur')->nullable();
            $table->string('email_direktur')->nullable();
            $table->string('notelp_direktur')->nullable();
            $table->string('divisi_direktur')->nullable();
            $table->text('alamat');
            $table->foreignId('prov')->nullable()->constrained('idn_provinces', 'id', 'prov')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kab')->nullable()->constrained('idn_regencies', 'id', 'kab')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kec')->nullable()->constrained('idn_districts', 'id', 'kec')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kel')->nullable()->constrained('idn_villages', 'id', 'kel')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('kode_pos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
