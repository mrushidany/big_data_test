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
        Schema::create('years', function (Blueprint $table) {
            $table->id();
            $table->float('1990');
            $table->float('1991');
            $table->float('1992');
            $table->float('1993');
            $table->float('1994');
            $table->float('1995');
            $table->float('1996');
            $table->float('1997');
            $table->float('1998');
            $table->float('1999');
            $table->float('2000');
            $table->float('2001');
            $table->float('2002');
            $table->float('2003');
            $table->float('2004');
            $table->float('2005');
            $table->float('2006');
            $table->float('2007');
            $table->float('2008');
            $table->float('2009');
            $table->float('2010');
            $table->float('2011');
            $table->float('2012');
            $table->float('2013');
            $table->float('2014');
            $table->float('2015');
            $table->float('2016');
            $table->float('2017');
            $table->float('2018');
            $table->float('2019');
            $table->float('2020');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('years');
    }
};
