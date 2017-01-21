<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>asset/front/favicon.ico">

    <title>Find House | <?php $data['title'] ?></title>
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>asset/front/css/theme.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>asset/front/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Find House</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">หน้าหลัก</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ขาย <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวเฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ให้เช่า <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">บ้านเดี่ยว</a></li>
                <li><a href="#">ทาวเฮ้าส์</a></li>
                <li><a href="#">คอนโดมิเนียม</a></li>
                <li><a href="#">อพาตเมนต์</a></li>
                <li><a href="#">ที่ดิน</a></li>
              </ul>
            </li>
            <li><a href="#about">บทความ</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- LOGIN -->
            <li><a data-toggle="modal" data-target="#login">เข้าสู่ระบบ</a></li>
            <!-- LOGIN -->
            <li><a data-toggle="modal" data-target="#register">สมัครสมาชิก</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">เข้าสู่ระบบ</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="register" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">สมัครสมาชิก</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- CONTENT -->
<section id="aa-latest-property">
  <div class="container">
    <div class="aa-latest-property-area">
      <div class="aa-title">
        <h2>Latest Properties</h2>
        <span></span>
      </div>
      <div class="row">
      <?php
          foreach($rs as $r){
              $status=$r['proptype'];
              if($status == "ขาย"){
                $status_label = "sale";
                $status_desc = "ขาย";
              }else{
                $status_label = "rent";
                $status_desc = "ให้เช่า";
              }
            ?>

            <div class="col-md-3">

              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="<?= $r['img1'] ?>" width="200px" alt="img">
                </a>
                <div class="aa-tag for-<?= $status_label ?>">
                  <?= $status_desc ?>
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span><?= $r['broom'] ?> Bedroom</span>
                    <span><?= $r['rroom'] ?> restroom</span>
                    <span><?= $r['kroom'] ?> kitchen</span>
                    <span><?= $r['lroom'] ?> livingroom</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#"><?= $r['propertyname']; ?></a></h3>
                    <p><?= $r['detail']; ?></p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      <?= $price=$r['price'];
                          number_format($price,2)
                      ?>
                    </span>
                    <a href="#" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
              </article>
            </div>
          <?php } ?>
      </div>
    </div>
  </div>

</section>
<?php echo $pagination ?>
<!-- CONTENT -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>asset/front/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>asset/front/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>asset/front/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url() ?>asset/front/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
