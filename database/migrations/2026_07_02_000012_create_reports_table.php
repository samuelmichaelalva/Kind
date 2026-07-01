<?php

use App\Enums\ReportReason;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->morphs('reportable');
            $table->string('reason')->default(ReportReason::OTHER->value);
            $table->text('details')->nullable();
            $table->boolean('resolved')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->index(['resolved', 'reason']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
