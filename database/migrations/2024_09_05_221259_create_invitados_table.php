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
        Schema::create('invitados', function (Blueprint $table) {
            $table->id();
            $table->enum('asistencia', ['si', 'no']);
            $table->string('nombre');
            $table->string('telefono');
            $table->string('especificaciones')->nullable();
            $table->string('numeroInvitados');
            $table->string('nombreInvitado1')->nullable();
            $table->string('telefonoInvitado1')->nullable();
            $table->string('especificacionesInvitado1')->nullable();
            $table->string('nombreInvitado2')->nullable();
            $table->string('telefonoInvitado2')->nullable();
            $table->string('especificacionesInvitado2')->nullable();
            $table->string('nombreInvitado3')->nullable();
            $table->string('telefonoInvitado3')->nullable();
            $table->string('especificacionesInvitado3')->nullable();
            $table->string('nombreInvitado4')->nullable();
            $table->string('telefonoInvitado4')->nullable();
            $table->string('especificacionesInvitado4')->nullable();
            $table->string('nombreInvitado5')->nullable();
            $table->string('telefonoInvitado5')->nullable();
            $table->string('especificacionesInvitado5')->nullable();
            $table->string('nombreInvitado6')->nullable();
            $table->string('telefonoInvitado6')->nullable();
            $table->string('especificacionesInvitado6')->nullable();
            $table->string('nombreInvitado7')->nullable();
            $table->string('telefonoInvitado7')->nullable();
            $table->string('especificacionesInvitado7')->nullable();
            $table->string('nombreInvitado8')->nullable();
            $table->string('telefonoInvitado8')->nullable();
            $table->string('especificacionesInvitado8')->nullable();
            $table->string('dato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitados');
    }
};
