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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->enum('role',['user','admin'])->default('user')->after('email');
            $table->string('number')->nullable()->after('email');
            $table->string('country')->nullable()->after('email');;
            $table->string('street')->nullable()->after('email');;
            $table->string('city')->nullable()->after('email');;
            $table->string('state')->nullable()->after('email');;
            $table->string('zip')->nullable()->after('email');;
            $table->decimal('profit', 10, 2)->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['street', 'city', 'state', 'zip', 'country','profit ', 'role', 'number']);
        });
    }
};
