@extends('layouts.master')
@section('title')
首页-新浪云
@endsection
@section('content')
<div style="background-color:#F3F3F3;"><img src="/images/feature_box.jpg" style="margin-left: 100px;"></div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-xs-6" id="index-font" ><center><img src="images/sae_logo.png"><br><h3>SAE</h3><span>云应用</span></center></div>
    <div class="col-lg-6 col-md-6 col-xs-6" style="margin-top: 50px;">
        <div>
            <h4>应用开发、优化及运行的PaaS云计算平台</h4>
            <p>国内第一家公有云计算平台，支持PHP、Java、Python语言，提供<br>Web应用开发所需的众多服务，国内最好的PaaS云计算平台</p>
            <ul>
                <li class="index-li-1">
                    <ul>
                        <li>弹性扩展，负载均衡智能应对大数据处理请求</li>
                        <li>无需运维管理与架构设计</li>
                        <li>99.95%SLA，首批可信云认证</li>
                        <li style="list-style: none;margin-top: 10px;"><a href="#" class="btn btn-primary" role="button" style="clear: both" >了解详情&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>
                </li>
                <li class="index-li-2">
                    <ul >
                        <li>沙箱技术隔离应用</li>
                        <li>防火墙防止攻击</li>
                        <li>免费配额，零成本创业</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </div>
  <div class="row" style="background-color: #F7F7F7">
      <div class="col-lg-7 col-md-7 col-xs-7">
          <div style="margin:50px 0 50px 150px">
              <h4>轻量级的云主机IaaS平台</h4>
              <p>提供按需分配、弹性可伸缩、高性能易扩展的云主机服务，支持安全<br>的私有网络</p>
              <ul>
                  <li class="index-li-1">
                      <ul>
                          <li>按需使用、按使用付费、高性能易扩展</li>
                          <li>简单高效的管理页面</li>
                          <li>开放的API接口</li>
                          <li style="list-style: none;margin-top: 10px;"><a href="#" class="btn btn-primary" role="button" style="clear: both" >了解详情&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                      </ul>
                  </li>
                  <li class="index-li-2">
                      <ul>
                          <li>秒级资源计费，更低成本</li>
                          <li>支持Docker生态及周边管理系统</li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
      <div class="col-lg-5 col-md-5 col-xs-5" id="index-font"><center><img src="images/sec_logo.png"><br><h3>SEC</h3><span>云主机</span></center></div>
    </div>
     <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-6" id="index-font" ><center><img src="images/scm_logo.png"><br><h3>SCM</h3><span>云商店</span></center></div>
        <div class="col-lg-6 col-md-6 col-xs-6" style="margin-top: 50px;">
            <div>
                <h4>无需编码瞬间拥有自己的网站</h4>
                <p>多套完善的应用程序，无需编写代码，一键安装瞬间拥有自己的团购<br>电商、微博、wiki、行业网站</p>
                <ul>
                    <li class="index-li-1">
                        <ul>
                            <li>一键安装即可获得个人云服务</li>
                            <li>多款产品，多种型号空间，适应多种场景</li>
                            <li>提供FTP上传代码个性化的修改自己的网站</li>
                            <li style="list-style: none;margin-top: 10px;"><a href="#" class="btn btn-primary" role="button" style="clear: both" >了解详情&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
      </div>
       <div class="row" style="background-color: #F7F7F7">
            <div class="col-lg-6 col-md-6 col-xs-6">
                <div style="margin:50px 0 50px 150px">
                    <h4>为App和网站提供云存储服务</h4>
                    <p>为App和网站所需的静态存储提供一站式的解决方案，包括可靠的存<br>储和流量服务</p>
                    <ul>
                        <li class="index-li-1">
                            <ul>
                                <li>支持弹性扩容</li>
                                <li>访问速度快、易扩展</li>
                                <li>丰富实用的API接口</li>
                                <li style="list-style: none;margin-top: 10px;"><a href="#" class="btn btn-primary" role="button" style="clear: both" >了解详情&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                            </ul>
                        </li>
                        <li class="index-li-2">
                            <ul >
                                <li>静态资源加速</li>
                                <li>兼容多平台SDK与管理工具</li>
                                <li>自如应对每日千万级用户的访问</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6" id="index-font"><center><img src="images/scs_logo.png"><br><h3>SCS</h3><span>云存储</span></center></div>
     </div>
      <div class="row">
             <div class="col-lg-6 col-md-6 col-xs-6" id="index-font" ><center><img src="images/sem_logo.png"><br><h3>SEM</h3><span>企业邮箱</span></center></div>
             <div class="col-lg-6 col-md-6 col-xs-6" style="margin-top: 50px;">
                 <div>
                     <h4>协同办公全球通邮服务</h4>
                     <p>企邮服务，多级管理全面掌握邮箱使用状态，海外收发服务让国际邮<br>件畅通无阻。</p>
                     <ul>
                         <li class="index-li-1">
                             <ul>
                                 <li>满足企业日常邮件办公所需</li>
                                 <li>量身定制</li>
                                 <li>支持多级管理</li>
                                 <li style="list-style: none;margin-top: 10px;"><a href="#" class="btn btn-primary" role="button" style="clear: both" >了解详情&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a></li>
                             </ul>
                         </li>
                         <li class="index-li-2">
                            <ul>
                                <li>便捷流畅的体验</li>
                            </ul>
                         </li>
                     </ul>
                 </div>
             </div>
      </div>
</div>
{{--视频部分--}}
<div >
    <div class="video-content">
    <p class="video-title">新浪云，让云触手可及</p>
    <p class="video-p">点击观看视频，带你走进新浪云</p>
    {{--<div onclick="fun()"><img src="/images/play.png" class="img-circle" id="link" > </div>--}}
   <a href="javascript:void(0)" class="video-btn"><img src="/images/play.png"></a>
    <script>
//    function fun(){
//      window.open("http://cdn.static.sinacloud.com/video/sinacloud_mv.mp4","video","width=600px,height=400px");
//     document.getElementById("video").style.display="inline";
//     document.getElementById("close").style.display="inline";
//     }
//     function clo(){
//        window.open("#","video","width=600px,height=400px");
//        document.getElementById("video").style.display="none";
//         document.getElementById("close").style.display="none";
//     }
     ;
     (function ($){
         $(document).ready(function () {
         $('.video-btn').on('click',function(){
                 $('.mask').removeClass('hide');
                 $('#sc-video').get(0).play();
             });
             $('.close-video').on('click',function(){
                 $('.mask').addClass('hide');
                  $('#sc-video').get(0).pause();
             });
             if(!document.createElement('video').canPlayType){
                 $('.v-support').removeClass('hide');
                 $('.video-btn').off('click');
             }
    });
 })(jQuery)
     </script>

     {{--<table>--}}
        {{--<tr><td><button class="glyphicon glyphicon-remove" style="font-size: 24px;float: right;background-color:grey;color: #ffffff;display: none; " id="close" onclick="clo()"></button></td></tr>--}}
        {{--<tr><td>--}}
         {{--<div><iframe style="width:600px;height:400px;display: none;" name="video" id="video"></iframe></div>--}}
        {{--</td></tr>--}}
     {{--</table>--}}
    </div>
</div>
{{--产品特色部分--}}
<div class="container-fluid" style="background-color: #F7F7F7;">
    <div class="row">
        <div class="col-lg-2 col-xs-2 col-md-2"></div>
        <div class="col-lg-2 col-xs-2 col-md-2">
            <h4 class="pro-h4">产品特色</h4><br>
            <img src="/images/feature1.png" ><br><p class="pro-title" >安全可靠</p>
           <p class="pro-word" > 多层防护，多级备份，24小时全方<br>位监控，放心托管您的应用与网站。</p>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2">
            <div style="padding-bottom: 70px;"></div>
             <img src="/images/feature2.png" ><br><p class="pro-title">灵活易用</p>
             <p class="pro-word"> 恰到好处地分配资源，灵活调度<br>应对各种复杂场景，您无需关注<br>过程，让部署更简单。</p>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2">
            <div style="padding-bottom: 70px;"></div>
             <img src="/images/feature3.png" ><br><p class="pro-title">多种选择</p>
             <p class="pro-word"> 全面覆盖了IaaS、PaaS、SaaS层<br>的各种需求，给您更多选择更多自由。</p>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2">
         <div style="padding-bottom: 70px;"></div>
          <img src="/images/feature4.png" ><br><p class="pro-title">&nbsp;&nbsp;低成本</p>
           <p class="pro-word"> 注册用户即可免费体验，超多免费额度，随时随地享受零成本创业。</p>
        </div>
         <div class="col-lg-2 col-xs-2 col-md-2"></div>
    </div>
</div>
{{--成功案例部分--}}
<div class="container-fluid" style="background-color: #F7F7F7;">
    <div class="row">
        <div class="col-lg-2 col-xs-2 col-md-2"></div>
        <div class="col-lg-5 col-xs-5 col-md-5">
            <h4 class="pro-h4">产品特色</h4><br>
            <img src="/images/typical.png">
        </div>
        <div class="col-lg-3 col-xs-3 col-md-3">
            <div style="padding-bottom: 70px;"></div>
            <blockquote style="font-size: 16px;line-height: 25px;">
            <span style="font-size: 36px;">“</span>
            SAE作为公有云服务，其整体架构具有高可靠性和高安全性，并具备专业的团队来负责安全及运营维护工作，
            因而极大地简化了项目组部署和维护工作，
            使得项目组能集中精力于核心业务的开发，为用户提供更好的体验。
            <span style="font-size: 36px;">”</span>
            </blockquote>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2"></div>
    </div>
</div>
{{--视频部分--}}
 <div class="mask hide">
        <div class="m-video">
            <video id="sc-video" src="http://cdn.static.sinacloud.com/video/sinacloud_mv.mp4" loop="" controls="controls"></video>
            <a href="javascript:void(0)" class="close-video">关闭</a>
        </div>
 </div>
<div style="width: auto;height: 40px;"></div>
@endsection