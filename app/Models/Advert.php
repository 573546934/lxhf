<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-04 16:50:41
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Models\Advert.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{

    protected $fillable = ['title','thumb','link','position_id','sort','description'];
    //广告所在的位置信息
    public function position()
    {
        return $this->belongsTo('App\Models\Position');
    }

     //获取指定位置广告
     public static function getList($name)
     {
         $positionId = Position::where('name','like','%'.$name.'%')->value('id');
         return static :: where('position_id',$positionId)
             ->orderBy('sort','desc')
             ->get();
     }

}
