<?php
// load data
$output = '';
$num = $_POST["num"];
$count = $num + 6;


if($count <= 15){
for($i=$num; $i<$count; $i++){
    $output .='
    <div class="card">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <div class="content">
        <h2>
   '; 
    if($i<9){
        $output .= '0';
        $output .= $i+1;
    }else{
        $output .= $i+1;
    }
    $output .='
    </h2>
        <h3>Post Title</h3>
        <p>Some quick example text to build on the card title and make up the bulk of the cards content.</p>
       <a href="#">Read More</a>
      </div>
    </div>    
    ';
}

$output .= '
    <div class="row justify-content-center" id="load-more">
        <button type="button" class="show-more-button" id="'.$count.'">載入更多</button>
    </div>
    
';

echo $output;    
}


?>