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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("serial_number");
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->string("subject_code");
            $table->string("subject_name");
            $table->string("grade_secured");
            $table->decimal("grade_points");
            $table->string("pass/fail");
            $table->integer("credits");
            $table->string("overall_pass/fail");
            $table->decimal("overall_points");
            $table->decimal("total_credits");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
