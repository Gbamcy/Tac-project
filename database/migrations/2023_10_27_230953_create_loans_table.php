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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->float('amount', 12, 4); //10,000,000
            $table->float('interest', 10, 4)->default(0);
            $table->float('outstanding_balance', 12, 4)->default(0);
            $table->string('reason', 600)->nullable();
            $table->string('status', 50)->default('pending'); //paid, unpaid, cancelled
            $table->timestamp('due_date');
            $table->foreignId('guarantor_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
