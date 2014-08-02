<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_38a21c3320a718b8782e3e5641ed2272c79efaf35a142d47239bc450994618c6 extends Twig_Template
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
        echo "<nav";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  <div";
        // line 26
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"), "html", null, true);
            echo ">
      <div class=\"toolbar-lining clearfix\">
        ";
            // line 36
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 37
                echo "          <h3 class=\"toolbar-tray-name visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"), "html", null, true);
                echo "</h3>
        ";
            }
            // line 39
            echo "        ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"), "html", null, true);
            echo "
      </div>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 43
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["remainder"]) ? $context["remainder"] : null), "html", null, true);
        echo "
</nav>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 44,  79 => 43,  71 => 39,  65 => 37,  63 => 36,  57 => 34,  54 => 33,  50 => 32,  47 => 31,  36 => 29,  32 => 28,  28 => 27,  24 => 26,  19 => 25,);
    }
}
