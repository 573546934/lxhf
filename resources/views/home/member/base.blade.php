<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>力新汇富</title>
   <!--  <link rel="stylesheet" href="/static/home/layui/css/layui.css">
    <link rel="stylesheet" href="/static/home/css/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/static/home/js/jquery.min.js"  type="text/javascript"></script>
    <script src="/static/home/layui/layui.all.js"  type="text/javascript"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <style>
      .row{
        width: 100%;
        align-items: center;
        text-align: center;
        background-color: #F5F5F5	;       
      }
      
      .row1>.logo{
        height: 105px;
        text-align: left;
        /* border-bottom: solid 1px; */
        /* position:fixed;
        z-index:999; */
      }
      .logo>.col-md-1{
        padding-top: 40px;     
      }

      .logo a{
        font-size: 15px;
        color: #888888;
        text-align: center; 
      }
      #ing {
        border-bottom-style: solid;
        border-bottom-color: black; 
        color: black;
        padding-bottom: 42px;
      }

      .row1>.lunbo{
        /* margin-top: 10px; */
        height: 560px;
      }
     
     .content > div{
       margin-top: 10px;
        /* height: 550px; */
     }
     .content > .col-md-3 > div{
        height: 110px;
        line-height:110px;
        border: 1px solid #000;
     }
     .content > .col-md-3 > div > a{
        font-size: 25px;
       
     }
     .content > .col-md-8 > div:first-child{
        margin-bottom: 50px;
       
     }
     .content > .col-md-8 > div > p{
        text-align: left;
        word-wrap:break-word;
     }


      .row2{
        height: 100px;
        line-height:100px;
        background-color: #BBBBBB;
      }
      .row2 > .col-md-3 > div{
        display:inline-block;
      }
      .row2 > .col-md-3 > div > a{
        border-left: 2px solid #666;
        padding-left: 4px;
        font-size: 15px;
        
        
      }
      .row2 > .col-md-3 > div:first-child > a{
        border-left: none;
      }
      .tabs{
        height: 200px;
        padding-top: 20px;
        text-align: left;
        font-size: 15px;
      }
      .tabs > ul{
        
      }
      .tabs div{
        padding-bottom: 20px;
      }

      .row3{
        padding-top: 10px;
        /* height: 360px; */
        background: #BBBBBB;
      }
      .bottom{
        height: 80px;
        line-height:80px;
        background-color: #BBBBBB;
      }
      .bottom > .col-md-3 > div{
        display:inline-block;
      }
      .bottom > .col-md-3 > div > a{
        border-left: 2px solid #666;
        padding-left: 4px;
        font-size: 15px;    
      }
      .bottom > .col-md-3 > div:first-child > a{
        border-left: none;
      }

      .row4{

      }
    </style>
  </head>
  <body >
        <div class="row row1"  >
          
          <div class="col-md-12 logo nav nav-pills" >
            <div class="col-md-2" ><img style="height: 100px; width:300px; " src="/images/home/1604393324(1).jpg" alt=""></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-1"></div>
            @yield('tab')
           
          </div>

          <div class="col-md-12 lunbo" >
            <!--轮播图-->
                <div class="" style="width:100%" >
                  <div class="carousel slide" id="slidershow" data-ride="carousel" data-interval="2000">
                    <!--计数器-->
                    <ol class="carousel-indicators">
                     
                      <!-- <li class="active"  data-target="#slidershow" data-slide-to="0"></li>
                      <li  data-target="#slidershow" data-slide-to="1"></li> -->
                    
                    </ol>
                    <!--图片容器-->
                    <div class="carousel-inner">
                     <!--  <div class="item active ">
                        <img  style="height: 560px;width:100%" src="/"/>
                    
                        <div class="carousel-caption">
                          <h4>图一</h4>
                          <span>内容</span>
                        </div>
                      </div>
                      <div class="item">
                        <img  style="height: 560px;width:100%" src="/"/>
                     
                        <div class="carousel-caption">
                          <h4>图一</h4>
                          <span>内容</span>
                        </div>
                      </div> -->
                      <!--轮播导航-->
                     <!--  <a href="#slidershow" data-slide="prev" class="left carousel-control" role="button">
                        <img style="width: 60px;padding-top: 240px;margin-left: -80px;" src="/images/home/l.png"/>
                      </a>
                      <a href="#slidershow" data-slide="next" class="right carousel-control" role="button">
                        <img style="width: 60px;padding-top: 240px;margin-right: -80px;" src="/images/home/r.png"/>
                      </a> -->
                    </div>
                  </div>
                </div>
          </div>
            @yield('content')
        </div>

<div class="row row2">
  <div class="col-md-3">
    <div class=""><a  href="">网站地图</a></div>
    <div class=""> <a href="">网站隐私</a></div>
    <div class=""><a href="">联系我们</a></div>
  </div>
  <div class="col-md-9">.col-md-10</div>
</div>

<div class="row">
  <div class="col-md-12" style="height: 70px;"></div>
</div>


<div class="row row3">
  <div class="col-md-12 tabs">
    <div class="col-md-2">
        <ul>
          <div><b>我们是谁</b></div>
          
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
          <div><b>我们是谁</b></div>
          
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
          <div><b>我们是谁</b></div>
          
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
          <div><b>我们是谁</b></div>
          
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
        </ul>
    </div>
    <div class="col-md-2">
        <ul>
          <div><b>我们是谁</b></div>
          
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
          <dd>企业介绍</dd>
        </ul>
    </div>
    <div class="col-md-1">.col-md-1</div>
    <div class="col-md-1">.col-md-1</div>
  </div>

  <div class="col-md-12 bottom">
    <div class="col-md-3">
      <div class=""><a  href="">网站地图</a></div>
      <div class=""> <a href="">网站隐私</a></div>
      <div class=""><a href="">联系我们</a></div>
    </div>
    <div class="col-md-9">.col-md-10</div>
  </div>
</div>

<div class="row row4">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>


<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>


<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //轮播图获取
    $.post("{{ route('home.index.lunbo') }}",{_method:'get',title:'轮播图'},function (result) {
      if (result.code==0){
          var data = result.data;
          //插入图片
          $.each(data, function(i,val){     
            if(i == 0){
              //小圆点
              $(".carousel-indicators").append('<li class="active" data-target="#slidershow" data-slide-to="'+ i +'"></li>')
              //图片
              $(".carousel-inner").append('<div class="item active "><img  style="height: 560px;width:100%" src="'+val.thumb+'"/><div class="carousel-caption"><h4>图一</h4><span>内容</span></div></div>')
                        
            }else{
              $(".carousel-indicators").append('<li class="" data-target="#slidershow" data-slide-to="'+ i +'"  ></li>')
              //图片
              $(".carousel-inner").append( '<div class="item"><img  style="height: 560px;width:100%" src="'+val.thumb+'"/><div class="carousel-caption"><h4>图一</h4><span>内容</span></div></div>')
            }
          });   
         
      }
      $(".carousel-inner").append('<a href="#slidershow" data-slide="prev" class="left carousel-control" role="button"><img style="width: 60px;padding-top: 240px;margin-left: -80px;" src="/images/home/l.png"/></a><a href="#slidershow" data-slide="next" class="right carousel-control" role="button"><img style="width: 60px;padding-top: 240px;margin-right: -80px;" src="/images/home/r.png"/></a>')
      
                           
    });


/* 
    var element = layui.element;
    var layer = layui.layer;
    var form = layui.form;
    var table = layui.table;
    var upload = layui.upload;

    form.render();
    element.render();

    //统一错误提示信息
    @if(count($errors)>0)
    var errorStr = '';
    @foreach($errors->all() as $error)
        errorStr += "{{$error}}<br />";
    @endforeach
        layer.msg(errorStr);
    @endif

    @if(session('status'))
        layer.msg("{{session('status')}}");
    @endif

    //删除确认
    function delConfirm(url) {
        layer.confirm('真的删除行么', function(index){
            layer.close(index);
            $.post(url,{_method:"delete"},function (data) {
                layer.msg(data.msg,{time:1000},function () {
                    if (data.code==0){
                        location.reload()
                    }
                });
            })
        });
    } */
</script> 
@yield('script')
</body>
</html>