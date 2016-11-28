@extends('home.layout')

@section('title')
    <title>{{ $tag->title or Settings::blogTitle() }} | 手机群控|微信群控|新媒体营销系统|金融微商自动化营销软件</title>
@stop

@section('content')


   <div id="preloader">      
      <div id="status">
         <img src="/assets/images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>

   <!-- Header
   ================================================== -->
   <header>

      <div class="logo">
         <a class="smoothscroll" href="#hero"><img alt="" src="/assets/images/logo.png"></a>
      </div>

      <nav id="nav-wrap">         
         
         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">显示导航</a>
          <a class="mobile-btn" href="#" title="Hide navigation">隐藏导航</a>         

         <ul id="nav" class="nav">
            <li><a class="smoothscroll" href="#features">功能</a></li>
             <li><a class="smoothscroll" href="#pricing">规格</a></li>
            <li><a class="smoothscroll" href="#screenshots">图片</a></li>
            <li><a class="smoothscroll" href="#testimonials">资讯</a></li>
            <li><a class="smoothscroll" href="#subscribe">联系我们</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <ul class="header-social">
         <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-wechat"></i></a></li>

         <li>
             <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服"><i class="fa fa-qq"></i></a>
         </li>
         
      </ul>

        

   </header> <!-- Header End -->

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">艾路群控官方微信</h4>
      </div>
      <div class="modal-body">
        <img src="/assets/images/wechat.jpg" alt="" />
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">视频演示</h4>
      </div>
      <div class="modal-body">
        视频演示
      </div>
    </div>
  </div>
</div>

   <!-- Homepage Hero
   ================================================== -->
   <section id="hero">

       <div class="row">

           <div class="twelve columns">

               <div class="hero-text">
                   <h1 class="responsive-headline">同为群控 与众不同</h1>

                   <p>小号注册困难？养号规则不通？
加粉速度太慢？封号次次汗颜？
营销方式落伍？变现能力难堪？
艾路群控，全新的移动新营销模式，一键群控数百台手机，自动养粉，极速获取百万粉丝，上百个营销脚本，对话集中管控，提供全方位微信营销解决方案。</p>
               </div>

            <div class="buttons">
               <a class="button trial" href="#" data-toggle="modal" data-target="#modal">视频演示</a>
               <a class="button learn-more smoothscroll" href="#subscribe">联系我们</a>
            </div>

            <div class="hero-image">
               <img src="/assets/images/hero-image.png" alt="" />
            </div>

           </div>

       </div>

   </section> <!-- Homepage Hero end -->


   <!-- Features Section
   ================================================== -->
   <section id='features'>

      <div class="row feature design">

         <div class="six columns right">
            <h3>独创的群控引擎</h3>

            <p>艾路使用站群的思路来群控手机，采用局域网技术实现单机控制上千台手机同时完成工作，采用底层定制的ROM实现控制手机的每一个细节，包括屏幕、GPS、按键、以及各种传感器。
            </p>
         </div>

         <div class="six columns feature-media left">
             <img src="/assets/images/a.png" alt="" />
         </div>

      </div>

      <div class="row feature responsive">

         <div class="six columns left">
            <h3>高达60FPS的屏幕传输技术</h3>

            <p>
            我们采用独家开发的基于H264视频编码技术的屏幕传输引擎，能让手机屏幕以超过60FPS的效率在您的电脑上展现，并且延迟小于0.01秒。基于并发传输展示技术，我们的系统可以同屏显示超过100台手机的画面，并实时操作他们。
            </p>
         </div>

         <div class="six columns feature-media right">
             <img src="/assets/images/b.png" alt="" />
         </div>

      </div>

      <div class="row feature cross-browser">

         <div class="six columns right">
            <h3>基于安卓内核的虚拟定位</h3>

            <p>
            我们基于安卓内核做的定位引擎，采用底层定位技术，非开发者选项里的“允许虚拟定位”能比拟。能完全模拟GPS、WIFI、基站的定位，实现全球任意地方的定位，并支持微信任意版本，及以后的新版本，效果、稳定性一流。
            </p>
         </div>

         <div class="six columns feature-media left">
             <img src="/assets/images/c.png" alt="" />
         </div>

      </div>

      <div class="row feature video">

         <div class="six columns left">
            <h3>可以自由编辑的脚本执行引擎</h3>

            <p>
            我们开发了可以自由编辑的脚本执行引擎，可自行编辑脚本支持任意任务。可以通过脚本指定点击位置、按钮、输入内容，以及判断、获取手机屏幕上的元素，实现任何营销功能，而不仅仅局限于微信上。 
            </p>
         </div>

         <div class="six columns feature-media right">
            <img src="/assets/images/d.png" alt="" />
         </div>

      </div>

   </section> <!-- Homepage Hero end -->


    <!-- Pricing Section
   ================================================== -->
   <section id="pricing">

      <div class="row section-head">

         <h1>艾路群控统一售价</h1>

         <p>
         温馨提示：同类低端、盗版软件惯以低价促进成交，常伴随大量功能使用异常甚至无法使用的售后问题，对用户及群控行业造成了极其恶劣的影响，请您仔细辨别，慎重选择！
         <br />
         艾路群控建议您从技术手段、实现方式、系统功能、操作体验、售后服务、价格体系上进行综合考虑后再决定是否购买。
         </p>

      </div>

      <div class="row">

         <div class="pricing-tables bgrid-quarters s-bgrid-halves">

            <div class="column">

               <div class="price-block">

                  <h3 class="plan-title"><i class="fa fa-cog"></i>基础 V15</h3>
                  <p class="plan-price">&yen;16800 <span></span></p>

                  <ul class="features">
                     <li>集群服务器1台</li>
                     <li>手机 15台</li>
                     <li>动作传感器引擎</li>
                     <li>GPS定位引擎</li>
                     <li>自定义脚本引擎</li>
                     <li>无分控模式</li>
                     <li>相关硬件、配件</li>
                  </ul>

                  <footer class="plan-sign-up">
                     <a class="button" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服">立即购买</a>
                  </footer>

               </div> <!-- End Price Block -->

               </div> <!-- End Column -->

            <div class="column">

               <div class="price-block">

                  <h3 class="plan-title"><i class="fa fa-thumbs-up"></i>标准 V30</h3>
                  <p class="plan-price">&yen;32800 <span></span></p>

                  <ul class="features">
                     <li>集群服务器1台</li>
                     <li>手机 30台</li>
                     <li>动作传感器引擎</li>
                     <li>GPS定位引擎</li>
                     <li>自定义脚本引擎</li>
                     <li>无分控模式</li>
                     <li>相关硬件、配件</li>
                  </ul>

                  <footer class="plan-sign-up">
                     <a class="button" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服">立即购买</a>
                  </footer>

               </div> <!-- End Price Block -->

               </div> <!-- End Column -->

           <div class="column">

               <div class="price-block">

                  <h3 class="plan-title"><i class="fa fa-star"></i>高级 V60</h3>
                  <p class="plan-price">&yen;62800 <span></span></p>

                  <ul class="features">
                     <li>集群服务器1台</li>
                     <li>手机 60台</li>
                     <li>动作传感器引擎</li>
                     <li>GPS定位引擎</li>
                     <li>自定义脚本引擎</li>
                     <li>含分控模式</li>
                     <li>相关硬件、配件</li>
                  </ul>

                  <footer class="plan-sign-up">
                     <a class="button" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服">立即购买</a>
                  </footer>

               </div> <!-- End Price block -->

               </div> <!-- End Column -->

            <div class="column">

               <div class="price-block">

                  <h3 class="plan-title"><i class="fa fa-trophy"></i>至尊 V100</h3>
                  <p class="plan-price">&yen;102800 <span></span></p>

                  <ul class="features">
                     <li>集群服务器1台</li>
                     <li>手机 100台</li>
                     <li>动作传感器引擎</li>
                     <li>GPS定位引擎</li>
                     <li>自定义脚本引擎</li>
                     <li>含分控模式</li>
                     <li>相关硬件、配件</li>
                  </ul>

                  <footer class="plan-sign-up">
                     <a class="button" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服">立即购买</a>
                  </footer>

               </div> <!-- End Price Block -->

               </div> <!-- End Column -->

         </div>

      </div>

   </section> <!-- Pricing End -->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

            <h1><span>艾路群控</span></h1>

         </div>

         <div class="seven columns">

            <h2><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">寻找一套可靠的、可怕的群控系统？</a></h2>
            <p>
                把握互联网<span>新媒体</span>营销风潮，紧跟<span>微信自动化</span>营销趋势
                <br />
                现在合作，免费赠送微信爆粉、营销、变现终极秘籍及资源包
            </p>

         </div>

         <div class="three columns action">

            <a class="button" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1121071666&amp;site=qq&amp;menu=yes" target="_blank" rel="nofollow" title="在线客服">立即开启营销新模式</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Screenshots
   ================================================== -->
   <section id="screenshots">

      <div class="row section-head">

         <h1>艾路群控系统</h1>

         <p>艾路群控系统结合金融、微商、电商、传媒、文化、教育、房产、科技、旅游、娱乐、健康等各行业需求及体验，在系统操作和自动化营销管理上开发出了上百个功能模块，在行业内已遥遥领先，并在不断的更新完善。
         </p>

      </div>

      <div class="row">

         <div class="twelve columns">

            <!-- screenshots-wrapper -->
            <div id="screenshots-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-line-icons.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/line-icons.jpg" alt="Line Icons">
                        <div class="overlay"></div> 
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-hipster.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/hipster.jpg" alt="Hipster">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-authentic-vintage.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/authentic-vintage.jpg" alt="Authentic Vintage">                        
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-spot-uv-logo.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/spot-uv-logo.jpg" alt="Spot UV Logo">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-tshirt-mockup.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/tshirt-mockup.jpg" alt="TShirt Mockup">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-abstract-vector.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/abstract-vector.jpg" alt="Abstract Vector">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-embossed-paper.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/embossed-paper.jpg" alt="Embossed Paper">                        
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div> <!-- item end -->

               <div class="columns item">
                  <div class="item-wrap">

                     <a href="images/screenshots/big/b-judah.jpg" data-imagelightbox="a" >
                        <img src="/assets/images/screenshots/judah.jpg" alt="Judah">
                        <div class="overlay"></div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div>  <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->

      </div>  <!-- end row -->

   </section> <!-- Screenshots End -->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="row content">

         <span><i class="quote-left fa fa-quote-left"></i></span>

         <div class="text-container">

            <div class="twelve columns">

               <h1 style="font-size: 20px">最新资讯</h1>

            </div>

            <div class="twelve columns flex-container">

               <div class="flexslider">

                  <ul class="slides">
                     @foreach($posts as $post)

                     <li>
                        <blockquote>
                           <p>
                              {{ $post->subtitle }}
                           </p>
                           <a href="{{ route('blog.post.show',$post->slug) }}" class="button">查看详情</a>
                        </blockquote>
                     </li> <!-- slide ends -->
                     @endforeach

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div>  <!-- text-container ends -->

         <span><i class="quote-right fa fa-quote-right"></i></span>

      </div> <!-- row ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Subscribe
   ================================================== -->
   <section id="subscribe">

      <div class="row section-head">

         <div class="twelve columns">

            <h1>联系我们</h1>

            <p>
            艾路手机群控系统已为您搭配了全套硬件设备，即装即用，省心省力。我们热诚邀请您亲临艾路公司做客，欢迎预约访问
            <br />
            如您不清楚规则，或有其他疑问，请联系我们在线客服
            </p>

         </div>

      </div>

      <div class="row">

         <div class="twelve columns">

         <!-- Begin MailChimp Signup Form -->

            <div id="mc_embed_signup">
               <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  
                  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="邮箱地址" required>
                   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                   <div style="position: absolute; left: -5000px;"><input type="text" name="b_cdb7b577e41181934ed6a6a44_e65110b38d" value=""></div>
                  <div class="clear"><input type="submit" value="提交" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
               
            </form>
            </div>

            <p><small>我们永远不会分享你的邮箱信息或使用它来发送垃圾邮件。</small></p>

         </div>

      </div>

   </section>  <!-- Subscribe Section End-->


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">         

         <div class="six columns info">

            <div class="footer-logo">
               <a href="#">
                  <img src="/assets/images/wechat.jpg" alt="" />
               </a>
            </div>

            <p>
            艾路群控官方微信
            </p>

         </div>

         <div class="six columns right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">地址</h3>
                  <p>
                  武汉武昌区汉街环球国际中心K3-506
                  </p>
               </div>

               <div class="columns">
                  <h3 class="social">社交</h3>
                  <ul>
                     <li><a href="#">QQ：1121071666</a></li>
                     <li><a href="#">微信：13971186520</a></li>
                  </ul>
               </div>

               <div class="columns last">
                  <h3 class="contact">联系我们</h3>
                  <ul>
                    <li><a href="tel:13971186520">13971186520</a></li>
                    <li><a href="mailto:1121071666@qq.com">1121071666@qq.com</a></li>
                  </ul>
               </div>

            </div> <!-- Nested Row End -->

         </div>

         <p class="copyright">&copy; 2016 ailuqk.com | Design by <a title="艾路群控" href="http://www.ailuqk.com/">艾路群控</a> | 鄂ICP备16017024号-2</p>

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>
         </div>

      </div> <!-- Row End -->

   </footer> <!-- Footer End-->

@stop
@section('unique-js')
<script src="{{ elixir('assets/js/jquery-1.10.2.min.js') }}"></script>
<script>window.jQuery || document.write("elixir('assets/js/jquery-1.10.2.min.js')")</script>
<script src="{{ elixir('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ elixir('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ elixir('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ elixir('assets/js/waypoints.js') }}"></script>
<script src="{{ elixir('assets/js/jquery.fittext.js') }}"></script>
<script src="{{ elixir('assets/js/jquery.fitvids.js') }}"></script>
<script src="{{ elixir('assets/js/imagelightbox.js') }}"></script>
<script src="{{ elixir('assets/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ elixir('assets/js/main_home.js') }}"></script>

@stop