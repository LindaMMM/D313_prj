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

/* @PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig */
class __TwigTemplate_a6e81725542cbf82be1434a88d90d6fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig", ["mailThemeConfigurationForm" =>         // line 31
(isset($context["mailThemeConfigurationForm"]) || array_key_exists("mailThemeConfigurationForm", $context) ? $context["mailThemeConfigurationForm"] : (function () { throw new RuntimeError('Variable "mailThemeConfigurationForm" does not exist.', 31, $this->source); })())]);
        // line 33
        echo "

  ";
        // line 35
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", ["generateMailsForm" =>         // line 37
(isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 37, $this->source); })())]);
        // line 39
        echo "

  ";
        // line 41
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig", ["generateMailsForm" =>         // line 43
(isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 43, $this->source); })())]);
        // line 45
        echo "

  ";
        // line 47
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig", ["mailThemes" =>         // line 49
(isset($context["mailThemes"]) || array_key_exists("mailThemes", $context) ? $context["mailThemes"] : (function () { throw new RuntimeError('Variable "mailThemes" does not exist.', 49, $this->source); })())]);
        // line 51
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 51,  91 => 49,  90 => 47,  86 => 45,  84 => 43,  83 => 41,  79 => 39,  77 => 37,  76 => 35,  72 => 33,  70 => 31,  68 => 29,  58 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {{
    include('@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/configuration_form.html.twig', {
      'mailThemeConfigurationForm': mailThemeConfigurationForm
    })
  }}

  {{
    include('@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig', {
      'generateMailsForm': generateMailsForm
    })
  }}

  {{
    include('@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/translate_mails_body_form.html.twig', {
      'generateMailsForm': generateMailsForm
    })
  }}

  {{
    include('@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_themes.html.twig', {
      'mailThemes': mailThemes
    })
  }}
{% endblock %}
", "@PrestaShop/Admin/Improve/Design/MailTheme/index.html.twig", "/home/linda/Projets/d313/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/index.html.twig");
    }
}
