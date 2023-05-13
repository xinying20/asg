<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('staffID');
            $table->string('staffName');
            $table->string('staffIC', 14);
            $table->string('phone', 14);
            $table->string('address');
            $table->string('status', 20);
            $table->string('email', 90);
            $table->string('token');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('staff');
    }

}
