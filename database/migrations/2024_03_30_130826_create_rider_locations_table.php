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
        Schema::create('rider_locations', function (Blueprint $table) {
            Schema::create('rider_locations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('rider_id')->nullable()->constrained('riders')->cascadeOnDelete();
                $table->string('service_name');
                $table->decimal('lat', 10, 8);
                $table->decimal('long', 11, 8);
                $table->timestamp('capture_time')->nullable();
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rider_locations');
    }
};
