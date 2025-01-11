<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__cb76fa809697dfa3226216fcf96d5ae6c8f05bd91dd08cde6929c00adc109c5c */
class __TwigTemplate_d2718f59279e5c0bd9de07770bad8838899fb2a7bd5331fba38f60d753b3d7b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Moduły • toys4boys</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '78c0cb787a653c88aa03c7e65a40ed74';
    var token_admin_orders = tokenAdminOrders = '7d56aeb90128c8a6fc0bcb1e63086779';
    var token_admin_customers = 'd5a95e1bf2b60fdad10209fffce5ee90';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '8df905ce6736298b9106ca60cb1d86d4';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '16d2b06e16909989cf7dea352bb430c9';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin123/index.php/improve/modules/catalog/recommended?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ';
    var admin_notification_get_link = '/admin123/index.php/common/notifications?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ'";
        // line 42
        echo ";
    var admin_notification_push_link = adminNotificationPushLink = '/admin123/index.php/common/notifications/ack?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/admin123/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin123/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin123\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin123\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var ";
        // line 68
        echo "currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin123/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/admin123/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin123/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=3.2.0\"></script";
        // line 87
        echo ">
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin123/index.php/common/notifications?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/admin123\\/index.php?controller=AdminGamification&token=c11bf2afcb7741f9581441425adece6a\";
            var current_id_tab = 45;
        </script>

";
        // line 111
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmodulesmanage\"
  data-base-url=\"/admin123/index.php\"  data-token=\"9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin123/index.php?controller=AdminDashboard&amp;token=1a79fcdab8a5fece03ef4cc8eaee6a3b\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin123/index.php/sell/catalog/categories/new?token=27d44d9cca034e25580044485f3a5517\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin123/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b1d779b23bd6485e9a1e56cc6c910632\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin123/index.php/sell/catalog/products/new?token=27d44d9cca034e25580044485f3a5517\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin123/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f0b8d7d64bfad5afe13af89f04beaa44\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link active\"
         href=\"https://localhost/a";
        // line 149
        echo "dmin123/index.php/improve/modules/manage?token=27d44d9cca034e25580044485f3a5517\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin123/index.php?controller=AdminOrders&amp;token=7d56aeb90128c8a6fc0bcb1e63086779\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"2\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"https://localhost/admin123/index.php?controller=AdminQuickAccesses&token=88f17f330cc919ab7dc4c050d0475390\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Moduły - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Usuń z Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin123/index.php?controller=AdminQuickAccesses&token=88f17f330cc919ab7dc4c050d0475390\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin123/index.php?controller=AdminSearch&amp;token=bc4a754cfb7695da06581504975669fa\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
     ";
        // line 189
        echo " <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">searc";
        // line 203
        echo "h</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Zobacz sklep</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
 ";
        // line 264
        echo "             data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://localhost/admin123/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=167638caf0a741ae381fdfd042a05a5c\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class";
        // line 311
        echo "=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie Bartosz</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin123/index.php/configure/advanced/employees/1/edit?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"ht";
        // line 346
        echo "tps://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/admin123/index.php?controller=AdminLogin&amp;logout=1&amp;token=5ed8be94841cadf4f10edca25d7354d2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin123/index.php/configure/advanced/employees/toggle-navigation?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/admin123/index.php?controller=AdminDashboard&amp;token=1a79fcdab8a5fece03ef4cc8eaee6a3b\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
           ";
        // line 388
        echo "                                           
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin123/index.php/sell/orders/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin123/index.php/sell/orders/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin123/index.php/sell/orders/invoices/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                        ";
        // line 419
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin123/index.php/sell/orders/credit-slips/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin123/index.php/sell/orders/delivery-slips/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminCarts&amp;token=167638caf0a741ae381fdfd042a05a5c\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin123/index.php/sell/catalog/products?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <s";
        // line 450
        echo "pan>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin123/index.php/sell/catalog/products?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin123/index.php/sell/catalog/categories?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin123/index.php/sell/catalog/monitoring/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                ";
        // line 482
        echo "                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminAttributesGroups&amp;token=6f11f1afcb90203b96c55cd3336053f1\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin123/index.php/sell/catalog/brands/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin123/index.php/sell/attachments/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminCartRules&amp;token=b1d779b23bd6485e9a1e56cc6c910632\" class=\"link\">";
        // line 510
        echo " Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin123/index.php/sell/stocks/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin123/index.php/sell/customers/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin123/index.php/sell/customers/?_token=9ZG";
        // line 543
        echo "uWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin123/index.php/sell/addresses/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/admin123/index.php?controller=AdminCustomerThreads&amp;token=8df905ce6736298b9106ca60cb1d86d4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-s";
        // line 575
        echo "ubmenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminCustomerThreads&amp;token=8df905ce6736298b9106ca60cb1d86d4\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin123/index.php/sell/customer-service/order-messages/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminReturn&amp;token=966239789f563f1ad5df301bff4dc6bc\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin123/index.php/modules/metrics/legacy/stats?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
         ";
        // line 606
        echo "             Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin123/index.php/modules/metrics/legacy/stats?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin123/index.php/modules/metrics?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                       ";
        // line 643
        echo "               
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin123/index.php/modules/addons/modules/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin123/index.php/modules/addons/modules/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin123/index.php/improve/modules/manage?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                    ";
        // line 672
        echo "                                                                                                                                      </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin123/index.php/modules/addons/themes/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin123/index.php/modules/addons/themes/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin123/index.php/improve/design/themes/?_token";
        // line 701
        echo "=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin123/index.php/improve/design/mail_theme/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin123/index.php/improve/design/cms-pages/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin123/index.php/improve/design/modules/positions/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-sub";
        // line 732
        echo "menu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminImages&amp;token=6490492200266a8932a854034f751ff3\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin123/index.php/modules/link-widget/list?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/admin123/index.php?controller=AdminCarriers&amp;token=25de1cba2f35e89b90bffa711b1eb7b9\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                      ";
        // line 764
        echo "                                      
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminCarriers&amp;token=25de1cba2f35e89b90bffa711b1eb7b9\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin123/index.php/improve/shipping/preferences/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin123/index.php/improve/payment/payment_methods?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
           ";
        // line 795
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin123/index.php/improve/payment/payment_methods?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin123/index.php/improve/payment/preferences?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin123/index.php/improve/international/localization/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>";
        // line 826
        echo "
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin123/index.php/improve/international/localization/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin123/index.php/improve/international/zones/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin123/index.php/improve/international/taxes/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin123/index.php/improve/in";
        // line 856
        echo "ternational/translations/settings?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"147\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/admin123/index.php?controller=AdminPsfacebookModule&amp;token=87330ff43955599623fcc7fb6a7c588b\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-147\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminPsfacebookModule&amp;token=87330ff43955599623fcc7fb6a7c588b\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ";
        // line 888
        echo "  <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2c8d2dd55c122dbd550e19598d50c9d1\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin123/index.php/configure/shop/preferences/preferences?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a h";
        // line 924
        echo "ref=\"/admin123/index.php/configure/shop/preferences/preferences?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/order-preferences/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/product-preferences/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/customer-preferences/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 955
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin123/index.php/configure/shop/contacts/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin123/index.php/configure/shop/seo-urls/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminSearchConf&amp;token=c7c3688884ade7ec7f6393f1a42e5c25\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/admin123/index.php?controller=AdminGamification&amp;token=c11bf2afcb7741f9581441425adece6a\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
           ";
        // line 985
        echo "                             </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin123/index.php/configure/advanced/system-information/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin123/index.php/configure/advanced/system-information/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin123/index.php/configure/advanced/performance/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Wydajność
                ";
        // line 1014
        echo "                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin123/index.php/configure/advanced/administration/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin123/index.php/configure/advanced/emails/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin123/index.php/configure/advanced/import/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin123/index.php/configure/advanced/employees/?_tok";
        // line 1045
        echo "en=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin123/index.php/configure/advanced/sql-requests/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin123/index.php/configure/advanced/logs/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin123/index.php/configure/advanced/webservice-keys/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                 ";
        // line 1076
        echo "             <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin123/index.php/configure/advanced/feature-flags/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" class=\"link\"> Funkcje eksperymentalne
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">9%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:9.0909090909091%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wznów</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zakończ wprowadzanie</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Menedżer modułów</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin123/index.php/improve/modules/manage?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" aria-current=\"page\">Moduły</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduły          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"     ";
        // line 1136
        echo "             title=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Załaduj moduł
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Połącz z Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Połącz z Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin123/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Dpl/Pomoc?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ";
        // line 1167
        echo "                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/admin123/index.php/improve/modules/manage?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin123/index.php/modules/addons/modules/uninstalled?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" id=\"subtab-AdminPsMboUninstalledModules\" class=\"nav-link tab \" data-submenu=\"141\">
                      Odinstalowane moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin123/index.php/improve/modules/alerts?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Powiadomienia
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin123/index.php/improve/modules/updates?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\" id=\"sub";
        // line 1192
        echo "tab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Aktualizacje
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Załaduj moduł\"              data-toggle=\"pstooltip\"
              data-";
        // line 1212
        echo "placement=\"bottom\"            >
              Załaduj moduł
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Połącz z Addons marketplace\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Połącz z Addons marketplace
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin123/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.8%2526country%253Dpl/Pomoc?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły',
        'description': \"Oto polecane, <\\strong>kompatybilne z Twoim sklepem moduły<\\/strong>, które pomogą Ci osiągnąć Twoje cele.\",
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/admin123/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

<script>
\$(document).ready( function () {
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const targetDiv = \$('#main-div .content-div').first()

    const divModuleManagerMessage =";
        // line 1254
        echo " document.createElement(\"div\");
    divModuleManagerMessage.setAttribute(\"id\", \"module-manager-message-cdc-container\");

    divModuleManagerMessage.classList.add('module-manager-message-wrapper');
    divModuleManagerMessage.classList.add('cdc-container');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"pl\",\"iso_code\":\"pl\",\"shop_version\":\"1.7.8.8\",\"shop_url\":\"https:\\/\\/localhost\",\"shop_uuid\":\"d78543cd-a308-4e00-84bc-214649dd0fb0\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHBzOi8vbG9jYWxob3N0Iiwic2hvcF91dWlkIjoiZDc4NTQzY2QtYTMwOC00ZTAwLTg0YmMtMjE0NjQ5ZGQwZmIwIn0.5F_QbJNCsC1UZ1ip1x832PomkiwVzS2t8T4bE8712Xo\",\"mbo_version\":\"3.2.0\",\"mbo_reset_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"user_id\":\"1\",\"admin_token\":\"9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"refresh_url\":\"\\/admin123\\/index.php\\/modules\\/mbo\\/me?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"installed_modules\":[{\"id\":23835,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.3.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15264,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15282,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":9131,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15252,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":15267,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enab";
        // line 1263
        echo "led\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":41965,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":23867,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.8.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":23865,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":22314,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15254,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":24697,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15265,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":24696,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15277,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":23866,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.1\",\"config_url\":null},{\"id\":22321,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_";
        echo "token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22385,\"name\":\"welcome\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.8\",\"config_url\":null},{\"id\":15253,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15255,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":23871,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":23868,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15279,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":22312,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22320,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_disabled\",\"version\":\"3.1.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":24360,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.5\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15269,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":9144,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":23869,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id";
        echo "\":15280,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":15268,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.0\",\"config_url\":null},{\"id\":32577,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.1\",\"config_url\":null},{\"id\":15272,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15250,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":22315,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15273,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22319,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15283,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":23870,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22318,\"name\":\"ps_emailsubscription\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.7.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15270,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15281,\"name\":\"statsregistrations\",\"stat";
        echo "us\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15258,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":22322,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15275,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":15251,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15271,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15284,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.0\",\"config_url\":null},{\"id\":22323,\"name\":\"ps_socialfollow\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.2.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":7501,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22316,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":22317,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.0\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":22313,\"name\":\"ps_banner\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAq";
        echo "PaWRU21csQ\"},{\"id\":49648,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.8\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":46347,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.3.6.3\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":0,\"name\":\"psaddonsconnect\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":24566,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":50291,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.38.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":49583,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.9\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":24672,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":39324,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":24637,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":42674,\"name\":\"ps_buybuttonlite\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/module";
        echo "s\\/manage\\/action\\/configure\\/ps_buybuttonlite?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.5.1\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gamification?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"},{\"id\":39574,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":85751,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.74.10\",\"config_url\":\"\\/admin123\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\"}],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_catalog_url\":\"\\/admin123\\/index.php\\/modules\\/addons\\/modules\\/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"theme_catalog_url\":\"\\/admin123\\/index.php\\/modules\\/addons\\/themes\\/catalog?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-12-10\",\"shop_business_sector_id\":3,\"shop_business_sector\":\"Art and Culture\",\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
})
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advanceme";
        // line 1288
        echo "nt\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomiń ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(1, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zaczynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/admin123\\/index.php?controller=AdminDashboard&token=1a79fcdab8a5fece03ef4cc8eaee6a3b\"}]},{\"name\":\"product\",\"title\":\"Utw\\u00f3";
        // line 1314
        echo "rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co Twoi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin123\\/index.php\\/sell\\/catalog\\/products\\/new?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"admin123\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"admin123\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"admin123\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"admin123\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwszy produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"admin123\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na ro";
        echo "zpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin123\\/index.php\\/improve\\/design\\/themes\\/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/admin123\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u0119pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin123\\/index.php\\/improve\\/payment\\/payment_methods?_token=9ZGuWmgoEXlKSy54Ep_LS4UiQJMqCShAqPaWRU21csQ\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/localhost\\/admin123\\/index.php?controller=AdminCarriers&token=25de1cba2f35e89b90bffa711b1eb7b9\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylko podstawy, a";
        echo "le jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n        <\\/div";
        echo ">\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/admin123\\/index.php?controller=AdminDashboard&token=1a79fcdab8a5fece03ef4cc8eaee6a3b\"}]}]}, 1, \"https://localhost/admin123/index.php?controller=AdminWelcome&token=a9b63ec5e782c25ad1044a9d9a05f9a5\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).de";
        // line 1339
        echo "legate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1354
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://localhost/admin123/index.php?controller=AdminDashboard&amp;token=1a79fcdab8a5fece03ef4cc8eaee6a3b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=bartosz.m.kolberg%40gmail.com&amp;firstname=Bartosz&amp;lastname=Kolberg&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin123/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<h";
        // line 1401
        echo "r />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=bartosz.m.kolberg%40gmail.com&amp;firstname=Bartosz&amp;lastname=Kolberg&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" clas";
        // line 1442
        echo "s=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1462
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 111
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1354
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1462
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__cb76fa809697dfa3226216fcf96d5ae6c8f05bd91dd08cde6929c00adc109c5c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1642 => 1462,  1625 => 1354,  1616 => 111,  1607 => 1462,  1585 => 1442,  1542 => 1401,  1489 => 1354,  1472 => 1339,  1442 => 1314,  1414 => 1288,  1382 => 1263,  1371 => 1254,  1327 => 1212,  1305 => 1192,  1278 => 1167,  1245 => 1136,  1183 => 1076,  1150 => 1045,  1117 => 1014,  1086 => 985,  1054 => 955,  1021 => 924,  983 => 888,  949 => 856,  917 => 826,  884 => 795,  851 => 764,  817 => 732,  784 => 701,  753 => 672,  722 => 643,  683 => 606,  650 => 575,  616 => 543,  581 => 510,  551 => 482,  517 => 450,  484 => 419,  451 => 388,  407 => 346,  370 => 311,  321 => 264,  258 => 203,  242 => 189,  200 => 149,  157 => 111,  131 => 87,  110 => 68,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cb76fa809697dfa3226216fcf96d5ae6c8f05bd91dd08cde6929c00adc109c5c", "");
    }
}
