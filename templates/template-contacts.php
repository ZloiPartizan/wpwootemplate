<?php 
/* Template name: Contacs */
get_header();
?>

<section class="breadcrumb">
        <div class="container">
        <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo home_url('/')?>">Главная</a></li>
          <li>
          <div class="breadcrumb-arrow">
            <img src="<?php echo get_template_directory_uri ()?>/assets/image/icons/bredcrumb-arrow.svg" alt="">
          </div>
          </li>
          <li>Контакты</li>
      </ul>
    </div>
    </section>

    <header class="contact__header">
        <div class="container">
          <div class="heading">
            <div class="decorate__ellipse"></div>
            <div class="title">
              <h2><?= CFS()->get('contacts_title')?></h2>
            </div>
            <div class="description">
              <p><?= CFS()->get('contacts_subtitle')?></p>
            </div>
            
        <div class="contacts-header__rows">
        <?php
              $contacts_block = CFS() -> get('contacts_block');
              foreach ($contacts_block as $row6){
                ?>
            <div class="contact">
                <div class="contact__img">
                    <img src="  <?= $row6['contacts_icon']?>" alt="">
                </div>
                <div class="contact__text">
                <div class="contact__description">
                <?= $row6['contacts_desc']?>
                </div>
                <div class="contact__connection"> 
                
                </div>
                </div>
            </div>
            <?php
              }
              ?>        
        </div>
      </div>
    </header>

<?php

get_footer();
