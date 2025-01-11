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

<link rel="stylesheet" href="https://unpkg.com/swiper@10.0.0/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper@10.0.0/swiper-bundle.min.js"></script>

<div class="product-slider">
  <div class="swiper-container" id="swiper3">
    <div class="swiper-wrapper">
      {foreach from=$products item="product" key="position"}
        <div class="swiper-slide">
          <div class="product-item">
            {include file="catalog/_partials/miniatures/product.tpl" product=$product position=$position}
          </div>
        </div>
      {/foreach}
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div>

<script>
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
</script>

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
</style>