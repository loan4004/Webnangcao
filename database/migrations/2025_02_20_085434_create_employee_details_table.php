<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade');
            $table->string('address'); 
            $table->date('dob');
            $table->string('gender');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_details');
    }
};
