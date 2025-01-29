<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('userID')->constrained('users')->onDelete('cascade');
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('registered_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->text('bio')->nullable();
            $table->string('email')->unique();
            $table->string('phoneNum')->unique();
            $table->foreignId('countryID')->constrained('countries');
        });

        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phoneNum');
            $table->string('email');
            $table->text('location');
            $table->text('desc')->nullable();
        });

        Schema::create('galeri', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
        });

        Schema::create('wishlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
        });

        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('placeID')->constrained('places');
            $table->integer('rating');
            $table->text('desc');
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('places_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('placeID')->constrained('places');
            $table->foreignId('tagID')->constrained('tags');
        });

        Schema::create('culinaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
        });

        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('placeID')->constrained('places');
            $table->foreignId('culinaryID')->constrained('culinaries');
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
