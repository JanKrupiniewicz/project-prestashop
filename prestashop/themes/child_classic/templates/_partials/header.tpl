{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}




{block name='header_nav'}
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
          {hook h='displaySearch'}
        </div>
      </div>
      <div class="header-contact">
        <div class="contact-info">
          <a href="tel:+48555555555">
            <i class="fa-solid fa-phone" style="color:white"></i>
            tel: +48 585 546 633
          </a>
          </span>
          <span>
            <a href="mailto:biuro@toys4boys.pl">
              <i class="fa-solid fa-envelope" style="color:white"></i>
              e-mail: biuro@toys4boys.pl
            </a>
          </span>

        </div>
        <div class="social-icons">

          <a href="https://www.facebook.com/toys4boyspl"><i class="fa-brands fa-facebook-f"
              style=" color: white;"></i></a>
          <a href="https://www.tiktok.com/@toys4boys_pl"><i class="fa-brands fa-tiktok"
              style=" color: white;"></i></i></a>
          <a href="https://www.instagram.com/toys4boys.pl/"><i class="fa-brands fa-instagram"
              style=" color: white;"></i></i></a>
          <a href="https://www.youtube.com/user/toys4boysPL"><i class="fa-brands fa-youtube"
              style=" color: white;"></i></a>
        </div>
      </div>
    </div>
  </header>
{/block}


{block name='header_top'}
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        <div class="hook-container">
          {hook h='displayTop'}
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
  {hook h='displayNavFullWidth'}
{/block}