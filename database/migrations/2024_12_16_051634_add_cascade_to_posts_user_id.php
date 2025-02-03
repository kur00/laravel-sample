<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // カラムのデータ型を unsignedBigInteger に変更
            $table->unsignedBigInteger('user_id')->change();

            // 外部キー制約を追加
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // 外部キー制約の削除
            $table->dropForeign(['user_id']);

            // カラムのデータ型を元に戻す（必要に応じて）
            $table->bigInteger('user_id')->change();
        });
    }
};
