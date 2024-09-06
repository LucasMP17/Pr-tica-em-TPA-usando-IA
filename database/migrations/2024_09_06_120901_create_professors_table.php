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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
    class Professor extends Model
{
    protected $fillable = ['nome', 'especialidade'];
}
public function up()
{
    Schema::create('professores', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('especialidade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('professores');
}


};
