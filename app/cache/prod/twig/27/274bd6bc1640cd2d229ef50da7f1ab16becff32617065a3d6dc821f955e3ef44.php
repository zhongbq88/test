<?php

/* PrestaShopBundle:Admin/Product/Include:form_seo.html.twig */
class __TwigTemplate_c2c21e4068108deb4fe7791b2fd52a94d0238657c74cc0b537c2988ebef79f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"col-md-12\">

  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Engine Optimization", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your ranking and how your product page will appear in search engines results.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_title", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
          <span class=\"help-box\" data-toggle=\"popover\"
            data-content=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Public title for the product's page, and for search engines. Leave blank to use the product name. The number of remaining characters is displayed to the left of the field.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
        </label>
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_title", array()), 'errors');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_title", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_description", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
          <span class=\"help-box\" data-toggle=\"popover\"
            data-content=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This description will appear in search engines. You need a single sentence, shorter than 160 characters (including spaces).", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
        </label>
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_description", array()), 'errors');
        echo "
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meta_description", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link_rewrite", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </label>
    ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link_rewrite", array()), 'errors');
        echo "
    <div class=\"row\">
      <div class=\"col-md-7\">
        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link_rewrite", array()), 'widget');
        echo "
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn-action btn btn-action btn-block text-uppercase\" id=\"seo-url-regenerate\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset URL", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          ";
        // line 79
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 80
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently disabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 81
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To enable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        } else {
            // line 83
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 84
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 86
        echo "        </p>
        <p class=\"alert-text\">
          ";
        // line 88
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 89
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The \"Force update of friendly URL\" option is currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 91
            echo "            ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]Product Settings[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 93
        echo "        </p>
      </div>
    </div>
  </div>

  <h2>
    ";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirection page", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "redirect_type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "redirect_type", array()), 'errors');
        echo "
        ";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "redirect_type", array()), 'widget');
        echo "
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_type_redirected", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_type_redirected", array()), 'errors');
        echo "
        ";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id_type_redirected", array()), 'widget');
        echo "
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <i class=\"material-icons\">help</i>
        <p class=\"alert-text\">
          ";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanent redirection (301) = Permanently display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporary redirection (302) = Temporarily display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 130,  224 => 129,  220 => 128,  207 => 118,  203 => 117,  199 => 116,  190 => 110,  186 => 109,  182 => 108,  172 => 101,  167 => 99,  159 => 93,  153 => 91,  148 => 89,  146 => 88,  142 => 86,  137 => 84,  132 => 83,  127 => 81,  122 => 80,  120 => 79,  107 => 69,  101 => 66,  95 => 63,  90 => 61,  85 => 59,  76 => 53,  72 => 52,  67 => 50,  62 => 48,  50 => 39,  46 => 38,  41 => 36,  36 => 34,  27 => 28,  23 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Product/Include:form_seo.html.twig", "/opt/bitnami/apache2/htdocs/src/PrestaShopBundle/Resources/views/Admin/Product/Include/form_seo.html.twig");
    }
}
