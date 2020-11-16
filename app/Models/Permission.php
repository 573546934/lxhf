<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-09 17:12:00
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Models\Permission.php
 */
namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{


    //菜单图标
    public function icon()
    {
        return $this->belongsTo('App\Models\Icon','icon_id','id');
    }

    //子权限
    public function childs()
    {
        return $this->hasMany('App\Models\Permission','parent_id','id')->orderBy('sort','desc');
    }

}