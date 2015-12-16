<?php

/* ::base.html.twig */
class __TwigTemplate_70aff032c18293c9b4baf88e2c2e12fa619cf21fc8daefc6658ba0d73e1d6ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        
        <div id=\"titulo\">
            ";
        // line 11
        $this->displayBlock('cabecera', $context, $blocks);
        // line 14
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 17
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 18
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 21
        $this->displayBlock('pie', $context, $blocks);
        // line 22
        echo "        </div>
       
    </body>
</html>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unimarca/css/marca.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />";
    }

    // line 11
    public function block_cabecera($context, array $blocks = array())
    {
        // line 12
        echo "              <h1>MARCA</h1>
            ";
    }

    // line 17
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 21
    public function block_pie($context, array $blocks = array())
    {
        echo "Bienvenidos a www.nmarca.com";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  84 => 12,  81 => 11,  67 => 5,  58 => 22,  56 => 21,  51 => 18,  49 => 17,  44 => 14,  42 => 11,  36 => 7,  24 => 1,  63 => 14,  60 => 13,  55 => 8,  52 => 7,  45 => 13,  40 => 10,  33 => 4,  30 => 5,  89 => 17,  77 => 21,  73 => 6,  62 => 14,  57 => 12,  53 => 11,  47 => 16,  41 => 9,  38 => 7,  34 => 6,  31 => 6,  28 => 3,);
    }
}
