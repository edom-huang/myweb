@extends('layouts.master')
@section('title')
企业版-新浪云
@endsection
@section('content')
<div class="banner">
<div class="banner-inner">
<p class="banner-title">便捷，高效，省心的企业级PaaS平台</p>
<a href="#">立即免费查询</a>
</div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-2"></div>
        <div class="col-lg-4 col-md-4 col-xs-4"  >
             <h3 class="company-font">独立的机房网络环境</h3>
             <p class="company-font">与普通用户环境不同，企业版用户运行在独立的多个骨干机房内，
             这些机房属于新浪核心机房，
             网络带宽和接入质量更好，覆盖移动、联通、电信、教育网等多点快速接入，
             带宽可高达80G，对于要求网络速度快、访问稳定的业务，适合使用企业版</p>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-6" >
            <center><img src="/images/company/ent_service1.png"></center>
        </div>
    </div>
    <div class="row" style="background-color: #F7F7F7">
            <div class="col-lg-2 col-md-2 col-xs-2"></div>
            <div class="col-lg-4 col-md-4 col-xs-4"  >
                 <center><img src="/images/company/ent_service2.png"></center>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-1"></div>
            <div class="col-lg-4 col-md-4 col-xs-4" >
                <h3 class="company-font">更大的服务配额</h3>
                     <p class="company-font">企业版用户拥有比普通用户更大的配额，不同的账户等级对应不同的配额，
                     详情请参考<a href="#">【账户等级】</a>页面。以HTTP服务流量配额为例，最低的企业等级也比普通用户等级高6倍以上，
                     所以对于要求高并发、大流量的业务，适合使用企业版。另外值得一提的是，
                     新浪云为了节约用户成本，支持临时调整企业等级，特别适合短时间业务突增的企业用户</p>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-1"></div>
        </div>
        <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-2"></div>
                <div class="col-lg-4 col-md-4 col-xs-4" >
                     <h3 class="company-font">全面的安全配套防护</h3>
                     <p class="company-font">新浪云为企业版用户提供更先进的DDOS防火墙，
                     CC防火墙，有效拦截非法请求，
                     对于要求安全运行的业务，适合使用企业版</p>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-6" >
                    <center><img src="/images/company/ent_service3.png"></center>
                </div>
        </div>
        <div class="row" style="background-color: #F7F7F7">
          <div class="col-lg-2 col-md-2 col-xs-2"></div>
          <div class="col-lg-4 col-md-4 col-xs-4"  >
            <center><img src="/images/company/ent_service4.png"></center>
          </div>
          <div class="col-lg-1 col-md-1 col-xs-1"></div>
          <div class="col-lg-4 col-md-4 col-xs-4" >
               <h3 class="company-font">更多的服务支持</h3>
                    <p class="company-font">企业版用户可以享受到一些目前只对企业用户开放的服务，
                    包括全文检索、短信服务、CDN服务、代码加密等，
                    对于高级功能有需求的用户，适合使用企业版</p>
           </div>
           <div class="col-lg-1 col-md-1 col-xs-1"></div>
        </div>
        <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-4" >
                         <h3 class="company-font">更体贴的人工服务支持</h3>
                         <p class="company-font">新浪云为企业版用户提供一对一客户经理，
                         包括不同层面的电话支持，并会安排定期的技术性拜访，
                         上门解答用户问题，目前对于普通用户，
                         则只支持工单系统</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6" >
                        <center><img src="/images/company/ent_service5.png"></center>
                    </div>
        </div>
</div>
{{--企业用户特权--}}
<div class="container-fluid" style="background-color: #F7F7F7">
    <h3 class="company-font" style="margin-left: 100px">企业版用户特权</h3>
</div>
<div class="container-fluid" style="background-color: #F7F7F7">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
            <img src="/images/company/ent_priv1.png" class="company-img"><br>
            <p class="company-img">专享独立的企业池组为您隔离风险</p>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
        <img src="/images/company/ent_priv2.png" class="company-img"><br>
         <p class="company-img">高级工程师7*24小时专属技术支持</p>
         </div>
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
        <img src="/images/company/ent_priv3.png" class="company-img"><br>
         <p class="company-img">量身定制最适合您的账户等级</p>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #F7F7F7">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
            <img src="/images/company/ent_priv4.png" class="company-img"><br>
            <p class="company-img">根据业务需要可临时调整等级</p>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
        <img src="/images/company/ent_priv5.png" class="company-img"><br>
         <p class="company-img">多款高级服务自由使用</p>
         </div>
        <div class="col-lg-4 col-md-4 col-xs-4" style="text-align: center;">
        <img src="/images/company/ent_priv6.png" class="company-img"><br>
         <p class="company-img">性能卓越给应用极致的体验</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h3 class="company-h3">每天都有越来越多的优质用户使用新浪云</h3>
</div>
<div class="list">
    <ul>
        <li><img src="/images/company/caos.png"> </li>
        <li><img src="/images/company/bfsu.png"> </li>
        <li><img src="/images/company/ruoc.png"> </li>
        <li><img src="/images/company/cenc.png"> </li>
        <li><img src="/images/company/ccbbank.png"> </li>
        <li><img src="/images/company/weipan.png"> </li>
        <li><img src="/images/company/miaoche.png"> </li>
        <li><img src="/images/company/dididache.png"> </li>
        <li><img src="/images/company/uber.png"> </li>
        <li><img src="/images/company/weiyouxi.png"> </li>
        <li><img src="/images/company/xinhuashe.png"> </li>
        <li><img src="/images/company/chengdushangbao.png"> </li>
        <li><img src="/images/company/dutyfree.png"> </li>
        <li><img src="/images/company/3kongjian.png"> </li>
        <li><img src="/images/company/qingnianshequ.png"> </li>
        <li><img src="/images/company/wuyun.png"> </li>
        <li><img src="/images/company/zhangshangguijinshu.png"> </li>
        <li><img src="/images/company/neitui.png"> </li>
        <li><img src="/images/company/sanzhisongshu.png"> </li>
        <li><img src="/images/company/hstyle.png"> </li>
    </ul>
</div>
<div class="container-fluid"  style="background-color: #F7F7F7">
    <div class="tail-banner">
    <h3>汇聚<span class="tail-banner-font"> 超过六十万</span>优秀开发者，<span class="tail-banner-font">数万</span>卓越企业，<span class="tail-banner-font">近百万</span>高质应用</h3>
    <a href="#">低至27元/天，立即免费查询</a>
    </div>
</div>
<div style="width: auto;height: 40px;" > </div>
@endsection