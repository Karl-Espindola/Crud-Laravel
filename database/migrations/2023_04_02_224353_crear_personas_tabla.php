<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_personas', function (Blueprint $table) {
            $table->id();
            $table->string("per_nom", 45);
            $table->string("per_ape", 45);
            $table->integer("per_ced");
            $table->string("per_ema", 45);
            $table->unsignedBigInteger("per_pai_id");
            $table->string("per_dir", 45);
            $table->string("per_cel", 25);
            $table->unsignedBigInteger("per_cat_id");
            $table->timestamps();

            $table->foreign('per_pai_id')->references('id')->on('tbl_paises');
            $table->foreign('per_cat_id')->references('id')->on('tbl_categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_personas');
    }
};
