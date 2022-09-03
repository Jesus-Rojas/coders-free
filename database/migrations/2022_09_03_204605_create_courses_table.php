<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        $status = Course::$statusEnum;
        Schema::create('courses', function (Blueprint $table) use ($status) {
            $table->id();

            $table->string('slug');
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->enum('status', $status)->default($status[0]);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();
            
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('level_id')
                ->references('id')
                ->on('levels')
                ->onDelete('set null');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');

            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
