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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('surname', 150);
            $table->date('born' );
            $table->enum('gender', ['M' , 'F']);
            $table->string('age');
            $table->string('birth_place', 80)->nullable();
            $table->string('CF');
            $table->string('doc_number');
            $table->date('printing_date')->nullable();
            $table->float('piastrine', 3 , 1);
            $table->float('GB', 3 , 1);
            $table->float('GR', 3 , 1);
            $table->float('EMO', 3 , 1);
            $table->float('EMA', 3 , 1);
            $table->float('VCM', 3 , 1);
            $table->float('CCM', 3 ,1);
            $table->float('CMC', 3 , 1);
            $table->float('AMD', 3 , 1);
            $table->float('VMP', 3 , 1);
            $table->float('EMI', 3 , 1);
            $table->float('ALT', 3 , 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
