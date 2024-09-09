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
            $table->bigIncrements('id');
            $table->text('firstname');
            $table->text('lastname');
            $table->date('date_of_birth');
            $table->timestamps();
        });

        Schema::create('interners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('class');
            $table->text('level');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });

        Schema::create('bootcamps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('class');
            $table->text('level');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });


        Schema::create('shifts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id', false,true)->unsigned()->index();
            $table->time('start_time');
            $table->time('end_time');
            $table->foreign('employee_id')->references('id')->on('employees')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('report', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->bigInteger('shift_id', false,true)->unsigned()->index();
            $table->text('firstname');
            $table->text('lastname');
            $table->date('date_of_birth');
            $table->time('start_time');
            $table->time('end_time');
            //$table->foreign('shift_id')->references('id')->on('shift')
            //->onDelete('cascade')
            //->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('report');
        Schema::dropIfExists('interners');
        Schema::dropIfExists('store_tables');
    }
};
