<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_bd8c31eb8f202b158aaf7521f3f7525408c8265e4d7b533d288c04c480a144fe extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">
    ";
            // line 25
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 25,  76 => 58,  70 => 56,  67 => 54,  60 => 52,  55 => 49,  51 => 48,  43 => 46,  35 => 43,  25 => 41,  23 => 40,  21 => 24,  85 => 44,  79 => 43,  71 => 39,  65 => 37,  63 => 36,  57 => 50,  54 => 33,  50 => 32,  47 => 47,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  19 => 23,);
    }
}
