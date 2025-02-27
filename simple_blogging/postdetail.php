<?php include_once "views/top.php"; ?>
    <?php include_once "views/header.php"; 
    
    if(isset($_GET['pid'])){
        $pid = $_GET("pid");    
    }
    ?>

    <div class="container my-3">
        <div class="col-md-8 offset-md-2">
            <?php
             $result = getSinglePost($pid);
              foreach($result as $data) {
                echo '<div class="card-header ">'.$data["title"].'<span class="float-right">'.$data["created_at"].'</span></div>';  
                echo '<img src="assets/imgs/'.$data["imglink"].'" alt="" class="img-fluid">';   
                echo '<div class="card-block">'.$data["content"].'</div>';   
                echo '<div class="card-footer">'.$data["writer"].'</div>';      
              }
            ?>
            <div class="card-footer"></div>
        </div>     
    </div>

    <?php include_once "views/footer.php" ?>
    <?php include_once "views/base.php" ?>