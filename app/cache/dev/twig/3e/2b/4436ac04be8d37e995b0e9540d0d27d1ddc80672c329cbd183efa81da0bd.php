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
        echo "    
    <!--./ HISTORY SECTION -->
    <div id=\"help\" >
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2\">
                        <h2 data-wow-delay=\"0.3s\" class=\"wow rollIn animated\"><strong>Historique</strong></h2>
                        <!--<p class=\"sub-head\"> Le projet évolue ! </p>-->
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 wow bounceInDown animated\" style=\"padding: 10px;\" data-wow-delay=\"0.9s\"   >
                    <div id=\"carousel-slider\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"item\">
                                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2011.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            <p>
                                Premier projet r&eacutealis&eacute par le Lyc&eacutee L&eacuteonard de Vinci; toujours en partenariat avec le Lyc&eacutee Diderot.
                            </p>
                            </div>
                            <div class=\"item\">
                                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2012.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            <p>
                                Second projet &eacutegalement en partenariat avec le Lyc&eacutee Diderot. Il s'agit de la premi&egravere version d'Augustine.
                            </p>
                            </div>
                            <div class=\"item active\">
                                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/augustineplatform/img/slider/2013.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" alt=\"\">
                            <p>
                                Toisi&egraveme projet sous le nom d'Augustine II.
                            </p>
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
                <!--<div class=\"col-lg-4 col-md-4\">
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
                </div>-->
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
        return array (  77 => 37,  68 => 31,  59 => 25,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
