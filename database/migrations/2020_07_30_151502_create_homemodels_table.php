<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomemodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homemodels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('updated_at');
            $table->string('student_name');
            $table->string('class');
            $table->integer('english')->default(0);
            $table->integer('history')->default(0);
            $table->integer('math')->default(0);
            $table->integer('geography')->default(0);
            $table->integer('agriculture')->default(0);
            $table->integer('physics')->default(0);
            $table->integer('chemistry')->default(0);
            $table->integer('biology')->default(0);
            $table->integer('computer-studies')->nullable();
            $table->integer('germany')->nullable();
            $table->integer('swahili')->nullable();
            $table->integer('luganda')->nullable();
            $table->integer('french')->nullable();
            $table->integer('ent')->nullable();
            $table->integer('cre')->nullable();
            $table->integer('td')->nullable();
            $table->integer('commerce')->nullable();
            $table->integer('accounts')->nullable();
            $table->mediumText('comment')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homemodels');
    }
}
