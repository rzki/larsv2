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
            $table->uuid('hospitalId');
            $table->string('no_induk')->unique();
            $table->string('nama');
            $table->string('jenis')->nullable();
            $table->integer('kapasitas')->nullable();
            $table->string('kelas')->nullable();
            $table->string('unit_instalasi')->nullable();
            $table->string('no_telp');
            $table->string('email')->unique();
            $table->string('nib')->nullable();
            $table->string('niop')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('acc_status')->nullable();
            $table->string('nama_direktur')->nullable();
            $table->string('email_direktur')->nullable();
            $table->string('notelp_direktur')->nullable();
            $table->string('divisi_direktur')->nullable();
            $table->text('alamat');
            $table->foreignId('prov_id')->nullable()->constrained('idn_provinces', 'id', 'prov_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kab_id')->nullable()->constrained('idn_regencies', 'id', 'kab_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kec_id')->nullable()->constrained('idn_districts', 'id', 'kec_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('kel_id')->nullable()->constrained('idn_villages', 'id', 'kel_id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('kode_pos')->nullable();
            $table->string('img')->nullable();
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
