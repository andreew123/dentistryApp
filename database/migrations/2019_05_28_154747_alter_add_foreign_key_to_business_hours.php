<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyToBusinessHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_hours', function (Blueprint $table) {
            $table->integer('frequency_id')->after('date_to')->unsigned()->nullable();
            $table->foreign('frequency_id')->references('id')->on('frequencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_hours', function (Blueprint $table) {
            $table->dropColumn('frequency_id');
        });
    }
}
