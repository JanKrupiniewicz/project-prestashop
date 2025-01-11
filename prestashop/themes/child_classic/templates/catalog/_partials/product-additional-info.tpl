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

<div class="inpost-info">
  <button
    class="btn btn-primary inpost-button"
    data-button-action="add-to-cart"
    type="submit"
    {if !$product.add_to_cart_url}
      disabled
    {/if}
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
