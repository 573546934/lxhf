<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-04 17:41:06
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Http\Controllers\Home\IndexController.php
 */

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Article;
use App\Models\Category;

class IndexController extends Controller
{

    //主页
    public function index()
    {
        
        return view('home.index');
    }

    //我们是谁页面
    public function who()
    {
        //$data = Category::where('name','like','我们是谁')->with('childsOne')->orderBy('sort','desc')->first()->toArray();
        return view('home.who');
    }

    public function lunbo(Request $request)
    {
        $data = Advert::getList('轮播图');
        return response(['data'=>$data,'code'=>0]);
    }

    //获取左侧导航栏标题及附带内容
    public function tableft(Request $request)
    {
        $data = Category::where('name','like',$request->get('title'))->with('childs')->orderBy('sort','desc')->first()->toArray();

        return response(['data'=>$data,'code'=>0]);
    }



}
