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
        Schema::create('geodatas', function (Blueprint $table) 
        
        
        {
            $table->id();
            $table->string('ocode');
            $table->string('oname')->nullable();
            $table->string('fname')->nullable();
            $table->string('telephone')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('landmark')->nullable();
            $table->string('ctype')->nullable();
            $table->string('ovisibility')->nullable();
            $table->string('uavailable')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
                                                    
        } 
                            );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geodatas');
    }
};
