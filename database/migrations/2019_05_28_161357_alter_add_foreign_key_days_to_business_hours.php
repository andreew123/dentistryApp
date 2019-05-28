<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAddForeignKeyDaysToBusinessHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_hours', function (Blueprint $table) {
            $table->integer('day_id')->after('frequency_id')->unsigned()->nullable();
            $table->foreign('day_id')->references('id')->on('days');
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
            $table->dropColumn('day_id');
        });
    }
}
