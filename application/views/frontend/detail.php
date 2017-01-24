  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- Start properties content body -->
            <?php
                $img1=$rs['img1'];
                $img2=$rs['img2'];
                $img3=$rs['img3'];
              ?>
            <div class="aa-properties-details">
             <div class="aa-properties-details-img">
               <img src="<?php echo base_url().$img1 ?>" alt="img">
               <img src="<?php echo base_url().$img2 ?>" alt="img">
               <img src="<?php echo base_url().$img3 ?>" alt="img">
             </div>
             <div class="aa-properties-info">
               <h2><?php echo $rs['propertyname'] ?></h2>
               <span class="aa-price"><?php echo $rs['price'] ?></span>
               <p><?php echo $rs['detail'] ?></p>

               <h4>Propery Features</h4>
               <ul>
                 <li>4 Bedroom</li>
                 <li>3 Baths</li>
                 <li>Kitchen</li>
                 <li>Air Condition</li>
                 <li>Belcony</li>
                 <li>Gym</li>
                 <li>Garden</li>
                 <li>CCTV</li>
                 <li>Children Play Ground</li>
                 <li>Comunity Center</li>
                 <li>Security System</li>
               </ul>
               <h4>Property Video</h4>
               <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe>
               <h4>Property Map</h4>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>

             <!-- Properties social share -->
             <div class="aa-properties-social">
               <ul>
                 <li>Share</li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
               </ul>
             </div>
             <!-- Nearby properties -->
             <div class="aa-nearby-properties">
               <div class="aa-title">
                 <h2>Nearby Properties</h2>
                 <span></span>
               </div>
               <div class="aa-nearby-properties-area">
                 <div class="row">
                   <div class="col-md-6">
                     <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="#">
                          <img alt="img" src="img/item/1.jpg">
                        </a>
                        <div class="aa-tag for-sale">
                          For Sale
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="#">Appartment Title</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $35000
                            </span>
                            <a class="aa-secondary-btn" href="#">View Details</a>
                          </div>
                        </div>
                      </article>
                   </div>
                   <div class="col-md-6">
                     <article class="aa-properties-item">
                      <a class="aa-properties-item-img" href="#">
                        <img alt="img" src="img/item/2.jpg">
                      </a>
                      <div class="aa-tag for-sale">
                        For Sale
                      </div>
                      <div class="aa-properties-item-content">
                        <div class="aa-properties-info">
                          <span>5 Rooms</span>
                          <span>2 Beds</span>
                          <span>3 Baths</span>
                          <span>1100 SQ FT</span>
                        </div>
                        <div class="aa-properties-about">
                          <h3><a href="#">Appartment Title</a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>
                        </div>
                        <div class="aa-properties-detial">
                          <span class="aa-price">
                            $35000
                          </span>
                          <a class="aa-secondary-btn" href="#">View Details</a>
                        </div>
                      </div>
                    </article>
                   </div>
                 </div>
               </div>

             </div>

            </div>
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                   <option selected="" value="0">Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-filter-search">
                  <span>AREA (SQ)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper" class="example-val">100.00</span>
                  <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                </div>
                <div class="aa-single-filter-search">
                  <span>PRICE ($)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower2" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper2" class="example-val">100.00</span>
                  <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>
                </div>
                <div class="aa-single-advance-search">
                  <input type="submit" value="Search" class="aa-search-btn">
                </div>
              </form>
            </div>
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Populer Properties</h3>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">This is Title</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <span>$65000</span>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->
