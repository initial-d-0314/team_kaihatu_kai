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
        Schema::create('receivers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->longText('body');
            $table->string('image_url', 200)->nullable();
            $table->date('date');
            $table->timestamps();
            $table->foreignId('post_id')->constrained();
            //誰に送ったかの情報
            $table->bigInteger('receive_user');
            //送ってきた相手のid
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
        Schema::table('receivers', function (Blueprint $table) {
        $table->dropForeign('receivers_post_id_foreign');
        $table->dropForeign('receivers_user_id_foreign');
        });
        Schema::dropIfExists('receivers');
    }
};
