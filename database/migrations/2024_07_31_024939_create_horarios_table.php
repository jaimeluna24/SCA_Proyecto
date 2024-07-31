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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->string('link')->nullable();
            $table->string('observacion');
            $table->unsignedBigInteger('aula_id')->nullable();
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade');
            $table->unsignedBigInteger('tipo_aula_id')->nullable();
            $table->foreign('tipo_aula_id')->references('id')->on('tipo_aulas')->onDelete('cascade');
            $table->unsignedBigInteger('docente_id')->nullable();
            $table->foreign('docente_id')->references('id')->on('docentes')->onDelete('cascade');
            $table->unsignedBigInteger('clase_id')->nullable();
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete('cascade');
            $table->unsignedBigInteger('periodo_id')->nullable();
            $table->foreign('periodo_id')->references('id')->on('periodos')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('horarios');
    }
};
