<?php
$count = 6;
?>
<!doctype html>
<html>
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
<!---ajax--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<!---AOS.js
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>--->    
<title>card-load</title>
</head>
<body>
    <div class="title text-center">Card Loading</div>
  <div class="container">
      <?php /*-------------*/ ?>
      
      <?php
      
      for($i=0; $i<$count; $i++){
echo'
    <div class="card">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <div class="content">
        <h2>
        ';
          if($i<9){
              echo '0',$i+1;
          }else{
              echo $i+1;
          }
          echo '</h2>
        <h3>Post Title</h3>
        <p>Some quick example text to build on the card title and make up the bulk of the cards content.</p>
       <a href="#">Read More</a>
      </div>
    </div>
';
          
      }
      ?>
    
  
      
  </div>
    
    <?php /*-------*/ ?>
    <div class="row justify-content-center" id="load-more">
        <button type="button" class="show-more-button" id="<?php echo $count; ?>">載入更多</button>
    </div>
    
    <div class="container" id="load-here"></div>

</body>
</html>


<script>
    $(document).on("click", ".show-more-button", function(){
        //num = card的數量，放在.show-more-button 的 id 裡面
        var num = $(".show-more-button").attr("id");
        
        // 呈現 .show-more-button 變成「加載中...」的畫面
        $('show-more-button').html("加載中...");
        
        $.ajax({
            url: "load-card.php",
            method: "POST",
            data: {
                "num": num,
            },
            dataType: "text",
            success: function(data){
                if(data != ""){
                    $("#load-more").remove();
                    $("#load-here").append(data);
                }else{
                    $(".show-more-button").remove();
                    $("#load-more").html("<h5 class='text-light text-center'><br><br><br>沒有了</h5>");
                }
            },
        });
    })
</script>