<?php

/* AugustinePlatformBundle::layout.html.twig */
class __TwigTemplate_818d66ae33a5d33ad201a0e1a7c62cd2e4b2d78f6391d204c8980d28f5689b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'augustineplatform_body' => array($this, 'block_augustineplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->displayBlock('augustineplatform_body', $context, $blocks);
    }

    public function block_augustineplatform_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
    }

    public function getTemplateName()
    {
        return "AugustinePlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  516 => 407,  512 => 406,  508 => 405,  485 => 385,  477 => 380,  469 => 375,  461 => 370,  438 => 350,  426 => 341,  417 => 335,  405 => 326,  396 => 320,  384 => 311,  374 => 304,  362 => 295,  349 => 285,  337 => 276,  324 => 266,  312 => 257,  299 => 247,  287 => 238,  275 => 229,  263 => 220,  231 => 191,  217 => 180,  203 => 169,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
