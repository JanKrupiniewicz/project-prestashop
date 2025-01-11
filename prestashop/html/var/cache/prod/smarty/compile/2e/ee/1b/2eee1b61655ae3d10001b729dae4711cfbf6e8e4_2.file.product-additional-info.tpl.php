<?php
/* Smarty version 3.1.47, created on 2024-12-10 23:19:31
  from '/var/www/html/themes/child_classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6758be73a2e431_16315406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eee1b61655ae3d10001b729dae4711cfbf6e8e4' => 
    array (
      0 => '/var/www/html/themes/child_classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1733859767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6758be73a2e431_16315406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="inpost-info">
  <button
    class="btn btn-primary inpost-button"
    data-button-action="add-to-cart"
    type="submit"
    <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
      disabled
    <?php }?>
  >
    Dodaj do koszyka </i>InPost<span class="inpost-logo-text">Pay</span>
  </button>
  <div class="black-pink-inpost-text">
    Kupuj, śledź i odbieraj z apką InPost! <span class="inpost-more-info">Więcej</span>
  </div>
  <div class="green-container">
    <div class="green-icon-container">
      <i class="fa-solid fa-clock"></i>
    </div>
    <div>
      <p class="green-text-container">Zamów teraz!</p>
      <p class="green-text-container">U Ciebie już we wtorek!</p>
    </div>
  </div>
</div>

<div class="toys-for-boys-info-section">
  <div class="toys-for-boys-section">
    <div class="toys-for-boys-section-header">
      <h2>Dostawa</h2>
    </div>
    <p>Darmowa wysyłka od 2000 zł</p>
    <ul class="toys-for-boys-delivery-options">
      <li>
        toys4boys
      </li>
      <li>
        MyDelivery
      </li>
    </ul>
  </div>

  <div class="toys-for-boys-section">
    <div class="toys-for-boys-section-header">
      <h2>Metody płatności</h2>
    </div>
    <p>Płać wygodnie – tak, jak lubisz</p>
    <ul class="toys-for-boys-payment-options">
      <li>Przelew tradycyjny</li>
      <li>Płatność przy odbiorze</li>
    </ul>
  </div>

  <div class="toys-for-boys-section">
    <div class="toys-for-boys-section-header">
      <h2>Zwroty towaru</h2>
    </div>
    <p>Nietrafiony prezent? Nic straconego!</p>
    <p>
      Możesz odstąpić od umowy sprzedaży bez podania przyczyny w ciągu 14 dni kalendarzowych
      od dnia dostarczenia towaru. Do zachowania terminu wystarczy jedynie wysłanie oświadczenia
      przed upływem wspomnianych 14 dni.
    </p>
  </div>
</div>
<?php }
}
