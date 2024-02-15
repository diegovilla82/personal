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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            //-- datos personales
            $table->date('year_of_income')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('full_name')->nullable();
            $table->string('address')->nullable();
            $table->string('qualification_id')->nullable();
            $table->string('neighborhood')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('dni')->nullable();
            $table->integer('age')->nullable();
            $table->string('telephont')->nullable();
            $table->enum('situation', ['Planta permanente', 'Contratado'])->nullable();
            $table->enum('state_civil', ['Soltero', 'Casado', 'Viudo'])->default($value='Soltero');



            $table->string('nationality')->nullable();
            $table->string('city_of_birth')->nullable();
            $table->string('province of birth')->nullable();

            //-- antiguedad
            $table->integer('antiquity')->nullable();
            //-- Antiguedad, calculable a partir de sistema, ley 6039 y anses
            $table->date('anti_date')->nullable();
            $table->year('anti_year')->nullable();
            $table->integer('anti_month')->nullable();
            $table->integer('anti_day')->nullable();
            //-- Antiguedad sistema
            $table->date('system_date')->nullable();
            $table->year('sys_year')->nullable();
            $table->integer('sys_month')->nullable();
            $table->integer('sys_day')->nullable();
            //-- Por ley 6039
            $table->date('ley_6039_date')->nullable();
            $table->year('ley_6039_year')->nullable();
            $table->integer('ley_6039_month')->nullable();
            $table->integer('ley_6039_day')->nullable();
            //-- Anses
            $table->date('anses_date')->nullable();
            $table->year('anses_year')->nullable();
            $table->integer('anses_month')->nullable();
            $table->integer('anses_day')->nullable();

            //-- días de vacaciones
            $table->integer('vacation_days')->nullable();

            //-- cargo
            $table->string('apartado')->nullable();
            $table->string('ceic')->nullable();
            $table->string('file_number')->nullable();

            $table->string('flat_apartment')->nullable();
            $table->string('email')->unique()->nullable();

            //-- estados
            $table->boolean('updated_data')->default($value=0);
            $table->boolean('active')->default($value=1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
