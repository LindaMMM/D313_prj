<?php
/* Smarty version 4.3.4, created on 2024-04-06 22:39:23
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6611b2fb529845_46584933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708959642,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6611b2fb529845_46584933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/linda/Projets/d313/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/fd/98/1d/fd981de7836bcabf71727a48f3d2b6ae0ffa5c3e_2.file.helpers.tpl.php',
    'uid' => 'fd981de7836bcabf71727a48f3d2b6ae0ffa5c3e',
    'call_name' => 'smarty_template_function_renderLogo_19303186126611ada859a6c1_72774375',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://www.d313.com/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://www.d313.com/identite" title="Informations" rel="nofollow">Informations</a></li>
                  <li><a href="http://www.d313.com/adresses" title="Adresses" rel="nofollow">Adresses</a></li>
                          <li><a href="http://www.d313.com/historique-commandes" title="Commandes" rel="nofollow">Commandes</a></li>
                          <li><a href="http://www.d313.com/avoirs" title="Avoirs" rel="nofollow">Avoirs</a></li>
                                  <li>
    <a href="http://www.d313.com/module/blockwishlist/lists" title="Mes listes d&#039;envies" rel="nofollow">
      Liste d&#039;envies
    </a>
  </li>
<li>
  <a href="//www.d313.com/module/ps_emailalerts/account" title="Mes alertes">
    Mes alertes
  </a>
</li>

        <li><a href="http://www.d313.com/?mylogout=" title="Me déconnecter" rel="nofollow">Déconnexion</a></li>
       
	</ul>
</div>
<?php }
}
