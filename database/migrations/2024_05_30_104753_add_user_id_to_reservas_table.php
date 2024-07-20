<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Schema::table('reservas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(); // Agregar temporalmente como nullable

            // Agregar la clave foránea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Habilitar nuevamente la verificación de claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservas', function (Blueprint $table) {
            //

            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
