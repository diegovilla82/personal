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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->year('year_of_income')->nullable();
            $table->string('username')->nullable();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('qualification_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->unsignedBigInteger('dependence_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('dni')->nullable();
            //--licencia
            //-- Antiguedad
            $table->year('anti_year')->nullable();
            $table->integer('anti_month')->nullable();
            $table->integer('anti_day')->nullable();
            $table->date('system_date')->nullable();
            //-- Por ley 6039
            $table->year('ley_6039_year')->nullable();
            $table->integer('ley_6039_month')->nullable();
            $table->integer('ley_6039_day')->nullable();
            //-- Anses
            $table->year('anses_year')->nullable();
            $table->integer('anses_month')->nullable();
            $table->integer('anses_day')->nullable();
            //-- días de vacaciones
            $table->integer('vacation_days')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
