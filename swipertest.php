<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 引入 Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    
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
                height: 400px;
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
                margin-top: -80px;
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
            .swiper-slide .swiper-slide-image{
                width: 95%;
            }
            .swiper-slide .swiper-slide-content{
                padding: 0;
            }
            .swiper-slide .content-button{
                width: 100%;
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
            background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
            box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
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
            background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
            border-radius: 20px;
            opacity: 0.8;
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
            background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
            padding: 15px 35px;
            border-radius: 50px;
            color: #fff;
            box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
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
            background: #fd3838;
            height: 30px;
            box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
        }

    </style>

</head>

<body style="background: red">

    <h5><br><br><br></h5>
    <div class="container">
    
   <!-- Swiper -->
  <div class="myswiper">
      <!---swiper-wrap--->
    <div class="swiper-wrapper slide-wrap"> 
        <!---swiper item 01--->
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <span class="content-date">26 December 2019 01</span>
      
              <div class="content-title">Lorem Ipsum Dolor</div>
      
              <div class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
              <a href="#" class="content-button">READ MORE</a>
          </div>
        </div>
        
        
        
       <!---swiper item 02---> 
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <span class="content-date">26 December 2019 02</span>
      
              <div class="content-title">Lorem Ipsum Dolor</div>
      
              <div class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
              <a href="#" class="content-button">READ MORE</a>
          </div>
        </div>
        
        
       <!---swiper item 03--->  
        <div class="swiper-slide slider-item">
          <!---swiper-item-img--->
          <div class="swiper-slide-image">
              <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp">
          </div>
          <!---swiper-item-content-->
          <div class="swiper-slide-content">
              <span class="content-date">26 December 2019 03</span>
      
              <div class="content-title">Lorem Ipsum Dolor</div>
      
              <div class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
              <a href="#" class="content-button">READ MORE</a>
          </div>
        </div>
        

    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>
  
    
    
    
    
      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
      var swiper = new Swiper('.myswiper', {
          spaceBetween: 30,
          effect: 'fade',
          loop: true,
          mousewheel: {
              invert: false,
          },
          // autoHeight: true,
          pagination: {
          el: '.swiper-pagination',
              clickable: true,
          }
      });
  </script>
</body>

</html>
