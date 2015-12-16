<?php

/* uniMarcaBundle:noticias:show.html.twig */
class __TwigTemplate_ddf855b75821c9b842daa6bfd87b4794832e17683b767655d807e150097afc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "<h1>

                <h6>";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaPub"), "Y-m-d H:i:s"), "html", null, true);
        echo "</h6>
                
            
           <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/unimarca/imagenes/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "foto")) . "")), "html", null, true);
        echo "\" width=30% height=30%/><br>
           
           ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenido"), "html", null, true);
        echo "<br><br>
           ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "autor"), "html", null, true);
        echo "<br>
           
           
         ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comentarioss"));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 16
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "titulo"), "html", null, true);
            echo "
            <br/>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
           
            

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("noticias");
        echo "\">
            Volver a la pagina principal
        </a>
    </li>
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a><br>
        
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("comentarios_new");
        echo "\">
                Create a new entry
      
</ul>
";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle:noticias:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  88 => 29,  80 => 24,  72 => 18,  62 => 16,  58 => 15,  52 => 12,  48 => 11,  43 => 9,  37 => 6,  31 => 4,  28 => 3,);
    }
}
