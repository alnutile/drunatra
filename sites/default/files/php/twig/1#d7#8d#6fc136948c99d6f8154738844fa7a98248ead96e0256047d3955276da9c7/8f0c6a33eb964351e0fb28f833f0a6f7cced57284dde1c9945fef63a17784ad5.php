<?php

/* core/modules/system/templates/container.html.twig */
class __TwigTemplate_d78d6fc136948c99d6f8154738844fa7a98248ead96e0256047d3955276da9c7 extends Twig_Template
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
        // line 18
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  79 => 43,  71 => 39,  65 => 37,  63 => 36,  57 => 34,  54 => 33,  50 => 32,  47 => 31,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  19 => 18,);
    }
}
