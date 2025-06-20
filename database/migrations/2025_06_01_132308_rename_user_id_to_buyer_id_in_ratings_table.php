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
    Schema::table('ratings', function (Blueprint $table) {
        $table->renameColumn('user_id', 'buyer_id');
    });
}

public function down(): void
{
    Schema::table('ratings', function (Blueprint $table) {
        $table->renameColumn('buyer_id', 'user_id');
    });
}

};
