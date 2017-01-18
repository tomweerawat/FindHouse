<!-- Latest property -->
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
                  <img src="<?= $r['img1']; ?>" width="200px" alt="img">
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
<!-- / Latest property -->
