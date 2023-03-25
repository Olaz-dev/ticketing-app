<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('attended_by')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title');
            $table->text('text_description');
            $table->string('ticket_image')->nullable();
            $table->string('priority')->default('low');
            $table->string('status')->default('open');
            $table->boolean('resolved')->default(false);
            $table->boolean('locked')->default(false);
            $table->text('agent_comment')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
