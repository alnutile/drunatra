<?php

/* core/modules/system/templates/form-element-label.html.twig */
class __TwigTemplate_8fcfae01c211367a14c874805ade880437962d45f15891c948d36d1e0c362c9a extends Twig_Template
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
        // line 16
        if (((!twig_test_empty((isset($context["title"]) ? $context["title"] : null))) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 17
            echo "<label";
            echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 54,  46 => 47,  41 => 46,  49 => 52,  20 => 44,  42 => 19,  33 => 17,  81 => 46,  68 => 41,  64 => 39,  48 => 48,  39 => 49,  30 => 28,  368 => 211,  362 => 208,  359 => 207,  357 => 206,  354 => 205,  348 => 202,  344 => 201,  340 => 200,  336 => 199,  333 => 198,  331 => 197,  326 => 194,  320 => 191,  316 => 190,  312 => 189,  309 => 188,  307 => 187,  302 => 184,  296 => 181,  293 => 180,  291 => 179,  288 => 178,  282 => 175,  279 => 174,  277 => 173,  271 => 170,  266 => 169,  260 => 166,  257 => 165,  255 => 164,  250 => 163,  244 => 160,  239 => 159,  237 => 158,  232 => 157,  226 => 154,  223 => 153,  221 => 152,  217 => 151,  214 => 150,  208 => 149,  202 => 146,  198 => 144,  192 => 141,  189 => 140,  187 => 139,  184 => 138,  178 => 135,  175 => 134,  173 => 133,  169 => 131,  163 => 128,  159 => 127,  155 => 126,  150 => 123,  148 => 122,  143 => 120,  140 => 119,  136 => 117,  130 => 114,  123 => 113,  121 => 112,  118 => 111,  115 => 110,  105 => 107,  98 => 106,  95 => 105,  77 => 58,  74 => 43,  72 => 97,  52 => 91,  45 => 51,  40 => 88,  34 => 85,  31 => 47,  29 => 46,  26 => 41,  76 => 58,  70 => 56,  67 => 54,  60 => 53,  55 => 37,  51 => 55,  43 => 89,  35 => 44,  25 => 45,  23 => 27,  21 => 17,  85 => 101,  79 => 43,  71 => 55,  65 => 96,  63 => 53,  57 => 51,  54 => 50,  50 => 32,  47 => 47,  36 => 31,  32 => 43,  28 => 27,  24 => 40,  19 => 16,);
    }
}
