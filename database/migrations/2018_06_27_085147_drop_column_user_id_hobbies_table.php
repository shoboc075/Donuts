<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnUserIdHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('hobbies', function (Blueprint $table) {
        $table->dropForeign('hobbies_user_id_foreign');
        $table->dropColumn('user_id');
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hobbies', function (Blueprint $table) {
        $table->integer('user_id')->unsigned()->index();
        $table->foreign('user_id')->references('id')->on('users');
    });
    }
}



