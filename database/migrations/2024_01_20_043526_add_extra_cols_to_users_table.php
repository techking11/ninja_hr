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
        Schema::table('users', function (Blueprint $table) {
            $table->string('employee_id')->unique()->nullable(); // employee card number
            $table->string('phone')->unique()->nullable();
            $table->string('nrc_number')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->enum('gender', [ 'Male', 'Female' ])->nullable();
            $table->text('address')->nullable();
            $table->bigInteger('department_id')->nullable(); // join width department table
            $table->date('date_of_join')->nullable(); 
            $table->boolean('is_present')->default(true); // true = 1, false = 0
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'employee_id', 'phone', 'nrc_number', 'birthday',
                'gender', 'address', 'department_id', 'date_of_join', 'is_present'
            ]);
        });
    }
};
