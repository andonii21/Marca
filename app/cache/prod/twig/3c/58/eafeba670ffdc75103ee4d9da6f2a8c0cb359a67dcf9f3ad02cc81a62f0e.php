<?php

/* uniMarcaBundle::layout.html.twig */
class __TwigTemplate_3c58eafeba670ffdc75103ee4d9da6f2a8c0cb359a67dcf9f3ad02cc81a62f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 4
        echo "

<div id=\"menuSuperior\">
            ";
        // line 7
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 10
        echo "        </div>
        
        <div id=\"central\">
            ";
        // line 13
        $this->displayBlock('central', $context, $blocks);
        // line 16
        echo "        </div>
";
    }

    // line 7
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 8
        echo "                
            ";
    }

    // line 13
    public function block_central($context, array $blocks = array())
    {
        // line 14
        echo "                central
            ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  60 => 13,  55 => 8,  52 => 7,  45 => 13,  40 => 10,  33 => 4,  30 => 3,  89 => 30,  77 => 21,  73 => 19,  62 => 14,  57 => 12,  53 => 11,  47 => 16,  41 => 9,  38 => 7,  34 => 7,  31 => 6,  28 => 3,);
    }
}
