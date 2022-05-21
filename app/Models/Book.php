<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * モデルと関連しているテーブル
     */
    // protected $table ="新しく命名づけるテーブル名";
    protected $table ="books";

    /*
    *テーブルの主キーを変更する
    */
    // protected $primaryKey = "id以外の「別の主キー名」";

    // 可変項目:製作者が意図していない予期せぬ代入(主にID,pass)を防ぐ
    // $fillable:複数代入時に代入を許可する属性を配列で設定する
    // $guarded:複数代入時に代入しない属性を配列で設定
    protected $guarded = [
        "id"
    ];
    /*
    *AutoIncrementを無効にする
    */
    // public $incrementing = false;
    
    /*
    *timestampsを無効にする
    */
    // public $timestamps = false;
    
    // use HasFactory;
}
