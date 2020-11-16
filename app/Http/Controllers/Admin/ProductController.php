<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //分类
        $categorys = ProductCategory::with('allChilds')->where('parent_id',0)->orderBy('sort','desc')->get();
        return view('admin.product.index',compact('categorys'));
    }

    public function data(Request $request)
    {

        $model = Product::query();
        if ($request->get('category_id')){
            $model = $model->where('category_id',$request->get('category_id'));
        }
        if ($request->get('title')){
            $model = $model->where('title','like','%'.$request->get('title').'%');
        }
        $res = $model->orderBy('created_at','desc')->with(['category'])->paginate($request->get('limit',30))->toArray();
        $data = [
            'code' => 0,
            'msg'   => '正在请求中...',
            'count' => $res['total'],
            'data'  => $res['data']
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //分类
        $categorys = ProductCategory::with('allChilds')->where('parent_id',0)->orderBy('sort','desc')->get();

        return view('admin.product.create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['category_id','title','keywords','description','content','thumb','click']);
        Product::create($data);
        return redirect(route('admin.product'))->with(['status'=>'添加成功']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('tags')->findOrFail($id);
        if (!$product){
            return redirect(route('admin.product'))->withErrors(['status'=>'产品不存在']);
        }
        //分类
        $categorys = ProductCategory::with('allChilds')->where('parent_id',0)->orderBy('sort','desc')->get();
     /*    //标签
        $tags = Tag::get();
        foreach ($tags as $tag){
            $tag->checked = $article->tags->contains($tag) ? 'checked' : '';
        } */
        return view('admin.product.edit',compact('product','categorys'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::with('tags')->findOrFail($id);
        $data = $request->only(['category_id','title','keywords','description','content','thumb','click']);
        if ($product->update($data)){
            // $product->tags()->sync($request->get('tags',[]));
            return redirect(route('admin.product'))->with(['status'=>'更新成功']);
        }
        return redirect(route('admin.product'))->withErrors(['status'=>'系统错误']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ids = $request->get('ids');
        if (empty($ids)){
            return response()->json(['code'=>1,'msg'=>'请选择删除项']);
        }
        foreach (Product::whereIn('id',$ids)->get() as $model){
            //清除中间表数据
           // $model->tags()->sync([]);
            //删除产品
            $model->delete();
        }
        return response()->json(['code'=>0,'msg'=>'删除成功']);
    }

}
