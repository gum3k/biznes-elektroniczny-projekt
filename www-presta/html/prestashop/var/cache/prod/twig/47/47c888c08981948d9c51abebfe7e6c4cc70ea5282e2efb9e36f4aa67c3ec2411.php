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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig */
class __TwigTemplate_48aa95d7e4b3f8031058ec9382ba45b22e3ba0959cca246949e8778594ff14dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        // line 30
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"card\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">cloud_download</i>
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Download", [], "Admin.Actions"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-body\">
            <div class=\"alert alert-success\" role=\"alert\">
              <p class=\"alert-text\">
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Beginning the download ...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              </p>
            </div>
            <p>
              ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Backup files should automatically start downloading.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If not,[1][2] please click here[/1]!", ["[1]" => ((" <a href=\"" . $this->getAttribute(($context["downloadFile"] ?? null), "url", [])) . "\" class=\"btn btn-outline-primary btn-sm\">"), "[/1]" => "</a> ", "[2]" => "<i class=\"icon-download\"></i>"], "Admin.Advparameters.Notification");
        echo "
          </p>
          <p class=\"mb-0\">
            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_backups_index");
        echo "\">
              <i class=\"material-icons\">keyboard_backspace</i>
              ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
            </a>
          </p>
            <iframe src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["downloadFile"] ?? null), "url", []), "html", null, true);
        echo "\" class=\"d-none\"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 54,  80 => 51,  75 => 49,  69 => 46,  65 => 45,  58 => 41,  50 => 36,  42 => 30,  39 => 29,  29 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig");
    }
}
