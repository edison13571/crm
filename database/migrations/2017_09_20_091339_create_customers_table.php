<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('en_name')->nullable();
      $table->string('sex');
      $table->string('id_number')->nullable();
      $table->string('birthday')->nullable();
      $table->string('school')->nullable();
      $table->string('grade')->nullable();
      $table->string('major_now')->nullable();
      $table->string('major_intention')->nullable()->nullable();
      $table->string('school_intention')->nullable();
      $table->string('country_intention')->nullable();
      $table->string('status_intention')->nullable();
      $table->string('saler');
      $table->string('partner');
      $table->string('email')->nullable();
      $table->string('qq')->nullable();
      $table->string('wechat')->nullable();
      $table->string('phone');
      $table->string('city')->nullable();
      $table->string('postcode')->nullable();
      $table->string('address')->nullable();
      $table->longText('remark')->nullable();
      $table->integer('creater_id');
      $table->timestamps();
      $table->softDeletes();
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
