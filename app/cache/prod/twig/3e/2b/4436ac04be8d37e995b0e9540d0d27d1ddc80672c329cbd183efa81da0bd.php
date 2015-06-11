<?php

/* AugustinePlatformBundle:Advert:history.html.twig */
class __TwigTemplate_3e2b4436ac04be8d37e995b0e9540d0d27d1ddc80672c329cbd183efa81da0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AugustinePlatformBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'augustineplatform_body' => array($this, 'block_augustineplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AugustinePlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Historique -";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_augustineplatform_body($context, array $blocks = array())
    {
        // line 10
        echo "    <!--./ HISTORY SECTION -->
    <div id=\"help\" >
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                        <h2 data-wow-delay=\"0.3s\" class=\"wow rollIn animated\"><strong>Historique</strong></h2>
                        <p class=\"sub-head\"> Le projet évolue ! </p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 wow bounceInDown animated\" style=\"padding: 10px;\" data-wow-delay=\"0.6s\"   >
                    <div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"item\">

                                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2011.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2012.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            </div>
                            <div class=\"item active\">
                                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2013.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            </div>
                        </div>
                        <!--INDICATORS-->
                        <ol class=\"carousel-indicators\">
                            <li data-target=\"#carousel-slider\" data-slide-to=\"0\" class=\"\"></li>
                            <li data-target=\"#carousel-slider\" data-slide-to=\"1\" class=\"\"></li>
                            <li data-target=\"#carousel-slider\" data-slide-to=\"2\" class=\"active\"></li>
                        </ol>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <div class=\"media wow rotateIn animated\" data-wow-delay=\"0.4s\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-star-o fa-4x  \"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">2011</h3>
                            <p>
                                Premier projet r&eacutealis&eacute par le Lyc&eacutee L&eacuteonard de Vinci; toujours en partenariat avec le Lyc&eacutee Diderot.
                            </p>
                        </div>
                    </div>
                    <div class=\"media wow rotateIn animated\" data-wow-delay=\"0.5s\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-life-ring fa-4x  \"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">2012</h3>
                            <p>
                                Second projet &eacutegalement en partenariat avec le Lyc&eacutee Diderot. Il s'agit de la premi&egravere version d'Augustine.
                            </p>
                        </div>
                    </div>
                    <div class=\"media wow rotateIn animated\" data-wow-delay=\"0.5s\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-lightbulb-o fa-5x  \"></i>
                        </div>
                        <div class=\"media-body\">
                            <h3 class=\"media-heading\">2013</h3>
                            <p>
                                Toisi&egraveme projet sous le nom d'Augustine II.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HISTORY SECTION END -->
";
    }

    public function getTemplateName()
    {
        return "AugustinePlatformBundle:Advert:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 31,  67 => 15,  63 => 15,  59 => 25,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
