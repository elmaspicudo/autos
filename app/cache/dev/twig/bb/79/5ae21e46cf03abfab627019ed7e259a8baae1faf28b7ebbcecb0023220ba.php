<?php

/* adminBundle:pagina:inicio.html.twig */
class __TwigTemplate_bb795ae21e46cf03abfab627019ed7e259a8baae1faf28b7ebbcecb0023220ba extends Twig_Template
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
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    <title>Vehiculos accidentados y recuperados</title>
    <meta name=\"description\" content=\"Vehiculos accidentados y recuperados\">
    <meta name=\"keyword\" content=\"Vehiculos accidentados y recuperados\">
    ";
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["ofertasTop"]) ? $context["ofertasTop"] : $this->getContext($context, "ofertasTop"))) > 0)) {
            echo "\t
\t\t\t\t\t\t<div class=\"beta-products-list\">
\t\t\t\t\t\t\t<h4>Ofertas</h4>
\t\t\t\t\t\t\t<div class=\"beta-products-details\">
\t\t\t\t\t\t\t\t<p class=\"pull-left\">438 productos | <a href=\"home_3.html#\">Ver todos</a></p>
\t\t\t\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertasTop"]) ? $context["ofertasTop"] : $this->getContext($context, "ofertasTop")));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-4 itemprod\">
\t\t\t\t\t\t\t\t\t<div class=\"ribbon-wrapper\"><div class=\"ribbon sale\">Oferta</div></div>
\t\t\t\t\t\t\t\t\t<div class=\"single-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-header\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/slider/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "titulo", array()), "html", null, true);
                echo "\" class=\"prodimg\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-body\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-title\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "anio", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flash-del\">\$";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio_anterior", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flash-sale\">\$";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-caption\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<a class=\"beta-btn primary\" href=\"";
                // line 38
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
            // line 43
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- .beta-products-list -->
\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t<div class=\"space50\">&nbsp;</div>
\t\t\t\t\t\t";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["top"]) ? $context["top"] : $this->getContext($context, "top"))) > 0)) {
            // line 50
            echo "\t\t\t\t\t\t<div class=\"beta-products-list\">
\t\t\t\t\t\t\t<h4>Top Productos</h4>

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["top"]) ? $context["top"] : $this->getContext($context, "top")));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 itemprod\">
\t\t\t\t\t\t\t\t\t\t<div class=\"single-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/slider/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "titulo", array()), "html", null, true);
                echo "\" class=\"prodimg\"></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-title\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "anio", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"single-item-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\$";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"single-item-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"beta-btn primary\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\">Detalles <i class=\"fa fa-chevron-right\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"space40\">&nbsp;</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div> <!-- .beta-products-list -->
\t\t\t\t\t\t";
        }
        // line 81
        echo "  ";
    }

    public function getTemplateName()
    {
        return "adminBundle:pagina:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 81,  182 => 73,  170 => 68,  162 => 63,  155 => 61,  145 => 58,  140 => 55,  136 => 54,  130 => 50,  128 => 49,  125 => 48,  118 => 43,  106 => 38,  97 => 32,  93 => 31,  86 => 29,  76 => 26,  70 => 22,  66 => 21,  50 => 9,  47 => 8,  40 => 3,  37 => 2,  11 => 1,);
    }
}
