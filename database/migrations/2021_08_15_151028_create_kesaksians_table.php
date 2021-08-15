<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateKesaksiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesaksians', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->Nullable;
            $table->string('nama')->Nullable;
            $table->string('umur')->Nullable;
            $table->string('tempatlahir')->Nullable;
            $table->date('tanggallahir')->Nullable;
            $table->string('status')->default('Anak Asuh')->Nullable;
            $table->string('kesaksian')->Nullable;
            $table->string('asaldaerah')->Nullable;
            $table->string('sekolah')->Nullable;
            $table->string('hobbi')->Nullable;
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
        Schema::dropIfExists('kesaksians');
    }
}
