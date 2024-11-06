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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->foreignId('class_id'); // Tambahkan kolom class
            $table->foreignId('clade_id');
            $table->foreignId('deskripsi');
            $table->text('address');
            $table->timestamps();

            // Tambahkan foreign key setelah kolom class didefinisikan
            // $table->foreign('class_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('clade_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('deskripsi')->references('id')->on('departments')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
