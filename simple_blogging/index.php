    <?php include_once "views/top.php"; ?>
    <?php include_once "views/header.php";

    $start = 0;
    if(isset($_GET['start'])) {
      $start = $_GET['start'];
    }
      $rows = getPostCount();
    ?>

    <div class="container my-3">
      <div class="row">
        <?php include_once "views/sidebar.php"; ?>
        <section class="col-md-9">
      <div class="row">
            <?php
              $result = "";
              if(checkSession("username")) {
                $result = getAllPost(2, $start);

              }else {
                $result = getAllPost(1, $start);
              }
              foreach($result as $post) {
                $pid = $post["id"];
                echo '<div class="col-md-6 mb-3">
                        <dic class="card">
                            <div class="card-block">
                              <h1>'.$post["title"].'</h1>
                                <p>'.substr($post["content"],0,100).'</p>
                                <a href="postdetail.php?pid='.$pid.'" class="btn btn-info btn-sm float-right">Detail</a>
                            </div>
                        </div>
                    </div>';
              }
            ?>
        </div>
      </section>
      </div>   
    </div>

    <div class="container">
      <div class="col-md-4 offset-md-4">
        <nav arial-label="Page navigation example">
          <ul class="pagination">
            <?php
              $t = 0;
              for($i=0;$i<$rows;$i+=1) {
                $t++;
                echo '<li class="page-item"><a href="" class="page-link" href="index.php?start='.$i.'">'.$t.'</a></li>';
              }
            ?>
          </ul>
        </nav>
      </div>
    </div>

    <?php include_once "views/footer.php" ?>
    <?php include_once "views/base.php" ?>