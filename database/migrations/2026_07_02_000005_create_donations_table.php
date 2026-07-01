<?php

use App\Enums\DonationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('ngo_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('amount', 12, 2)->nullable();
            $table->string('currency')->default('USD');
            $table->string('status')->default(DonationStatus::OPEN->value);
            $table->string('location')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['status', 'location']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
