<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Test;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string("kerdes");
            $table->string("v1");
            $table->string("v2");
            $table->string("v3");
            $table->string("v4");
            $table->string("helyes")->nullable();
            $table->foreignId("kategoriaId")->references("id")->on("categories");
            $table->timestamps();
        });

        Test::create([
            'kerdes' => 'Első kérdés, természetvédelem',
            'v1' => 'Első válasz',
            'v2' => 'Második válasz',
            'v3' => 'Harmadik válasz',
            'v4' => 'Negyedik válasz',
            'kategoriaId' => 1
        ]);

        Test::create([
            'kerdes' => 'Második kérdés, hulladékkezelés',
            'v1' => 'Első válasz',
            'v2' => 'Második válasz',
            'v3' => 'Harmadik válasz',
            'v4' => 'Negyedik válasz',
            'kategoriaId' => 2
        ]);

        Test::create([
            'kerdes' => 'Harmadik kérdés, ökoharcosok',
            'v1' => 'Első válasz',
            'v2' => 'Második válasz',
            'v3' => 'Harmadik válasz',
            'v4' => 'Negyedik válasz',
            'kategoriaId' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
