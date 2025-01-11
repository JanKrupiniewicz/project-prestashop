<?php
/* Smarty version 3.1.47, created on 2024-12-01 18:17:14
  from '/var/www/html/themes/child_classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_674c9a1a7985a9_17509957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b8f15a4097c905a770e7ce7929d15eb9fca3bc' => 
    array (
      0 => '/var/www/html/themes/child_classic/templates/_partials/header.tpl',
      1 => 1733056609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674c9a1a7985a9_17509957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1108863070674c9a1a796264_96375777', 'header_banner');
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1036292903674c9a1a796933_69667901', 'header_nav');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1874522797674c9a1a796e71_40426842', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_1108863070674c9a1a796264_96375777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_1108863070674c9a1a796264_96375777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_1036292903674c9a1a796933_69667901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1036292903674c9a1a796933_69667901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <header>
        <!-- Górna sekcja -->
        <div class="header-top2">
          <div class="header-info">
            <div class="info-item">
                <i class="fa-solid fa-cart-shopping"></i>      
              <!--<img src="icon-shipping.png" alt="Shipping" />-->
              <b>Zamów do 14.00 - wysyłamy tego samego dnia</b>
            </div>
            <div class="info-item">
                <i class="fa-solid fa-truck"></i>
              <!--<img src="icon-free-delivery.png" alt="Free Delivery" />-->
              <b>Darmowa dostawa przy zamówieniach powyżej 100 zł</b>
            </div>
            <div class="info-item">
              <i class="fa-solid fa-check"></i>
              <!--<img src="icon-trust.png" alt="Trust" />-->
              <b>Sprawdzony sklep - działamy od 2015 roku</b>
            </div>
          </div>
        </div>
      
        <!-- Dolna sekcja -->
        <div class="header-bottom">
            <div class="header-button">
                <a href="#" class="sitemap-link">Mapa strony</a>
            </div>
          <div class="header-search">
            <div class="header-top-right col-md-10 col-sm-12 position-static">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

            </div>
          </div>
          <div class="header-contact">
            <div class="contact-info">
                <a href="tel:+48555555555">
                  <i class="fa-solid fa-phone"></i>
                  tel: +48 585 546 633
                </a>
              </span>
              <span>
                <a href="mailto:biuro@toys4boys.pl">
                  <i class="fa-solid fa-envelope"></i>
                  e-mail: biuro@toys4boys.pl
                </a>
              </span>

            </div>
            <div class="social-icons">
              
              <a href="https://www.facebook.com/toys4boyspl"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.tiktok.com/@toys4boys_pl"><i class="fa-brands fa-tiktok"></i></i></a>
              <a href="https://www.instagram.com/toys4boys.pl/"><i class="fa-brands fa-instagram"></i></i></a>
              <a href="https://www.youtube.com/user/toys4boysPL"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </header>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_1874522797674c9a1a796e71_40426842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1874522797674c9a1a796e71_40426842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="hook-container">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
