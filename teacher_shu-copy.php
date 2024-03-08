<!doctype html>
<html lang="zh"-TW>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="蘇老師的訂閱網站概略">
<!-- 引入 Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

<!---google icon font--->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!---<link rel="stylesheet" type="text/css" href="style.css">--->

<!---AOS.js
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>--->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
<!---vanta.js--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>

<title>訂閱網站_蘇老師</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        .circle{
            width: 20px;
            height: 20px;
            transform: rotate(45deg);
            background-color:#2894FF;
            display: inline-block;
            justify-content: center;
            margin: 15px;
        }
        #topimage{
            content: url(image_shu/12345_update.jpg);
            width: 100%;
            max-width: 100%;
            height:auto;
        }
        @media screen and (max-width: 576px){
            #topimage{
                content: url(image_shu/phone_02.png);
                max-width: 100%;
                height: auto;
            }
        }
        
        /*another area
.snip1566 {
  position: relative;
  display: inline-block;
  margin: 20px;
  max-width: 300px;
  width: 100%;
  color: #fff;
  font-size: 16px;
  box-shadow: none !important;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  overflow: hidden;
}

.snip1566 *,
.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.snip1566:before,
.snip1566:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 50%;
  content: '';
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: -1;
  border: 5px solid #FFFF93;
  border-color: transparent #FFFF93;
}

.snip1566 img {
  max-width: 100%;
  width: 300px;
  height: 300px;
  backface-visibility: hidden;
  vertical-align: top;
  border-radius: 50%;
  padding: 10px;
}

.snip1566 figcaption {
  position: absolute;
  top: 5px;
  bottom: 5px;
  left: 5px;
  right: 5px;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.9);
  border-radius: 50%;
}

.snip1566 h6 {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-size: 25px;
  z-index: 1;
}

.snip1566 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1566:hover figcaption,
.snip1566.hover figcaption {
  opacity: 0.9;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

.snip1566:hover:before,
.snip1566.hover:before,
.snip1566:hover:after,
.snip1566.hover:after {
  border-width: 10px;
}

.snip1566:hover:before,
.snip1566.hover:before {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.snip1566:hover:after,
.snip1566.hover:after {
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}*/
        .card-deck .card:hover .card-subtitle{
            color: #FFE66F;
            transform: scale(1.06);
            text-shadow: 0.1em 0.1em 0.2em #2A2696;
        }
        .card-deck .card .card-subtitle{
            transform-origin: center;
            transition: transform 0.2s ease-out;
        }
        .card-deck .card .card-title{
            position: relative;
        }
        .card-deck .card .card-title::after{
            content:" ";
            display:block; 
            width: 0%;
            height: 4px;
            background-color: #FFE66F;
            transition: .3s .1s;
        }
        .card-deck .card:hover .card-title:after{
            width: 100%;
        }
        .card-deck .card{
            background-color: rgba(59,59,59,0.6);
        }


    </style>
      <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
 <!--Swiper Demo styles -->
    <style>
        /* swiper */
        .myswiper{
            width: 95%;
            position: relative;
            max-width: 800px;
            margin: auto;
            background: #fff;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            padding: 25px;
            border-radius: 25px;
            height: 400px;
            transition: all .3s;
            display: flex;
        }
        @media screen and (max-width: 992px) {
            .myswiper{
                max-width: 680px;
                height: 350px;
            }
            .swiper-slide .swiper-slide-image{
                  /* width: 45%;*/
              }
            .swiper-slide .swiper-slide-content{
                 /*width: 55%;*/
            }
        }
  
        @media screen and (max-width: 768px) {
            .myswiper{
                min-height: 500px;
                height: auto;
                margin: 180px auto;
            }
            .swiper-slide{
                flex-direction: column;
            }
            .swiper-slide .swiper-slide-image{
                transform: translateY(-50%);
                width: 90%;
            }
            .swiper-slide .swiper-slide-content{
                margin-top: -30px;
                text-align: center;
                padding: 0 30px;
            }
            .myswiper .swiper-pagination{
                transform: translateX(-50%)!important;
                left: 50%!important;
                top: 40%!important;
                width: 100%!important;
                display: flex;
                justify-content: center!important;
                align-items: center;
            }
            .swiper-pagination .swiper-pagination-bullet{
                 margin: 0 5px!important;
            }
            .swiper-pagination-bullet-active{
                height: 11px!important;
                width: 30px!important;
            }

        }
        @media screen and (max-width: 576px) {
            .myswiper{
                height: 400px!important;
            }
            .swiper-slide .swiper-slide-image{
                width: 95%;
                height: 240px;
            }
            .myswiper .swiper-pagination{
                top: 35%!important;
            }
            .swiper-slide .swiper-slide-content{
                padding: 0;
            }
            .swiper-slide .content-button{
                width: 100%;
            }
            .circle{
                width: 15px;
                height: 15px;
                margin: 10px;
            }
        }
        @media screen and (max-height: 500px) and (min-width: 992px) {
            .myswiper{
                height: 350px;
            }
            .swiper-slide .swiper-slide-image{
                height: 270px;
            }
        }
        
        /* swiper-slide-item */
        .swiper-slide{
            display: flex;
            align-items: center;
        }
        
        .swiper-slide-active .swiper-slide-image img {
            opacity: 1;
            transition-delay: .3s;
        }
        
        .swiper-slide-active .swiper-slide-content > * {
            opacity: 1;
            transform: none;
        }
        
        .swiper-slide-active .swiper-slide-content >*:nth-child(1) {
            transition-delay: 0.3s;
        }
        .swiper-slide-active .swiper-silde-content >*:nth-child(2) {
            transition-delay: 0.4s;
        }
        /* Repeat the above pattern for nth-child(3) to nth-child(15) */
        .swiper-slide-active .swiper-slide-content >*:nth-child(16) {
            transition-delay: 1.7s;
        }
        
        /* image */
        .swiper-slide-image{
            /* width: 40%;*/
            width: 300px;
            flex-shrink: 0;
            height: 300px;
            background-image: linear-gradient(147deg, #D2E9FF 0%, #2894FF 74%);
            box-shadow: 4px 13px 30px 1px rgba(40, 148, 255, 0.2);
            border-radius: 20px;
            transform: translateX(-80px);
            overflow: hidden;
        }
        .swiper-slide-image:after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(147deg, #D2E9FF 0%, #2894FF 74%);
            border-radius: 20px;
            opacity: 0.5;
        }
        
        .swiper-slide-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            opacity: 0;
            border-radius: 20px;
            transition: all .3s;
        }

        /* content */
        .swiper-slide-content{
            /* width: 60%;*/
            padding-right: 25px;
        }
        .swiper-slide-content > *{
            opacity: 0;
            transform: translateY(25px);
            transition: all .4s;
        }
        
        /* date */
        .swiper-slide .content-date{
            color: #7b7992;
            margin-bottom: 15px;
            display: block;
            font-weight: 500;
        }
        /* title */
        .swiper-slide .content-title{
            font-size: 24px;
            font-weight: 700;
            color: #0d0925;
            margin-bottom: 20px;
        }
        /* text */
        .swiper-slide .content-text{
            color: #4e4a67;
            margin-bottom: 30px;
            line-height: 1.5em;
        }
         
        /* button */
        .swiper-slide .content-button{
            display: inline-flex;
            background-image: linear-gradient(147deg, #D2E9FF 0%, #2894FF 74%);
            padding: 15px 35px;
            border-radius: 50px;
            color: #fff;
            box-shadow: 0px 14px 80px rgba(40, 148, 255, 0.4);
            text-decoration: none;
            font-weight: 500;
            justify-content: center;
            text-align: center;
            letter-spacing: 1px;
        }
        
        /*PAGINATION*/

        .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%;
        }
        .myswiper .swiper-pagination{
            position: absolute;
            z-index: 21;
            right: 20px;
            width: 11px;
            text-align: center;
            left: auto;
            top: 50%;
            bottom: auto;
            transform: translateY(-50%);
        }
        
        .myswiper .swiper-pagination .swiper-pagination-bullet{
             margin: 8px 0;
        }      
        .swiper-pagination-bullet{
            width: 11px;
            height: 11px;
            display: block;
            border-radius: 10px;
            background: #062744;
            opacity: 0.2;
            transition: all .3s;
        }
        .swiper-pagination-bullet-active{
            opacity: 1;
            background: #2894FF;
            height: 30px;
            box-shadow: 0px 0px 20px rgba(40, 148, 255, 0.3);
        }
        .navbar{
            background: rgba(0,0,0,0.9);
        }
    </style>

    <script>
        /* Demo purposes only */
        $(".hover").mouseleave(
            function () {
                $(this).removeClass("hover");
            }
        );
    </script>
</head>
<body>
    <!---navbar--->
    <div class="col-12 p-0 sticky-top" style="position:fixed">
        <nav class="navbar navbar-expand-lg navbar-dark " >
            <!---left--->
        <div class="collapse navbar-collapse order-lg-1 order-3 mr-lg-0 " id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light text-center pt-2" href=""><h4><b>解盤影片</b></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light text-center pt-2" href=""><h4 ><b>智能診股</b></h4></a>
                </li> 
            </ul>
        </div>
            <!---left--->
        <a class="navbar-brand order-1 text-light pr-4 pl-4 m-0 mr-lg-0" href="#" id="logo"><img src="image_shu/NICK.png" style="height:45px;"></a>
   
        <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <!---right--->
        <div class="collapse navbar-collapse order-lg-3 order-4" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-light text-center pt-2" href=""><h4><b>方案介紹</b></h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light text-center pt-2" href="" data-toggle="modal" data-target="#exampleModalCenter"><h4><b>我要訂閱</b></h4></a>
                </li>
            </ul>
        </div>
            <!---right--->
    </nav>
    </div>
    <!---- 原本的nav備份
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="image_shu/NICK.png" style="height:45px;"></a>

            <div class="" id="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#scription" style="color:#fff">訂閱專區</a>
                    </li>
                </ul>
            </div>
        </nav>
-->
        <!---top btn--->
    <button type="button" class="btn btn-info shadow" style="border-radius:50%; position:fixed; bottom:20px; right:20px; height:80px; width:80px; z-index:10; display:flex; align-items:center; justify-content:center;" onclick="scrollToTop()">
            <h4 style="margin: 0;"><b>TOP</b></h4>
    </button>
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>
    
    
    <!---top image--->
    <div class="col-12 p-0" id="topimage">
<!---
        <img src="image_shu/12345_update.jpg" style="width:100%">--->
    </div>

    <!----seperate
    <div class="col-12" style="background-color:#fff">
        <div class="row justify-content-center">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>--->
    
    <!---swiper area--->
    <div id="bg">
    <div class="col-12" >
        <div class="col-12 p-0">
            <h6 class="p-0 m-0"><br><br><br></h6>
        </div>
        <div class="container">
    
   <!-- Swiper -->
  <div class="myswiper">
      <!---swiper-wrap--->
    <div class="swiper-wrapper slide-wrap"> 
        <!---swiper item A--->
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="image_shu/financial-01.jpg">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <!---
              <span class="content-date">A</span>--->
      
              <div class="content-title">績優個股研究</div>
      
              <div class="content-text">不同於市面上零碎不完整的資訊，針對績優股行深度掃描。
(個股推薦：黑馬股 波段股 價值股)
              </div>
          </div>
        </div>
     
       <!---swiper item B---> 
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="image_shu/financial-02.jpg">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <!---
              <span class="content-date">A</span>--->
      
              <div class="content-title">資產配置&<br>最新財經趨勢</div>
      
              <div class="content-text">股海常有新鮮事，但該用什麼心態面對？威元老師就自身經驗分享，提供投資人不同的角度思考。 </div>
          </div>
        </div>
        
        
       <!---swiper item C--->  
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="image_shu/statistics-03.jpg">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <!---
              <span class="content-date">A</span>--->
      
              <div class="content-title">策略與事件研究報告</div>
      
              <div class="content-text">在基本面的基礎上，搭配每週大戶動態及技術面型態，看出短期具有催化劑的績優股！
              </div>
              
          </div>
        </div>
       <!---swiper item D--->  
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="image_shu/analysis-04.jpg">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <!---
              <span class="content-date">A</span>--->
      
              <div class="content-title">第一手產業研究報告</div>
      
              <div class="content-text">每個月從熱門產業趨勢中，發掘營運具基本面及長尾性的績優股。
              </div>
              
          </div>
        </div>
        



    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>
        
        <div class="col-12 p-0">
            <h6 class="p-0 m-0"><br><br><br></h6>
        </div>
    </div>
          <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
      var swiper = new Swiper('.myswiper', {
          spaceBetween: 30,
          effect: 'fade',
          loop: false,
          mousewheel: {
              invert: false,
          },
          // autoHeight: true,
          pagination: {
          el: '.swiper-pagination',
              clickable: true,
          },
          autoplay:{
              delay: 3000,
              disableOnInteraction: false,
          }
      });
  </script>
    

    
    <!---方案
    <div class="col-12 p-0" id="bg">
        <div class="container">
            <h6><br><br></h6>
            <h4 class="text-light"><b><i>從入門到進階，不再成為股市中的待宰肥羊，由投資威秀 蘇威元證期雙分析師帶你檢視投資戰略
                <br>
                &emsp;掌握買賣時機，讓你挖出價值被低估的黑馬成長股，「股利」、「價差」兩頭賺！</i></b></h4>
            <hr style="border-width:2px; border-color: #fff;">
            <br>
            <div class="card-deck">
                <div class="card text-light " style="border-width: 2px; border-color: #fff; ">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>盤勢解析與個股推薦</b></h5>
                        <h6 class="card-subtitle mb-2 text-center">〈每個交易日〉</h6>
                        <p class="card-text">針對大盤多空分析及熱門個股與黑馬個股行深度掃描，
                                提供交易策略教學與支撐壓力點位。</p>
                           
                    </div>
                </div>
                <div class="card text-light" style="border-width: 2px; border-color: #fff; ">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>第一手產業研究報告</b></h5>
                        <h6 class="card-subtitle mb-2 text-center">〈每週一篇〉</h6>
                        <p class="card-text">每個月從熱門產業趨勢中，發掘營運具有基本面以及爆發性的績優股。</p>
                           
                    </div>
                </div>
                <div class="card text-light " style="border-width: 2px; border-color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>月營收績優股</b></h5>
                        <h6 class="card-subtitle mb-2 text-center">〈每月一 ~ 二篇〉</h6>
                        <p class="card-text">公司派時常在法說會發表重要言論，但資訊過於繁雜，威元老師直接整理關鍵內容，並統整出當月營收良好的績優股。</p>
                           
                    </div>
                </div>
                <div class="card text-light " style="border-width: 2px; border-color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b>獨家技術教學</b></h5>
                        <h6 class="card-subtitle mb-2 text-center">〈每月一 ~ 二篇〉</h6>
                        <p class="card-text">協助投資人獨立判斷進、出場時間，會有案例說明，當持股出現同樣跡象就可以作為應用。</p>
                           
                    </div>
                </div>
    
            </div>
            <h6 class="m-0"><br><br><br></h6>
        </div>
    </div>--->
        </div>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
    <script>
        VANTA.NET('#bg')
    </script>
    <script>
            VANTA.NET({
                el: "#bg",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                maxDistance: 25.00,
                points: 20,
                scale: 1.00,
                scaleMobile: 2.00,
                size: 1,
                spacing: 30.00,
                color: 0x35689b,
                backgroundColor: 0x010f18
            })
    </script>
    
    
    <!---scription--->
    <div id="scription"></div>
    <!---dividing line--->
    <div class="col-12" style="background-color: #2e2e2e" id="subscription">
        <h2 class="text-center pt-3 pb-3 m-0 text-light">訂閱方案</h2>
    </div>
        
    <div class="col-12" style="background-image:url('image_shu/bg-image-sup.png');background-repeat:no-repeat; background-size: cover; background-position:center ">
    
        <!---<h4>訂閱專區</h4>--->
        <h4><br></h4>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="card my-2" style="border:none; border-radius:30px;">
                        <div class="card-header">
                            <h3 class="text-center"><b>方案價格</b></h3>
                        </div>
                        <div class="card-body text-center">
                            <h1><b>NT$18000/<b style="color:#FF6100">年</b></b></h1>
                        </div>
                        <a href="signup.php">
                            <div class="card-footer text-light text-center" style="background-color:#3e4059; border-radius:0px 0px 30px 30px">
                                <h4>立即購買</h4>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                <div class="col-12 col-md-4">
                    <div class="card my-2" style="border:none; border-radius:30px;">
                        <div class="card-header">
                            <h3 class="text-center"><b>早鳥優惠！</b></h3>
                        </div>
                        <div class="card-body text-center">
                            <h1><b>NT$16000/<b style="color:#FF6100">年</b></b></h1>
                        </div>
                        <a href="signup.php">
                            <div class="card-footer text-light text-center" style="background-color:#3e4059; border-radius:0px 0px 30px 30px">
                                <h4>立即購買</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <h6 class="m-0"><br><br><br></h6>
        </div>
    </div>
    
    <!---another--->
    <div class="col-12" style="background-image:url('image_shu/earth02.png') ; background-repeat:no-repeat; background-size: cover; background-position:center">
        <div class="row justify-content-center text-light">
            <div class="col-12 col-md-4">
                <div class="container">
                    <h6><br><br><br></h6>
                    <h2>
                        <b>
                            <i>
                            台版智能診股黑科技能夠揭露投資買點、空點，輕鬆操作，精準預測，引導您 <big>稱霸股市！</big>
                            </i>
                        </b>
                    </h2>
                    <hr style="border-width: 2px;">
                    <h5><i>強大的分析能力</i></h5>
                    <h6>
                        利用人工智能和大數據分析技術，融合了大戶思想，從歷史價格、財務報表、新聞事件等多個角度揭示潛在的投資機會。而且多、空都能操作!獲利方式更多元
                    </h6>
                    <br>
                    <h5><i>精準的買點預測</i></h5>
                    <h6>
                        通過複雜的算法和模型，它能夠識別股票價格的趨勢，並以直觀的方式呈現買點預測。無需專業知識，即可掌握投資時機。
                    </h6>
                    <br>
                    <h5><i>自動學習和優化</i></h5>
                    <h6>智能診股黑科技不斷學習和優化自身，您無需繁瑣的設置，系統會自動適應市場變化，確保您在市場上能穩健的獲利。
                    </h6>
                    <br>
                    <h5>提供支援和指引</h5>
                    <h6>
                        不論您是新手投資者還是有經驗的交易者，它能夠根據您的投資偏好和目標，提供直觀的投資建議，讓您更自信地在市場中行動。
                    </h6>
                        
                    <h6><br></h6>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">

            </div>
        </div>
    </div>
    

    <!---footer--->
    <div class="footer" style="background-color:#000">
        <div class="col-12">
            <ul style="display:flex; list-style:none; paddig:5px;justify-content:center">
                <li class="p-4"><a class="text-light" href="https://line.me/ti/p/@u178" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-line" viewBox="0 0 16 16">
                        <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z"/>
                    </svg></a>
                </li>
                <li class="p-4"><a class="text-light" href="https://t.me/s/u178178" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg></a>
                </li>
                <li class="p-4"><a class="text-light" href="https://www.youtube.com/@invest_weishow" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                    </svg></a></li>
                <li class="p-4"><a class="text-light" href="https://www.facebook.com/NICK58888" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    </a></li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <h5 class="text-center text-light">啟發證券投資顧問股份有限公司</h5>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="text-light text-center">台北市中正區忠孝西路一段100號9樓</h5>
            </div>
            <div class="col-12 col-md-3">
                <h5 class="text-center text-light">(109)金管投顧新字第014號</h5>
            </div>
        </div>
        <div class="col-12" >
            <hr style="border-color:#fff; border-width:2px;">
        </div>
        
        <div class="col-12 m-0 d-flex justify-content-center align-items-center" style="background-color:#000; height: 50px">
            <h5 class="text-center text-light m-0">啟發證券版權所有<i>Copyright © 2023</i></h5>
        </div>
    </div>
</body>
</html>