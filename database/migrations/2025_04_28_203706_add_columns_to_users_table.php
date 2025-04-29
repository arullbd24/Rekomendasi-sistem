<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        // Tambahkan pengecekan jika tabel users ada
        if (Schema::hasTable('users')) {
            $table->string('service_preference')->nullable()->after('password');
        }
    });
}

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['service_preference']);
        });
    }
};