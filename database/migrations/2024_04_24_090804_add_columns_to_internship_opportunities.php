<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('internship_opportunities', function (Blueprint $table) {
            $table->string('location')->nullable();
            $table->string('contract')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internship_opportunities', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('contract');
        });
    }
};
