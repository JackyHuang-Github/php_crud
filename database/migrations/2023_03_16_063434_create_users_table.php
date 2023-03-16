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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('account', 10)->notnull()->default('');
            $table->string('password', 10)->notnull()->default('');
            $table->string('name', 10)->notnull()->default('');
            $table->string('sex', 2)->notnull()->default('');
            $table->smallInteger('year')->notnull()->default(0);
            $table->tinyInteger('month')->notnull()->default(0);
            $table->tinyInteger('day')->notnull()->default(0);
            $table->string('telephone', 20)->notnull()->default('');
            $table->string('cellphone', 20)->notnull()->default('');
            $table->string('address', 50)->notnull()->default('');
            $table->string('email', 50)->notnull()->default('');
            $table->string('url', 50)->notnull()->default('');
            $table->text('comment')->notnull()->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
