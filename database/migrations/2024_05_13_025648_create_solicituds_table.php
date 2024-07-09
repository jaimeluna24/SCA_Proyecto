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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('observacion')->nullable();
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->string('link')->nullable();
            $table->unsignedBigInteger('aula_id')->nullable();
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->unsignedBigInteger('tipo_aula_id');
            $table->foreign('tipo_aula_id')->references('id')->on('tipo_aulas')->onDelete('cascade');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado_solicituds')->onDelete('cascade');
            $table->integer("created_by");
            $table->integer("deleted_by")->nullable();
            $table->integer("updated_by")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
