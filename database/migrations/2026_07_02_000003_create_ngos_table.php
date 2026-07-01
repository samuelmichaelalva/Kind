<?php

use App\Enums\NgoStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('mission')->nullable();
            $table->string('status')->default(NgoStatus::PENDING->value);
            $table->timestamps();
            $table->softDeletes();
            $table->index(['name', 'location', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ngos');
    }
};
