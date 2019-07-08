<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excel_imports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderid');
            $table->string('skuid');
            $table->string('popskuid');
            $table->integer('quantity');
            $table->string('paytype');
            $table->string('booktime')->nullable();
            $table->float('totalprice');
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
        Schema::dropIfExists('excel_imports');
    }
}
