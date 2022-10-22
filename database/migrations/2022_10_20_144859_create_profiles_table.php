<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profile_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->text('gender');
            // $table->foreignId('company_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
