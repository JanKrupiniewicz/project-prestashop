<?php
/* Smarty version 3.1.47, created on 2024-12-10 23:19:25
  from '/var/www/html/themes/child_classic/templates/catalog/_partials/productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6758be6dc81ab4_56775589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18505768938e7eb8fb1482037bbe749926bbbdf' => 
    array (
      0 => '/var/www/html/themes/child_classic/templates/catalog/_partials/productlist.tpl',
      1 => 1733859767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6758be6dc81ab4_56775589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="https://unpkg.com/swiper@10.0.0/swiper-bundle.min.css">
<?php echo '<script'; ?>
 src="https://unpkg.com/swiper@10.0.0/swiper-bundle.min.js"><?php echo '</script'; ?>
>

<div class="product-slider">
  <div class="swiper-container" id="swiper3">
    <div class="swiper-wrapper">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="swiper-slide">
          <div class="product-item">
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
          </div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<?php echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', function() {
    // Slider 1
    var swiper1 = new Swiper('#swiper1', {
      slidesPerView: 6, // Wyświetlaj 6 zdjęć na raz
      spaceBetween: 10, // Przerwa między zdjęciami
      loop: true, // Pętla - przechodzenie z końca na początek
      navigation: { // Przyciski nawigacji
        nextEl: '#swiper1 .swiper-button-next',
        prevEl: '#swiper1 .swiper-button-prev'
      },
      slidesPerGroup: 6 // Zmieniamy skok o 6 produktów na raz
    });

    // Slider 2
    var swiper2 = new Swiper('#swiper2', {
      slidesPerView: 6, // Wyświetlaj 6 zdjęć na raz
      spaceBetween: 10, // Przerwa między zdjęciami
      loop: true, // Pętla - przechodzenie z końca na początek
      navigation: { // Przyciski nawigacji
        nextEl: '#swiper2 .swiper-button-next',
        prevEl: '#swiper2 .swiper-button-prev'
      },
      slidesPerGroup: 6 // Zmieniamy skok o 6 produktów na raz
    });

    // Slider 3
    var swiper3 = new Swiper('#swiper3', {
      slidesPerView: 6, // Wyświetlaj 6 zdjęć na raz
      spaceBetween: 10, // Przerwa między zdjęciami
      loop: true, // Pętla - przechodzenie z końca na początek
      navigation: { // Przyciski nawigacji
        nextEl: '#swiper3 .swiper-button-next',
        prevEl: '#swiper3 .swiper-button-prev'
      },
      slidesPerGroup: 6 // Zmieniamy skok o 6 produktów na raz
    });
  });
<?php echo '</script'; ?>
>

<style>
  /* Styl kontenera slidera */
  .product-slider {
    width: 100%;
    overflow: hidden;
    position: relative;
  }

  /* Styl dla kontenera Swiper */
  .swiper-container {
    width: 100%;
    height: auto;
  }

  /* Styl przycisków nawigacyjnych */
  .swiper-button-next,
  .swiper-button-prev {
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    z-index: 10;
  }

  /* Styl przycisków nawigacyjnych po najechaniu */
  .swiper-button-next:hover,
  .swiper-button-prev:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
</style><?php }
}
