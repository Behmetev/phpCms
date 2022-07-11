<!--banner-starts-->
<div class="bnr" id="home">
   <div id="top" class="callbacks_container">
      <ul class="rslides" id="slider4">
         <li>
            <img src="images/bnr-1.jpg" alt="" />
         </li>
         <li>
            <img src="images/bnr-2.jpg" alt="" />
         </li>
         <li>
            <img src="images/bnr-3.jpg" alt="" />
         </li>
      </ul>
   </div>
   <div class="clearfix"> </div>
</div>
<!--banner-ends-->

<!--about-starts-->
<? if ($brands) { ?>
   <div class="about">
      <div class="container">
         <div class="about-top grid-1">
            <? foreach ($brands as $brand) { ?>
               <div class="col-md-4 about-left">
                  <figure class="effect-bubba">
                     <img class="img-responsive" src="images/<?= $brand->img; ?>" alt="<?= $brand->alt; ?>" />
                     <figcaption>
                        <h2><?= $brand->title; ?></h2>
                        <p><?= $brand->description; ?></p>
                     </figcaption>
                  </figure>
               </div>
            <? } ?>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
<? } ?>
<!--about-end-->

<!--product-starts-->
<? if ($hits) { ?>
   <? $curr = \phpCms\App::$app->getProperty('currency'); ?>
   <div class="product">
      <div class="container">
         <div class="product-top">
            <div class="product-one">
               <? foreach ($hits as $hit) { ?>
                  <div class="col-md-3 product-left">
                     <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?= $hit->alias; ?>" class="mask">
                           <img class="img-responsive zoom-img" src="images/<?= $hit->img; ?>" alt="" />
                        </a>
                        <div class="product-bottom">
                           <h3><?= $hit->title; ?></h3>
                           <p><?/*= $hit->content; */ ?></p>
                           <h4>
                              <a class="add-to-card-link" href="cart/add?id=<?= $hit->id; ?>">
                                 <i></i>
                              </a>
                              <span class="item_price">
                                 <?= $curr['symbol_left']; ?>
                                 <?= $hit->price * $curr['value']; ?>
                                 <?= $curr['symbol_right']; ?>
                              </span>
                              <?php if ($hit->old_price) { ?>
                                 <small>
                                    <?= $curr['symbol_left']; ?>
                                    <del>
                                       <?= $hit->old_price * $curr['value']; ?>
                                    </del>
                                    <?= $curr['symbol_right']; ?>
                                 </small>
                              <? } ?>
                           </h4>
                        </div>
                        <?/*
                        <div class="srch">
                           <span><?= $hit->img; ?></span>
                        </div>
                        */ ?>
                     </div>
                  </div>
               <? } ?>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
<? } ?>
<!--product-end-->