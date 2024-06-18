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
        Schema::create('accreditations', function (Blueprint $table) {
            $table->id();
            $table->uuid('acc_id');
            $table->foreignId('hospital_id')->nullable()->constrained('hospitals', 'id', 'hospital_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('deskripsi')->nullable();
            $table->string('no_akreditasi')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('status')->nullable();
            $table->string('hasil')->nullable();
            $table->timestamps();
        });

        Schema::create('acc_surveyors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surveyor_id')->constrained('users', 'id', 'surveyor_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('accreditation_id')->constrained('accreditations', 'id', 'accreditation_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('acc_bab', function (Blueprint $table) {
            $table->id();
            $table->uuid('babId');
            $table->string('nama');
            $table->string('kode');
            $table->timestamps();
        });
        Schema::create('acc_standards', function (Blueprint $table) {
            $table->id();
            $table->uuid('standardId');
            $table->text('nama');
            $table->foreignId('bab_id')->constrained('acc_bab', 'id', 'bab_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::create('acc_elements', function (Blueprint $table) {
            $table->id();
            $table->uuid('elementId');
            $table->text('deskripsi');
            $table->foreignId('acc_standard_id')->constrained('acc_standards', 'id', 'acc_standard_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->decimal('sars_manual', 4,2)->nullable();
            $table->decimal('sars_floating', 4,2)->nullable();
            $table->decimal('sars_rounded', 4,2)->nullable();
            $table->foreignId('evaluator_id')->nullable()->constrained('users', 'id', 'evaluator_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::create('acc_results', function (Blueprint $table) {
            $table->id();
            $table->uuid('resultId');
            $table->foreignId('standard_id')->constrained('acc_standards', 'id', 'standard_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('element_id')->constrained('acc_elements', 'id', 'element_id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('fakta')->nullable();
            $table->text('analisa')->nullable();
            $table->text('rekomendasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acc_results');
        Schema::dropIfExists('acc_elements');
        Schema::dropIfExists('acc_standards');
        Schema::dropIfExists('acc_bab');
        Schema::dropIfExists('accreditations');
    }
};
