<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    /**
     * ブログ一覧を表示する
     * @return view
     */
    public function showList()
    {
        return view("book.list");
    }
}
