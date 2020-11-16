<?php
/*
 * @Author: Liu Jing
 * @Date: 2020-11-09 15:28:28
 * @LastEditTime: 2020-11-09 15:30:30
 * @LastEditors: Liu Jing
 * @Description: 产品模型
 * @FilePath: \lxhf\app\Models\Product.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
   // protected $fillable = ['category_id','title','keywords','description','content','thumb','click'];

    //产品所属分类
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    


}
