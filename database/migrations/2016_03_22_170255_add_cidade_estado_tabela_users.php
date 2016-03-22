<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCidadeEstadoTabelaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('users', function(Blueprint $table){
            $table->string('cidade', 100)->after('password');
            $table->string('uf', 2)->after('cidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('cidade');
            $table->dropColumn('uf');
        });
    }
}
