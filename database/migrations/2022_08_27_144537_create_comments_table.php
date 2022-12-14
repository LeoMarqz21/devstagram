<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            //creara un campo llamado user_id, y lo relacionara con la tabla user y el campo id
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            //creara un campo llamado post_id, y lo relacionara con la tabla post y el campo id
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
