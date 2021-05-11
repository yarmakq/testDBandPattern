<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->unique();
            $table->string('inn')->nullable()->unique();;
            $table->string('kpp')->nullable()->unique();;
            $table->string('legal_address')->nullable();
            $table->string('mailing_address');
            $table->string('number_ati')->nullable()->unique();;
            $table->string('checking_account')->nullable();
            $table->string('correspondent_account')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
