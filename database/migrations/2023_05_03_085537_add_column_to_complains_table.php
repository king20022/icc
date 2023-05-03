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
        Schema::table('complains', function (Blueprint $table) {
            $table->string('organize')->after('complaint');
            $table->string('amount')->after('complaint');
            $table->string('investment')->after('complaint');
            $table->string('number')->after('complaint');
            $table->string('enroll')->after('complaint');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complains', function (Blueprint $table) {
            $table->dropColumn('organize','amount','investment','number','enroll');
        });
    }
};
