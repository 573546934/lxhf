<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-19 16:45:28
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\app\Http\Controllers\Home\ProductController.php
 */

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{

    //主页
    public function index()
    {
        //产品数据
        $data = Product::with('category')->get()->toArray();
        return view('home.product',compact('data'));
    }

    //详情
    public function detail(Request $request)
    {
        $id = $request->get('id');
        $data = Product::find($id);
        return response(['data'=>$data,'code'=>0]);
    }



}
