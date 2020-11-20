<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:12
 * @LastEditTime: 2020-11-20 20:58:01
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
use App\Models\Member;
use Faker\Provider\Uuid;

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


    //注册
    public function reg(Request $request)
    { 

        $this->validate($request, [
            'phone' => 'required|unique:members|min:11',
            'password' => 'required|min:6',
        ]);

        $data = $request->only('name','phone','password');
        $data['password'] = MD5($data['password'].'yan');
        $data['uuid'] = Uuid::uuid();
        $res = Member::create($data);
        if($res){
            $m = Member::where('phone',$data['phone'])->first();
            session()->put('member', $m);
           return response(['code'=>0,'msg'=>'注册成功']);            
        }else{
           return response(['code'=>1,'msg'=>'注册失败']);            
        }
    }
    //登录
    public function login(Request $request)
    {
        $data = $request->only('phone','password');
        $m = Member::where('phone',$data['phone'])->where('password',MD5($data['password'].'yan'))->first();
        // dd(MD5($data['password'].'yan'));
        if($m){
            session()->put('member', $m);
            return response(['code'=>0,'msg'=>'登录成功']);
        }else{
            return response(['code'=>1,'msg'=>'登录失败']);
        }
    }



}
