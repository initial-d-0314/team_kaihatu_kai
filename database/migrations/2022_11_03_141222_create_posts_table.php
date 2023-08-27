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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->longText('body');
            $table->string('image_url', 200)->nullable();
            $table->date('date');
            $table->timestamps();
            //送った人物（自分）
            $table->bigInteger('auth_send_user');
            //以下は送り先
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
        $table->dropForeign('posts_user_id_foreign');
        });
        Schema::dropIfExists('posts');
    }
};
