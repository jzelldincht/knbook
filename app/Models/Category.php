<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;
    protected $table = 'categories';// 指定表名
    protected $primaryKey = 'id';// 指定主键名

    public $timestamps = true;// 框架自动维护这两个字段，如果不需要自动维护则设置为false
}
