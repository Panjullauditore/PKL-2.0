<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {

        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNum');
            $table->string('email');
            $table->text('location');
            $table->text('desc')->nullable();
            $table->string('image')->default('default.jpg');
            $table->integer('ispopular')->default(0);
            $table->timestamps();
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
            $table->timestamps();
        });

        Schema::create('wishlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
            $table->timestamps();
        });

        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
            $table->integer('rating');
            $table->text('desc');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('places_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('placeID')->constrained('places');
            $table->foreignId('tagID')->constrained('tags');
            $table->timestamps();
        });

        Schema::create('culinaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->default('default.jpg');
            $table->text('desc');
            $table->timestamps();
        });

        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('placeID')->constrained('places');
            $table->foreignId('culinaryID')->constrained('culinaries');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu');
        Schema::dropIfExists('culinaries');
        Schema::dropIfExists('places_tags');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('review');
        Schema::dropIfExists('wishlist');
        Schema::dropIfExists('galeri');
        Schema::dropIfExists('places');
        Schema::dropIfExists('registered_users');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('users');
    }
};
