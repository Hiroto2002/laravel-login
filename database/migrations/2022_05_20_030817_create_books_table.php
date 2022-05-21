<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 新しいテーブル・カラム・インデックスをデータベースに追加するために使う
    public function up()
    {
        // Schema::create: テーブルを作成
        // テーブルとカラムのそんざいチェック
        if(!Schema::hasTable('blogs')){
            Schema::create('books', function (Blueprint $table) {
                $table->bigIncrements("id");
                $table->string("item_name");
                $table->integer("item_number");
                $table->integer("item_amount");
                $table->datetime("published");
                $table->timestamps();
            });    
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // up()で作ったテーブルを削除する
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
