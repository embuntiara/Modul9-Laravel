<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            // Tambahkan kolom untuk CV
            $table->string('original_filename')->after('position_id')->nullable();
            $table->string('encrypted_filename')->after('original_filename')->nullable();

            // Tambahkan kolom untuk Avatar
            $table->string('original_avatar_name')->after('encrypted_filename')->nullable();
            $table->string('encrypted_avatar_name')->after('original_avatar_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            // Hapus kolom yang telah ditambahkan (CV dan Avatar)
            $table->dropColumn('original_filename');
            $table->dropColumn('encrypted_filename');
            $table->dropColumn('original_avatar_name');
            $table->dropColumn('encrypted_avatar_name');
        });
    }
};
