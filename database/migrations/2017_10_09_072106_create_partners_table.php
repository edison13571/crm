<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('partners', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('company');
      $table->string('phone')->nullable();
      $table->string('email')->nullable();
      $table->string('wechat')->nullable();
      $table->string('qq')->nullable();
      $table->text('remark')->nullable();
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
        //
    }
}
