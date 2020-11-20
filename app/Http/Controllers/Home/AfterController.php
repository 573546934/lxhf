<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-20 10:21:05
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Http\Controllers\Home\AfterController.php
 */

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class AfterController extends Controller
{

    //主页
    public function index()
    {
        return view('home.after');
    }

    //详情
    public function detail(Request $request)
    {
        $id = $request->get('id');
        $data = Article::find($id);
        return response(['data'=>$data,'code'=>0]);
    }



}
