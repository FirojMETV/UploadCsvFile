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
        Schema::create('csv_data', function (Blueprint $table) {
            $table->id();
           
            $table->string('column1');
            $table->string('column2');
            $table->string('column3');
            $table->string('column4');
            $table->string('column5');

            $table->string('column6');
            $table->string('column7');
            $table->string('column8');
            $table->string('column9');
            $table->string('column10');

            $table->string('column11');
            $table->string('column12');
            $table->string('column13');
            $table->string('column14');
            $table->string('column15');

            $table->string('column16');
            $table->string('column17');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csv_data');
    }
};
