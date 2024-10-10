<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::dropIfExists('documents');

        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->Integer('amount'); 
            // $table->text('documentformat')->nullable(); 
            $table->string('document_format')->nullable();
            $table->string('document_type');
            $table->string('name');
            $table->string('bill_type')->nullable();
            $table->string('file_path'); // Path to the stored document
            $table->unsignedBigInteger('receipt_id'); 
            $table->foreignId('created_by_id')->constrained('users'); 
            $table->foreignId('updated_by_id')->constrained('users'); 
            $table->timestamps(); // created_at and updated_at timestamps
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
