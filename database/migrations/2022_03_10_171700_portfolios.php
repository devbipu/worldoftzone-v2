<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Portfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("portfolios", function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('project_title');
            $table->string('project_categorie');
            $table->string('project_type');
            $table->string('project_img');
            $table->string('project_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Portfolios');
    }
}
