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
            $table->id();
            $table->string('name_organization');
            $table->string('inn')->nullable();
            $table->string('kpp')->nullable();
            $table->string('legal_address')->nullable();
            $table->string('mailing_address');
            $table->string('manager')->nullable();
            $table->string('email_manager')->nullable();
            $table->string('number_ati')->nullable();
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
