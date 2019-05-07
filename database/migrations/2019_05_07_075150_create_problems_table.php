<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table_name = 'problems';
        Schema::create($table_name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('description');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE $table_name ADD testdata LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
