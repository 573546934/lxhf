<?php
/*
 * @Author: Liu Jing
 * @Date: 2019-12-23 15:43:13
 * @LastEditTime: 2020-11-19 16:47:24
 * @LastEditors: Liu Jing
 * @Description: 
 * @FilePath: \lxhf\routes\web.php
 */
//文件上传接口，前后台共用
Route::post('uploadImg', 'PublicController@uploadImg')->name('uploadImg');
//发送短信
Route::post('/sendMsg', 'PublicController@sendMsg')->name('sendMsg');

Route::get('/','Home\IndexController@index')->name('home');
Route::get('/index/lunbo','Home\IndexController@lunbo')->name('home.index.lunbo');
Route::get('/who','Home\IndexController@who')->name('home.index.who');

//产品
Route::get('product','Home\ProductController@index')->name('home.product.index');
Route::get('product/detail','Home\ProductController@detail')->name('home.product.detail');

Route::get('/tableft','Home\IndexController@tableft')->name('home.index.tableft');













//支付
Route::group(['namespace' => 'Home'], function () {
    //微信支付
    Route::get('/wechatPay', 'PayController@wechatPay')->name('wechatPay');
    //微信支付回调
    Route::post('/wechatNotify', 'PayController@wechatNotify')->name('wechatNofity');
});

//会员-不需要认证
Route::group(['namespace'=>'Home','prefix'=>'member'],function (){
    //注册
    Route::get('register', 'MemberController@showRegisterForm')->name('home.member.showRegisterForm');
    Route::post('register', 'MemberController@register')->name('home.member.register');
    //登录
    Route::get('login', 'MemberController@showLoginForm')->name('home.member.showLoginForm');
    Route::post('login', 'MemberController@login')->name('home.member.login');
});
//会员-需要认证
Route::group(['namespace'=>'Home','prefix'=>'member','middleware'=>'member'],function (){
    //个人中心
    Route::get('/','MemberController@index')->name('home.member');
    //退出
    Route::get('logout', 'MemberController@logout')->name('home.member.logout');
});
