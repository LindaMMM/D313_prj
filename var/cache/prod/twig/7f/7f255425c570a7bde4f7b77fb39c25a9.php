<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__704dc36111d78f45688098dd8389150a */
class __TwigTemplate_1a660dfa3c8abb56b50c5833f00a6337 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Catégories • testLMA</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCategories';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'f9101a4b90600c16859f883b0ee01a60';
    var currentIndex = 'index.php?controller=AdminCategories';
    var employee_token = 'b17d6175e4085b9e96d17efafc3610de';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin925axfokr1n5teqnodt/index.php/improve/modules/manage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI';
    var admin_notification_get_link = '/admin925axfokr1n5teqnodt/index.php/common/notifications?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI';
    var admin_notification_push_link = adminNotificationPushLink = '/admin925axfokr1n5teqnodt/index.php/common/notifications/ack?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI';
    var tab_modules_list = '';
  ";
        // line 42
        echo "  var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin925axfokr1n5teqnodt/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin925axfokr1n5teqnodt\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin925axfokr1n5teqnodt\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"cu";
        // line 71
        echo "rrencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/admin925axfokr1n5teqnodt/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.3\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3";
        // line 90
        echo ".min.js\"></script>
<script type=\"text/javascript\" src=\"/admin925axfokr1n5teqnodt/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script type=\"module\" src=\"/modules/psxdesign/views/js/upgrade-notification.js\"></script>
<script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin925axfokr1n5teqnodt/index.php/common/notifications?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
            var admin_gamification_ajax_url = \"http:\\/\\/www.d313.com\\/admin925axfokr1n5teqnodt\\/index.php?controller=AdminGamification&token=580030d7acf713d3d4cf8ffd2ec26f32\";
            var current_id_tab = 11;
        </script>

";
        // line 119
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr admincategories\"
  data-base-url=\"/admin925axfokr1n5teqnodt/index.php\"  data-token=\"EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin925axfokr1n5teqnodt/index.php/modules/pseditionbasic/homepage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/orders?token=6178a0e310618e5a54b12312c854bca8\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c12f6ec42e3ba6ba2bf36d83f1aead33\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/improve/modules/manage?token=6178a0e310618e5a54b12312c854bca8\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=65dbf3a656bc890d921bc83ab7ec50e4\"
                 data-item=\"Nouveau bon de réducti";
        // line 154
        echo "on\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/catalog/products-v2/create?token=6178a0e310618e5a54b12312c854bca8\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories/new?token=6178a0e310618e5a54b12312c854bca8\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"124\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/categories\"
        data-post-link=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminQuickAccesses&token=499489eddb04dbb2e9d8b5ab7bf58f7f\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Cat&eacute;gories - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminQuickAccesses&token=499489eddb04dbb2e9d8b5ab7bf58f7f\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin925axfokr1n5teqnodt/index.php?controller=AdminSearch&amp;token=a32629d961b737e76b8d4ea33df07e8e\"
      role=\"search\">
  <input type=\"hidden";
        // line 194
        echo "\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\"";
        // line 209
        echo ">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/orders?token=6178a0e310618e5a54b12312c854bca8\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c12f6ec42e3ba6ba2bf36d83f1aead33\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/improve/modules/manage?token=6178a0e310618e5a54b12312c854bca8\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=65dbf3a656bc890d921bc83ab7ec50e4\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/catalog/products-v2/create?token=6178a0e310618e";
        // line 246
        echo "5a54b12312c854bca8\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories/new?token=6178a0e310618e5a54b12312c854bca8\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"124\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/categories\"
      data-post-link=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminQuickAccesses&token=499489eddb04dbb2e9d8b5ab7bf58f7f\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Cat&eacute;gories - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminQuickAccesses&token=499489eddb04dbb2e9d8b5ab7bf58f7f\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p cla";
        // line 291
        echo "ss=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/maintenance/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.d313.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
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
              Commandes<span id=\"_nb_";
        // line 334
        echo "new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a791a2b9a6756416e07e729d89d67511\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-";
        // line 380
        echo "notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://www.d313.com/img/pr/default.jpg\" alt=\"LMA\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir LMA</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/employees/1/edit?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\">
      <i class=\"material-icons\">edit</i>
      <span>Votre";
        // line 429
        echo " profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=www.d313.com&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/admin925axfokr1n5teqnodt/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p c";
        // line 450
        echo "lass=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminLogin&amp;logout=1&amp;token=1918dca1faef6aecac3154a8daa58db2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/employees/toggle-navigation?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/admin925axfokr1n5teqnodt/index.php/modules/pseditionbasic/homepage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"161\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"162\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/pseditionbasic/homepage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <";
        // line 494
        echo "i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminDashboard&amp;token=240715ae44d0a561ad1bbb0b9b209f97\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/orders/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                ";
        // line 532
        echo "      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/orders/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/orders/invoices/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/orders/credit-slips/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Avoirs
                                </a>
                              </li>

                               ";
        // line 563
        echo "                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/orders/delivery-slips/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCarts&amp;token=a791a2b9a6756416e07e729d89d67511\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/products?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                  ";
        // line 593
        echo "                          </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/products?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/monitoring/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab";
        // line 623
        echo "-AdminParentAttributesGroups\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminAttributesGroups&amp;token=5b48dc78a99efe1dbdf98dc321ea7c28\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/brands/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/attachments/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCartRules&amp;token=65dbf3a656bc890d921bc83ab7ec50e4\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                     ";
        // line 652
        echo "                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/stocks/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/customers/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/customers/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Clients
                         ";
        // line 682
        echo "       </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/addresses/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCustomerThreads&amp;token=30d9fb135a5fc07a48acbfa7d4e53c18\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                    ";
        // line 714
        echo "            <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCustomerThreads&amp;token=30d9fb135a5fc07a48acbfa7d4e53c18\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/customer-service/order-messages/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminReturn&amp;token=55ff2a9c3993904b2e60a15047ea1194\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/metrics/legacy/stats?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      S";
        // line 744
        echo "tatistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/metrics/legacy/stats?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/metrics?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                          ";
        // line 781
        echo "                            
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/mbo/modules/catalog/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/mbo/modules/catalog/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/modules/manage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Gestionnaire de modules 
                                <";
        // line 807
        echo "/a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c9c8111d41bce07e0b1bdae158adfab1\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=c9c8111d41bce07e0b1bdae158adfab1\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm";
        // line 838
        echo "enu=\"142\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/mbo/themes/catalog/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/improve/design/themes?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/design/mail_theme/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/design/cms-pages/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                     ";
        // line 867
        echo "             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/design/modules/positions/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminImages&amp;token=5c6b95c456ef6848594a1546106b124a\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/link-widget/list?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index";
        // line 898
        echo ".php?controller=AdminCarriers&amp;token=9f05d1d7cb41e842f4d78ea052154ba3\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminCarriers&amp;token=9f05d1d7cb41e842f4d78ea052154ba3\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/shipping/preferences/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminMbeConfiguration\">
    ";
        // line 928
        echo "                            <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminMbeConfiguration&amp;token=b770ac08a21a3486f8dbcb1a05d023a6\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminMbeShipping&amp;token=8d21da077edaa0635e6fc3314e772ec1\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/payment/payment_methods?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                   ";
        // line 957
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/payment/payment_methods?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/payment/preferences?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/international/localization/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
 ";
        // line 988
        echo "                                           </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/international/localization/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/international/zones/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/international/taxes/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\"";
        // line 1017
        echo " id=\"subtab-AdminTranslations\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/improve/international/translations/settings?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"125\" id=\"subtab-Marketing\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsfacebookModule&amp;token=589047012d5cb61fed2b432803c3753a\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-125\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsfacebookModule&amp;token=589047012d5cb61fed2b432803c3753a\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                 ";
        // line 1047
        echo "                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=4b7d05a8d5b2825a5c54066338b08202\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"163\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/pseditionbasic/settings?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
             ";
        // line 1086
        echo "     <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/preferences/preferences?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/preferences/preferences?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/order-preferences/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                              ";
        // line 1113
        echo "    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/product-preferences/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/customer-preferences/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/contacts/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/shop/seo-urls/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Trafi";
        // line 1141
        echo "c et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminSearchConf&amp;token=2e14df599afd0552cc535cd8f878bbfd\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/system-information/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\"";
        // line 1173
        echo " id=\"subtab-AdminInformation\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/system-information/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/performance/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/administration/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/emails/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
";
        // line 1203
        echo "                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/import/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/employees/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/sql-requests/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/logs/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Logs
                    ";
        // line 1231
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/webservice-keys/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/feature-flags/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin925axfokr1n5teqnodt/index.php/configure/advanced/security/?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        ";
        // line 1259
        echo "</li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminPsAssistantSettings&amp;token=6337bc551c3a500d15d72f0a0cbfdf2b\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"169\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://www.d313.com/admin925axfokr1n5teqnodt/index.php?controller=AdminKlaviyoPsConfig&amp;token=d527654194f6637bd6a4e7138ce00641\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
  ";
        // line 1299
        echo "  
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" aria-current=\"page\">Catégories</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Catégories          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"                  title=\"Ajouter une catégorie\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Ajouter une catégorie
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin925axfokr1n5teqnodt/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.5%2526country%253Dfr/Aide?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-pr";
        // line 1350
        echo "imary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin925axfokr1n5teqnodt/index.php/sell/catalog/categories/new?id_parent=2&amp;_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"              title=\"Ajouter une catégorie\"            >
              Ajouter une catégorie
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin925axfokr1n5teqnodt/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminCategories%253Fversion%253D8.1.5%2526country%253Dfr/Aide?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1387
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/admin925axfokr1n5teqnodt/index.php/modules/pseditionbasic/homepage?_token=EmWHFdlt48onNdSS3lx9XxnxHIh_5B_AkdmJ3kfKoKI\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1421
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1387
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1421
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__704dc36111d78f45688098dd8389150a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1600 => 1421,  1579 => 1387,  1568 => 119,  1559 => 1421,  1519 => 1387,  1480 => 1350,  1427 => 1299,  1385 => 1259,  1355 => 1231,  1325 => 1203,  1293 => 1173,  1259 => 1141,  1229 => 1113,  1200 => 1086,  1159 => 1047,  1127 => 1017,  1096 => 988,  1063 => 957,  1032 => 928,  1000 => 898,  967 => 867,  936 => 838,  903 => 807,  875 => 781,  836 => 744,  804 => 714,  770 => 682,  738 => 652,  707 => 623,  675 => 593,  643 => 563,  610 => 532,  570 => 494,  524 => 450,  501 => 429,  450 => 380,  402 => 334,  357 => 291,  310 => 246,  271 => 209,  254 => 194,  212 => 154,  172 => 119,  141 => 90,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__704dc36111d78f45688098dd8389150a", "");
    }
}