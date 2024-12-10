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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig */
class __TwigTemplate_df6332d880ff204dc0b078cefa1620141da576c8cf1a7b3044619cb05d6a2c47 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'shop_urls_configuration' => [$this, 'block_shop_urls_configuration'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@!PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_shop_urls_configuration($context, array $blocks = [])
    {
        // line 23
        echo "  ";
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAccountUpdateWarning");
        echo "
  ";
        // line 24
        $this->displayParentBlock("shop_urls_configuration", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  42 => 23,  39 => 22,  29 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig", "/var/www/html/prestashop/modules/ps_accounts/views/PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/shop_urls_configuration.html.twig");
    }
}
