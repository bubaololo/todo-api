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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')
            //     ->constrained()
            //     ->onDelete('cascade');
            $table->text('task');
            // $table->tinyInteger('priority')->default(0);
            // $table->enum('section', ['urgent', 'medium', 'long'])->default('urgent');
            $table->timestamps();
            // $table->unique(['user_id', 'priority']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('tasks');
        Schema::disableForeignKeyConstraints();
    }
};
