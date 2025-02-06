<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

    // TodoModelをDBのtodosテーブルとマッピングする
    // Modelを介することでSQL文を組み立てずにtodosテーブルを操作可能
class Todo extends Model
{
    protected $table = 'todos';

    // ->fill()によって代入してもよいプロパティを記述（今回の記述では、content以外は代入できなくなる）
    protected $fillable = [
        'content',
    ];
}
