<?php

/* adminBundle:pagina:detallecat.html.twig */
class __TwigTemplate_a4d8c1cb90c0e347db70db9f3978b8bf1befe2a00fea245b245e80df04ef7430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base_front.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 0)) {
            echo "\t
\t\t\t\t\t\t<div class=\"beta-products-list\">
\t\t\t\t\t\t\t<h4>";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<div class=\"beta-products-details\">
\t\t\t\t\t\t\t\t<p class=\"pull-left\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))), "html", null, true);
            echo " productos </p>
\t\t\t\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t<div class=\"col-lg-4 itemprod\">
\t\t\t\t\t\t\t\t\t<div class=\"ribbon-wrapper\"><div class=\"ribbon sale\">Oferta</div></div> 
\t\t\t\t\t\t\t\t\t<div class=\"single-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-header\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/slider/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "titulo", array()), "html", null, true);
                echo "\" class=\"prodimg\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-body\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "anio", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flash-del\">\$";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio_anterior", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flash-sale\">\$";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-caption\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"beta-btn primary\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\">Detalles <i class=\"fa fa-chevron-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div> <!-- .beta-products-list -->
\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t<h1>No hay productos en esta categoria</h1>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t<div class=\"space50\">&nbsp;</div>
\t\t\t\t\t\t
  ";
    }

    public function getTemplateName()
    {
        return "adminBundle:pagina:detallecat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  121 => 44,  113 => 38,  101 => 33,  92 => 27,  88 => 26,  81 => 24,  71 => 21,  65 => 17,  61 => 16,  50 => 8,  45 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
