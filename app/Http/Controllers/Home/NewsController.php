<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-20 09:50:25
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Http\Controllers\Home\NewsController.php
 */

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class NewsController extends Controller
{

    //主页
    public function index()
    {
        //公司新闻
        $cid = Category::where('name','like','%公司新闻%')->where('parent_id',0)->value('id');
        $cnews = Article::where('category_id',$cid)->with('category')->get();
        //行业新闻
        $nid = Category::where('name','like','%行业新闻%')->where('parent_id',0)->value('id');
        $news = Article::where('category_id',$nid)->with('category')->get();
       
        return view('home.news',compact('cnews','news'));
    }

    //详情
    public function detail(Request $request)
    {
        $id = $request->get('id');
        $data = Article::find($id);
        return response(['data'=>$data,'code'=>0]);
    }



}
