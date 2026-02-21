<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contactos', function (Blueprint $table) {
            $table->foreignId('estado_id')->nullable()->after('mensaje')->constrained('estados_contacto')->onDelete('set null');
            $table->foreignId('user_id')->nullable()->after('estado_id')->constrained('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('contactos', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['estado_id']);
            $table->dropColumn(['user_id', 'estado_id']);
        });
    }
};
