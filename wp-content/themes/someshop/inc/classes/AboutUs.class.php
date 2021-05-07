<?php

class AboutUs {

  function about_company($data){
    ?>
    <section class="about-section">
      <h3><?php echo $data["company_title"] ?></h3>
      <div class="about-img"><img src="<?php echo $data["company_image"]["sizes"]["medium_large"] ?>" alt="<?php echo $data["company_image"]["name"] ?>"></div>
      <p><?php echo $data["company_text"] ?></p>
    </section>
    <?php
  }

  function about_product($data){
    ?>
    <section class="about-section">
      <p class="text-about"><?php echo $data["product_before_text"] ?></p>
      <div class="row">
        <?php foreach ($data["product_gallery"] as $key) : ?>
          <div class="col-lg-2 gallery-item">
            <img src="<?php echo ($key["sizes"]["thumbnail"]); ?>" alt="<?php echo ($key["name"]); ?>">
          </div>
        <?php endforeach; ?>

      </div>
      <p class="text-about"><?php echo $data["product_after_text"] ?></p>
    </section>
    <?php
  }

  function product_info($data){
    ?>
    <section class="about-section">
      <h3><?php echo $data["info_title"] ?></h3>
        <?php foreach ($data["info_table"] as $key) : ?>
        <?php $i += 1;
         if($i % 2 == 0) : ?>
          <div class="d-flex table-odd">
            <img src="<?php echo ($key["product_info_img"]["sizes"]["medium"]); ?>" alt="<?php echo ($key["name"]); ?>">
            <p><?php echo ($key["product_info_text"]); ?></p>
          </div>
          <?php else : ?>
            <div class="d-flex table-even">
            <img src="<?php echo ($key["product_info_img"]["sizes"]["medium"]); ?>" alt="<?php echo ($key["name"]); ?>">
            <p><?php echo ($key["product_info_text"]); ?></p>
          </div>
          <?php endif; ?>
          <?php endforeach; ?>
      <div class="about-img"><img src="<?php echo $data["info_img"]["sizes"]["medium_large"] ?>" alt="<?php echo $data["info_img"]["name"] ?>"></div>
      <p class="text-about"><?php echo $data["info_text"] ?></p>
    </section>
  <?php
  }
}
