<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreimenujKolonuFrizers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frizers', function (Blueprint $table) {
            $table->renameColumn('godine','godine_iskustva');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frizers', function (Blueprint $table) {
            $table->renameColumn('godine_iskustva','godine');
             
        });
    }
}
