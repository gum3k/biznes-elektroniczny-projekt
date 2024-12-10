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

/* __string_template__15e26cf661ef916fda3477ccf16634f22083a89ce3e226a56ebe1a31ba82edfe */
class __TwigTemplate_f00ea5cd34fbb889a442e27757af8f13e4530f1e3a5a0cf92f2875b2dacfbc73 extends \Twig\Template
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

<title>Moduł powiadomienia • Imago</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesUpdates';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.8.11';
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
    var token = '50226ec26de3732e2a610a72eb389883';
    var token_admin_orders = tokenAdminOrders = '7987892466d797aca25791f442f8c778';
    var token_admin_customers = 'a02b5f809e681edc6cb31db1e16bd91f';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'bf5004aed1516a4ec25f2640451c3862';
    var currentIndex = 'index.php?controller=AdminModulesUpdates';
    var employee_token = 'd1f493989f738cbed6732228a2332080';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/admin9308dqo0o/index.php/improve/modules/catalog/recommended?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M';
    var admin_notification_get_link = '/admin9308dqo0o/index.php/common/notifications?_token=pjZgJKloD_6F5x4kUPJK";
        // line 42
        echo "qqfasP30hZ-XiEn-cx3V63M';
    var admin_notification_push_link = adminNotificationPushLink = '/admin9308dqo0o/index.php/common/notifications/ack?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/admin9308dqo0o/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin9308dqo0o/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/catalog.css?v=3.2.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/connection-toolbar.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin9308dqo0o\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin9308dqo0o\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\"";
        // line 67
        echo ",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin9308dqo0o/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/admin9308dqo0o/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin9308dqo0o/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=3.2.0\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/j";
        // line 87
        echo "avascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin9308dqo0o/index.php/common/notifications?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 107
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminmodulesupdates\"
  data-base-url=\"/admin9308dqo0o/index.php\"  data-token=\"pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminDashboard&amp;token=46dfd856092ae6e9d15219fe6b006423\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin9308dqo0o/index.php/sell/catalog/categories/new?token=17e6b32df1cb3573f7539e9ea7b57e73\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=be6dbae8d2f6a2afb8b1ee5001800d2a\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin9308dqo0o/index.php/sell/catalog/products/new?token=17e6b32df1cb3573f7539e9ea7b57e73\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ea3e089fff376ffc50b3e3a2255e266a\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link\"
   ";
        // line 145
        echo "      href=\"https://localhost/admin9308dqo0o/index.php/improve/modules/manage?token=17e6b32df1cb3573f7539e9ea7b57e73\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminOrders&amp;token=7987892466d797aca25791f442f8c778\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"24\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/updates?-XiEn-cx3V63M\"
        data-post-link=\"https://localhost/admin9308dqo0o/index.php?controller=AdminQuickAccesses&token=52f7c824b53c219cb5c8176ff3e04450\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Aktualizacje - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminQuickAccesses&token=52f7c824b53c219cb5c8176ff3e04450\">
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
      action=\"/admin9308dqo0o/index.php?controller=AdminSearch&amp;token=878a0d469e281c0cc2c435bed817fbd9\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wys";
        // line 182
        echo "zukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-no";
        // line 198
        echo "ne\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
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
           ";
        // line 257
        echo "   class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
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
              Czy sprawdziłeś <strong><a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=72c9bf4ddbd1d0a81ec977682c43a253\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
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

  <script type=\"";
        // line 305
        echo "text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
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
      <span class=\"employee_profile\">Witaj ponownie Jakub</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin9308dqo0o/index.php/configure/advanced/employees/1/edit?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circl";
        // line 340
        echo "e</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminLogin&amp;logout=1&amp;token=692d3d6cee1509da3b0c0a2ca3455fd9\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin9308dqo0o/index.php/configure/advanced/employees/toggle-navigation?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminDashboard&amp;token=46dfd856092ae6e9d15219fe6b006423\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span";
        // line 378
        echo ">
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin9308dqo0o/index.php/sell/orders/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
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
                                <a href=\"/admin9308dqo0o/index.php/sell/orders/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin9308dqo0o/index.php/sell/orders/invoices/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                      ";
        // line 412
        echo "                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin9308dqo0o/index.php/sell/orders/credit-slips/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin9308dqo0o/index.php/sell/orders/delivery-slips/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCarts&amp;token=72c9bf4ddbd1d0a81ec977682c43a253\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin9308dqo0o/index.php/sell/catalog/products?_token=pjZgJKloD_6F5x4kUPJKqqfasP";
        // line 443
        echo "30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin9308dqo0o/index.php/sell/catalog/products?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin9308dqo0o/index.php/sell/catalog/categories?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin9308dqo0o/index.php/sell/catalog/monitoring/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-c";
        // line 473
        echo "x3V63M\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminAttributesGroups&amp;token=959be57a17de2fcea22844c94bc91ffd\" class=\"link\"> Atrybuty &amp; Cechy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin9308dqo0o/index.php/sell/catalog/brands/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Marki &amp; Dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin9308dqo0o/index.php/sell/attachments/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
 ";
        // line 505
        echo "                               <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCartRules&amp;token=be6dbae8d2f6a2afb8b1ee5001800d2a\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin9308dqo0o/index.php/sell/stocks/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin9308dqo0o/index.php/sell/customers/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
           ";
        // line 537
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin9308dqo0o/index.php/sell/customers/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin9308dqo0o/index.php/sell/addresses/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCustomerThreads&amp;token=bf5004aed1516a4ec25f2640451c3862\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
             ";
        // line 567
        echo "                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCustomerThreads&amp;token=bf5004aed1516a4ec25f2640451c3862\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin9308dqo0o/index.php/sell/customer-service/order-messages/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminReturn&amp;token=cf20352ca715935f772682bb28ded7aa\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin9308dqo0o/";
        // line 598
        echo "index.php/modules/metrics/legacy/stats?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin9308dqo0o/index.php/modules/metrics/legacy/stats?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin9308dqo0o/index.php/modules/metrics?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li c";
        // line 632
        echo "lass=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszenia</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin9308dqo0o/index.php/modules/addons/modules/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
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
                                <a href=\"/admin9308dqo0o/index.php/modules/addons/modules/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin9308d";
        // line 663
        echo "qo0o/index.php/improve/modules/manage?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin9308dqo0o/index.php/modules/addons/themes/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin9308dqo0o/index.php/modules/addons/themes/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Katalog
                                </a>
                              </li>

                                                                                  
                          ";
        // line 693
        echo "    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin9308dqo0o/index.php/improve/design/themes/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Szablony
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin9308dqo0o/index.php/improve/design/mail_theme/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Szablon maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin9308dqo0o/index.php/improve/design/cms-pages/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin9308dqo0o/index.php/improve/design/modules/positions/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Pozycje
                           ";
        // line 721
        echo "     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminImages&amp;token=373b526fa4861daa1d0486118b79f546\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin9308dqo0o/index.php/modules/link-widget/list?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCarriers&amp;token=36d5313dd26e4b46f280ecdab1348d26\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                 ";
        // line 754
        echo "                                           </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminCarriers&amp;token=36d5313dd26e4b46f280ecdab1348d26\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin9308dqo0o/index.php/improve/shipping/preferences/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin9308dqo0o/index.php/improve/payment/payment_methods?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tab";
        // line 785
        echo "s-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin9308dqo0o/index.php/improve/payment/payment_methods?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin9308dqo0o/index.php/improve/payment/preferences?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin9308dqo0o/index.php/improve/international/localization/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      M";
        // line 816
        echo "iędzynarodowy
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin9308dqo0o/index.php/improve/international/localization/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin9308dqo0o/index.php/improve/international/zones/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin9308dqo0o/index.php/improve/international/taxes/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Podatki
                                </a>
                              ";
        // line 845
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin9308dqo0o/index.php/improve/international/translations/settings?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminPsfacebookModule&amp;token=da5d76117af8eb9c4d11be8df12a40f0\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminP";
        // line 876
        echo "sfacebookModule&amp;token=da5d76117af8eb9c4d11be8df12a40f0\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b196f7c195eec8021a064c6f195ae270\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin9308dqo0o/index.php/configure/shop/preferences/preferences?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
    ";
        // line 914
        echo "                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin9308dqo0o/index.php/configure/shop/preferences/preferences?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin9308dqo0o/index.php/configure/shop/order-preferences/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin9308dqo0o/index.php/configure/shop/product-preferences/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                          ";
        // line 943
        echo "      <a href=\"/admin9308dqo0o/index.php/configure/shop/customer-preferences/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin9308dqo0o/index.php/configure/shop/contacts/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin9308dqo0o/index.php/configure/shop/seo-urls/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminSearchConf&amp;token=e450391f83e316be0b969facf4a4a861\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
        ";
        // line 975
        echo "                                              
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin9308dqo0o/index.php/configure/advanced/system-information/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\">
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
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/system-information/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/performance/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                 ";
        // line 1004
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/administration/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/emails/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Adres e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/import/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/employees/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Zesp�";
        // line 1032
        echo "�ł
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/sql-requests/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/logs/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/webservice-keys/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-subme";
        // line 1063
        echo "nu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin9308dqo0o/index.php/configure/advanced/feature-flags/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" class=\"link\"> Funkcje eksperymentalne
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
              <a href=\"/admin9308dqo0o/index.php/improve/modules/updates?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" aria-current=\"page\">Aktualizacje</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Moduł powiadomienia          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title";
        // line 1123
        echo "=\"Załaduj moduł\"                  data-toggle=\"pstooltip\"
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
                   data-url=\"/admin9308dqo0o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"
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
        // line 1154
        echo "                                                                                                                                                                                                                         <li class=\"nav-item\">
                    <a href=\"/admin9308dqo0o/index.php/improve/modules/manage?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"45\">
                      Moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin9308dqo0o/index.php/modules/addons/modules/uninstalled?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" id=\"subtab-AdminPsMboUninstalledModules\" class=\"nav-link tab \" data-submenu=\"140\">
                      Odinstalowane moduły
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin9308dqo0o/index.php/improve/modules/alerts?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Powiadomienia
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin9308dqo0o/index.php/improve/modules/updates?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\" id=\"subt";
        // line 1179
        echo "ab-AdminModulesUpdates\" class=\"nav-link tab active current\" data-submenu=\"47\">
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
              data-placement";
        // line 1199
        echo "=\"bottom\"            >
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
               data-url=\"/admin9308dqo0o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.11%2526country%253Dpl/Pomoc?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"
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
      recommendedModulesUrl: '/admin9308dqo0o/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesUpdates&_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M',
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

    const divModuleManagerMess";
        // line 1241
        echo "age = document.createElement(\"div\");
    divModuleManagerMessage.setAttribute(\"id\", \"module-manager-message-cdc-container\");

    divModuleManagerMessage.classList.add('module-manager-message-wrapper');
    divModuleManagerMessage.classList.add('cdc-container');

    targetDiv.prepend(divModuleManagerMessage)
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"EUR\",\"iso_lang\":\"pl\",\"iso_code\":\"pl\",\"shop_version\":\"1.7.8.11\",\"shop_url\":\"https:\\/\\/localhost\",\"shop_uuid\":\"5956c80e-d08b-4bfb-b5d2-b961c9245a49\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHBzOi8vbG9jYWxob3N0Iiwic2hvcF91dWlkIjoiNTk1NmM4MGUtZDA4Yi00YmZiLWI1ZDItYjk2MWM5MjQ1YTQ5In0.RqAzYbtLtbFDREkSl1vJ7GCIgOqDRQ9rJ-Bds10dKq4\",\"mbo_version\":\"3.2.0\",\"mbo_reset_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"user_id\":\"1\",\"admin_token\":\"pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"refresh_url\":\"\\/admin9308dqo0o\\/index.php\\/modules\\/mbo\\/me?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"installed_modules\":[{\"id\":15280,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":22314,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":32577,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":15273,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15282,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":15250,\"name\":\"dashactivity\",\"status\":\"";
        // line 1250
        echo "enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":24697,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15253,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15281,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":23865,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":15254,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":22322,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15279,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":15272,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":24637,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":85751,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.74.10\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":23869,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":22316,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":22313,\"name\":\"ps_banner\",\"status\":\"enabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=pjZgJKloD_6F5x4";
        echo "kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15268,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":15258,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":15275,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":42674,\"name\":\"ps_buybuttonlite\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_buybuttonlite?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15267,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":24360,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.5\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15283,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":7501,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.3.0\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":39324,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15277,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":24696,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-X";
        echo "iEn-cx3V63M\"},{\"id\":15264,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":15255,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":24671,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newproducts?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22315,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15269,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":39574,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":22318,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.7.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15251,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":23868,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":15271,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":22321,\"name\":\"ps_mainmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.4\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22323,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.0\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\"";
        echo ":23870,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22317,\"name\":\"ps_customtext\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22312,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":44630,\"name\":\"sumuppaymentgateway\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/sumuppaymentgateway?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22320,\"name\":\"ps_imageslider\",\"status\":\"enabled__mobile_disabled\",\"version\":\"3.1.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":49648,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.8\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":24547,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":23835,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15252,\"name\":\"dashproducts\",\"status\"";
        echo ":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":9131,\"name\":\"blockwishlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":24650,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":15284,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":23871,\"name\":\"ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":23866,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":23867,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":46347,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.3.6.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22319,\"name\":\"ps_featuredproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.5\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":50291,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.38.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{";
        echo "\"id\":15270,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":49583,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.9\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":22385,\"name\":\"welcome\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.9\",\"config_url\":null},{\"id\":15265,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":50756,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.1\",\"config_url\":null},{\"id\":41965,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"},{\"id\":9144,\"name\":\"productcomments\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.2\",\"config_url\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\"}],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_catalog_url\":\"\\/admin9308dqo0o\\/index.php\\/modules\\/addons\\/modules\\/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"theme_catalog_url\":\"\\/admin9308dqo0o\\/index.php\\/modules\\/addons\\/themes\\/catalog?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"php_version\":\"7.4.33\",\"shop_creation_date\":\"2024-11-22\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesUpdates\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
})
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-g";
        // line 1265
        echo "roups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 9.0909090909091%;\"></div>
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
    onBoarding = new OnBoarding(1, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zacz";
        // line 1301
        echo "ynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/admin9308dqo0o\\/index.php?controller=AdminDashboard&token=46dfd856092ae6e9d15219fe6b006423\"}]},{\"name\":\"product\",\"title\":\"Utw\\u00f3rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co Twoi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\\/new?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwsz";
        echo "y produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"admin9308dqo0o\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/design\\/themes\\/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u0119pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin9308dqo0o\\/index.php\\/improve\\/payment\\/payment_methods?_token=pjZgJKloD_6F5x4kUPJKqqfasP30hZ-XiEn-cx3V63M\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/localhost\\/admin9308dqo0o\\/index.php?";
        echo "controller=AdminCarriers&token=36d5313dd26e4b46f280ecdab1348d26\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylko podstawy, ale jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a clas";
        echo "s=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/admin9308dqo0o\\/index.php?controller=AdminDashboard&token=46dfd856092ae6e9d15219fe6b006423\"}]}]}, 1, \"https://localhost/admin9308dqo0o/index.php?controller=AdminWelcome&token=5aa1285b643b55e4a6a4ff5e709934ec\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", f";
        // line 1311
        echo "unction(){
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
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1341
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
  <a href=\"https://localhost/admin9308dqo0o/index.php?controller=AdminDashboard&amp;token=46dfd856092ae6e9d15219fe6b006423\" class=\"btn btn-primary py-1 mt-3\">
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=kubus86300%40gmail.com&amp;firstname=Jakub&amp;lastname=Gumkowski&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin9308dqo0o/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t";
        // line 1388
        echo "\t\t\t<hr />
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=kubus86300%40gmail.com&amp;firstname=Jakub&amp;lastname=Gumkowski&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=";
        // line 1429
        echo "\"btn btn-primary btn-block btn-lg\" type=\"submit\">
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
        // line 1449
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 107
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1341
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

    // line 1449
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
        return "__string_template__15e26cf661ef916fda3477ccf16634f22083a89ce3e226a56ebe1a31ba82edfe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1629 => 1449,  1612 => 1341,  1603 => 107,  1594 => 1449,  1572 => 1429,  1529 => 1388,  1476 => 1341,  1444 => 1311,  1429 => 1301,  1391 => 1265,  1369 => 1250,  1358 => 1241,  1314 => 1199,  1292 => 1179,  1265 => 1154,  1232 => 1123,  1170 => 1063,  1137 => 1032,  1107 => 1004,  1076 => 975,  1042 => 943,  1011 => 914,  971 => 876,  938 => 845,  907 => 816,  874 => 785,  841 => 754,  806 => 721,  776 => 693,  744 => 663,  711 => 632,  675 => 598,  642 => 567,  610 => 537,  576 => 505,  542 => 473,  510 => 443,  477 => 412,  441 => 378,  401 => 340,  364 => 305,  314 => 257,  253 => 198,  235 => 182,  196 => 145,  153 => 107,  131 => 87,  109 => 67,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__15e26cf661ef916fda3477ccf16634f22083a89ce3e226a56ebe1a31ba82edfe", "");
    }
}
