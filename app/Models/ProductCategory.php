<?php
/*
 * @Author: Liu Jing
 * @Date: 2020-11-09 15:21:52
 * @LastEditTime: 2020-11-09 15:28:17
 * @LastEditors: Liu Jing
 * @Description: 产品模型
 * @FilePath: \lxhf\app\Models\ProductCategory.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    protected $fillable = ['name','sort','parent_id'];

    //子分类
    public function childs()
    {
        return $this->hasMany('App\Models\ProductCategory','parent_id','id');
    }

    //所有子类
    public function allChilds()
    {
        return $this->childs()->with('allChilds');
    }

    //分类下所有的产品
    public function products()
    {
        return $this->hasMany('App\Models\Product','category_id','id');
    }
    //分类下单个产品
    public function product()
    {
        return $this->hasOne('App\Models\Product','category_id','id');
    }

    //子分类及所有产品
    public function childsList()
    {
        return $this->hasMany('App\Models\ProductCategory','parent_id','id')->with('Products');
    }
    //子分类及单个产品
    public function childsOne()
    {
        return $this->hasMany('App\Models\ProductCategory','parent_id','id')->with('Product');
    }

}
