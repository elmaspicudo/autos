<?php

/* ::base_front.html.twig */
class __TwigTemplate_a19a9484bedd0aaf8f85b689e6cb5c33ebb5d864eb8ca4a38ec711ab7d1fdef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'banner' => array($this, 'block_banner'),
            'contMenu' => array($this, 'block_contMenu'),
            'widget' => array($this, 'block_widget'),
            'contenido' => array($this, 'block_contenido'),
            'contsnMenu' => array($this, 'block_contsnMenu'),
            'footer' => array($this, 'block_footer'),
            'unscrip' => array($this, 'block_unscrip'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "    ";
        $this->displayBlock('banner', $context, $blocks);
        // line 110
        echo "    ";
        $this->displayBlock('contMenu', $context, $blocks);
        // line 382
        $this->displayBlock('contsnMenu', $context, $blocks);
        // line 384
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 554
        echo "    ";
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    <meta name=\"author\" content=\"Jose Miguel Pantaleon Martinez\">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/colorbox/example3/colorbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/rs-plugin/css/settings.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/rs-plugin/css/responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" title=\"style\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/css/styleswitcher.css"), "html", null, true);
        echo "\">
    
    <link rel=\"alternate stylesheet\" type=\"text/css\" media=\"screen\" title=\"color-8\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/css/color-8.css"), "html", null, true);
        echo "\"/>
    
</head>
<body>
    
    <div id=\"header\">
    
        <div class=\"header-body\">
            <div class=\"container beta-relative\">
                <div class=\"pull-left\" style=\"width: 282px;\">
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" id=\"logo\" style=\"float: left;\">
                            <h1 style=\"\">Tu logo</h1>
                    </a>
                    <span class=\"slogan\">tu eslogan</span>
                </div>
                <div class=\"pull-right beta-components space-left ov\">
                    <div class=\"space10\">&nbsp;</div>                       
                </div>
                <div class=\"clearfix\"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class=\"header-bottom color-div\">
            <div class=\"container\">
                <a class=\"visible-xs beta-menu-toggle pull-right\" href=\"home_3.html#\"><span class='beta-menu-toggle-text'>Menu</span> <i class=\"fa fa-bars\"></i></a>
                <div class=\"visible-xs clearfix\"></div>
                <nav class=\"main-menu\">
                    <ul class=\"l-inline ov\">
                        <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Inicio</a>
                            
                        </li>
                        ";
        // line 54
        if ((twig_length_filter($this->env, (isset($context["paginas"]) ? $context["paginas"] : $this->getContext($context, "paginas"))) > 0)) {
            // line 55
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paginas"]) ? $context["paginas"] : $this->getContext($context, "paginas")));
            foreach ($context['_seq'] as $context["_key"] => $context["pagina"]) {
                // line 56
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("interior", array("id" => $this->getAttribute($context["pagina"], "id", array()), "nombre" => $this->getAttribute($context["pagina"], "nombre", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["pagina"], "nombre", array()), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagina'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        ";
        }
        // line 59
        echo "
                        </li>
                        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("tips");
        echo "\">FAQ´S</a>
                            
                        </li>
                        <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("descargas");
        echo "\">Descargas</a>
                            
                        </li>
                        <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("contacto");
        echo "\">Contacto</a></li>
                    </ul>
                    <div class=\"clearfix\"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->
    ";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aviso"]) ? $context["aviso"] : $this->getContext($context, "aviso")), "titulo", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aviso"]) ? $context["aviso"] : $this->getContext($context, "aviso")), "descripcion", array()), "html", null, true);
        echo "\">
    <meta name=\"keyword\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aviso"]) ? $context["aviso"] : $this->getContext($context, "aviso")), "metatags", array()), "html", null, true);
        echo "\">
    ";
    }

    // line 75
    public function block_banner($context, array $blocks = array())
    {
        // line 76
        echo "    <div class=\"rev-slider\">
    ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["baners"]) ? $context["baners"] : $this->getContext($context, "baners"))) > 0)) {
            // line 78
            echo "                <div class=\"fullwidthbanner-container\">
                    <div class=\"fullwidthbanner\">
                        <div class=\"bannercontainer\" >
                            <div class=\"banner\" >
                                <ul>
                                    ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["baners"]) ? $context["baners"] : $this->getContext($context, "baners")));
            foreach ($context['_seq'] as $context["_key"] => $context["baner"]) {
                // line 84
                echo "                                        <!-- THE FIRST SLIDE -->
                                        <li data-transition=\"boxfade\" data-slotamount=\"20\">
                                             <img src=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/slider/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["baner"], "imagenes", array()), 0, array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["baner"], "imagenes", array()), 0, array()), "subtitulo", array()), "html", null, true);
                echo "\"/>
                                           
                                            <div class=\"caption lfr\"  data-x=\"660\" data-y=\"120\" data-speed=\"800\" data-start=\"2000\" data-easing=\"easeOutBack\">
                                                <h1>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["baner"], "titulo", array()), "html", null, true);
                echo "</h1>
                                            </div>
                                            <div class=\"caption lfr\"  data-x=\"660\" data-y=\"160\" data-speed=\"800\" data-start=\"2400\" data-easing=\"easeOutBack\">
                                                <h2>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["baner"], "subtitulo", array()), "html", null, true);
                echo "</h2>
                                            </div>
                                            <div class=\"caption lfr\"  data-x=\"660\" data-y=\"200\" data-speed=\"800\" data-start=\"2800\" data-easing=\"easeOutBack\">
                                                <p>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["baner"], "contenido", array()), "html", null, true);
                echo "</p>
                                            </div>                    
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['baner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                </ul>
                            </div>
                        </div>

                        <div class=\"tp-bannertimer\"></div>
                    </div>
                </div>
                <!--slider-->
            ";
        }
        // line 108
        echo "    </div>
    ";
    }

    // line 110
    public function block_contMenu($context, array $blocks = array())
    {
        // line 111
        echo "    <div class=\"container\">
        <div id=\"content\" class=\"space-top-none\">
            <div class=\"main-content\">          

                <div class=\"space10\">&nbsp;</div>

                <!--<div class=\"dg\">
                    <div class=\"col-3 wow fadeInDown\">
                        <div class=\"beta-banner\">
                            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/images/banners/banner12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <h2 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 100,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [30, 30, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Oferta</h2>
                            <p 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 400,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [80, 80, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >tu producto <br /> de oferta</p>
                            <a 
                                class=\"beta-banner-layer beta-btn text-left banner-color\" 
                                href=\"single_type_quote.html\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 300,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"bottom\" : [25, 25, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Mostrar</a>
                        </div>
                    </div>
                    
                    <div class=\"col-3 wow fadeInDown\">
                        <div class=\"beta-banner beta-banner-white\">
                            <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/images/banners/banner13.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <h2 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 100,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [30, 30, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Ofertas especiales</h2>
                            <p 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 400,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [80, 80, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >su descripcion <br /> oferta</p>
                            <a 
                                class=\"beta-banner-layer beta-btn text-left beta-banner-white\" 
                                href=\"single_type_quote.html\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 300,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"bottom\" : [25, 25, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Mostrar</a>
                        </div>
                    </div>

                    <div class=\"col-3 wow fadeInDown\">
                        <div class=\"beta-banner beta-banner-white\">
                            <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/images/banners/banner14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <h2 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 100,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [30, 30, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Venta nocturna</h2>
                            <p 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 400,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [80, 80, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >los productos <br /> venta</p>
                            <a 
                                class=\"beta-banner-layer beta-btn text-left beta-banner-white\" 
                                href=\"single_type_quote.html\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 300,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"bottom\" : [25, 25, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >mostrar</a>
                        </div>
                    </div>

                    <div class=\"col-3 wow fadeInDown\">
                        <div class=\"beta-banner beta-banner-white\">
                            <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/images/banners/banner15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <h2 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 100,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [30, 30, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Nuevos</h2>
                            <p 
                                class=\"beta-banner-layer text-left\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 400,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"top\" : [80, 80, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >mostramos los <br /> productos nuevos</p>
                            <a 
                                class=\"beta-banner-layer beta-btn text-left beta-banner-white\" 
                                href=\"single_type_quote.html\"
                                data-animo='{
                                    \"duration\" : 1000,
                                    \"delay\" : 300,
                                    \"easing\" : \"easeOutSine\",
                                    \"template\" : {
                                        \"opacity\" : [0, 1],
                                        \"bottom\" : [25, 25, \"px\"],
                                        \"left\" : [-300, 70, \"px\"]
                                    }
                                }'
                            >Read More</a>
                        </div>
                    </div>
                </div> <!-- under slider 4 banners -->
                
                <div class=\"space60\">&nbsp;</div>
                <div class=\"row\">
                    <div class=\"col-lg-3 aside\">
                    ";
        // line 306
        $this->displayBlock('widget', $context, $blocks);
        // line 370
        echo "                    </div> <!-- .aside -->
                    <div class=\"col-lg-9\">
                    ";
        // line 372
        $this->displayBlock('contenido', $context, $blocks);
        // line 374
        echo "                    </div> 
                </div> <!-- end section with sidebar and main content -->       


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
";
    }

    // line 306
    public function block_widget($context, array $blocks = array())
    {
        // line 307
        echo "                        <div class=\"widget\">
                            <h3 class=\"widget-title\">Categorias</h3>
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled\">
                                ";
        // line 311
        if ((twig_length_filter($this->env, (isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias"))) > 0)) {
            echo "  
                                    ";
            // line 312
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 313
                echo "                                        <li>
                                            <label for=\"brands-abs\"><span></span><a href=\"";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria", array("id" => $this->getAttribute($context["categoria"], "id", array()), "name" => $this->getAttribute($context["categoria"], "descripcion", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "descripcion", array()), "html", null, true);
                echo "</a></label>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "        
                                ";
        }
        // line 317
        echo "                         
                                </ul>
                            </div>
                        </div> <!-- brands widget -->           
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">Rango de precios</h3>
                            <div class=\"widget-body\">
                                <div class=\"price-filter\">
                                <form action=\"";
        // line 325
        echo $this->env->getExtension('routing')->getPath("buscar_rango");
        echo "\" method=\"POST\">
                                    <div id=\"price-filter-range\"></div>  
                                    <input type=\"hidden\" id=\"rgMin\" value=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["minmax"]) ? $context["minmax"] : $this->getContext($context, "minmax")), "bajo", array()), "html", null, true);
        echo "\">   
                                    <input type=\"hidden\" id=\"rgMax\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["minmax"]) ? $context["minmax"] : $this->getContext($context, "minmax")), "alto", array()), "html", null, true);
        echo "\">   
                                    <input type=\"hidden\" id=\"rgTodo\" name=\"rgTodo\">                               
                                    <span class=\"pull-left\" >Precio: <span id=\"price-filter-amount\" style=\"text-align: right\"></span></span>
                                    <button type=\"submit\" class=\"beta-btn primary pull-right\">Buscar <i class=\"fa fa-chevron-right\"></i></button>
                                </form>    
                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div> <!-- price range widget -->
                        <div class=\"widget\">
                            <h3 class=\"widget-title \" id=\"dvMarcas\" >Marcas<span class=\"caret\"></span></h3>                            
                            <div class=\"widget-body\">
                                <ul class=\"list-unstyled \" id=\"ulMarcas\" style=\"display:none\">
                                    ";
        // line 341
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marcas"]) ? $context["marcas"] : $this->getContext($context, "marcas")));
        foreach ($context['_seq'] as $context["_key"] => $context["marca"]) {
            // line 342
            echo "                                        <li>
                                            <label for=\"brands-abs\"><span></span><a href=\"";
            // line 343
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("marca", array("id" => $this->getAttribute($context["marca"], "id", array()), "name" => twig_urlencode_filter($this->getAttribute($context["marca"], "descripcion", array())))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["marca"], "descripcion", array()), "html", null, true);
            echo "</a></label>
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "                                    
                                </ul>
                            </div>
                        </div> <!-- brands widget -->                       
                    ";
        // line 349
        if ((twig_length_filter($this->env, (isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas"))) > 0)) {
            echo "             
                                    
                        <div class=\"widget\">
                            <h3 class=\"widget-title\">Mas vendidos</h3>
                            <div class=\"widget-body\">
                                <div class=\"beta-sales beta-lists\">
                                ";
            // line 355
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 356
                echo "                                    <div class=\"media beta-sales-item\">
                                        <a class=\"pull-left\" href=\"";
                // line 357
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto", array("id" => $this->getAttribute($context["oferta"], "id", array()), "name" => ($this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()) . $this->getAttribute($context["oferta"], "anio", array())))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/slider/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "path", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["oferta"], "imagenes", array()), 0, array()), "titulo", array()), "html", null, true);
                echo "\"></a>
                                        <div class=\"media-body\">
                                            ";
                // line 359
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "modelo", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "anio", array()), "html", null, true);
                echo "
                                            <span class=\"beta-sales-price\">\$";
                // line 360
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio", array()), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "                                    
                                </div>
                            </div>
                        </div> <!-- best sellers widget -->
                    ";
        }
        // line 369
        echo "                    ";
    }

    // line 372
    public function block_contenido($context, array $blocks = array())
    {
        // line 373
        echo "                    ";
    }

    // line 382
    public function block_contsnMenu($context, array $blocks = array())
    {
    }

    // line 384
    public function block_footer($context, array $blocks = array())
    {
        // line 385
        echo "    <div id=\"footer\" class=\"color-div\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3\">
                    <div class=\"widget\">
                        <h4 class=\"widget-title\">Popular</h4>
                        <div id=\"beta-instagram-feed\"><div></div></div>
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"widget\">
                        <h4 class=\"widget-title\">Information</h4>
                        <div>
                            <ul>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> nombre</a></li>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> telefono</a></li>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> ventas</a></li>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> Tips</a></li>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> fotos</a></li>
                                <li><a href=\"blog_fullwidth_2col.html\"><i class=\"fa fa-chevron-right\"></i> mas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                 <div class=\"col-sm-10\">
                    <div class=\"widget\">
                        <h4 class=\"widget-title\">Contacto</h4>
                        <div>
                            <div class=\"contact-info\">
                                <i class=\"fa fa-map-marker\"></i>
                                <p>direccion del establecimiento</p>
                                <p>texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto text.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"widget\">
                        <h4 class=\"widget-title\">Suscríbete al boletin</h4>
                        <form action=\"#\" method=\"post\">
                            <input type=\"email\" id=\"elemail\" name=\"your_email\">
                            <input type=\"checkbox\" value=\"1\" name=\"terminos\" id=\"terminos\" style=\"display:block;float: left;padding: 6px 12px;\">
                            <a href=\"javascript:void(0)\" onclick=\"abrira()\" role=\"button\" class=\"btn\"  data-toggle=\"myModal2\">Acepto los terminos y condiciones</a>
                            <button class=\"pull-right\" id=\"btnNews\" type=\"button\">Subscribir <i class=\"fa fa-chevron-right\"></i></button>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- #footer -->
    <div class=\"copyright\">
        <div class=\"container\">
            <p class=\"pull-left\"><a href=\"javascript:void(0)\" onclick=\"abrirb()\" role=\"button\" class=\"btn\" data-toggle=\"myModal\">Politicas de privacidad. (&copy;) 2014</a></p>
            
            <div class=\"clearfix\"></div>
        </div> <!-- .container -->
    </div> <!-- .copyright -->
    <div id=\"myModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"  data-width=\"760\" style=\"display: none;\">>
          <div class=\"modal-content\"> 
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h2>Aviso de privacidad</h2>
        </div>       
            <div class=\"modal-body\">
               ";
        // line 451
        echo $this->getAttribute((isset($context["aviso"]) ? $context["aviso"] : $this->getContext($context, "aviso")), "aviso", array());
        echo "
            </div>
        
      </div>
    </div>
    <div id=\"myModal2\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" data-width=\"760\" style=\"display: none;\">>
        <div class=\"modal-content\">
         
       <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h2>Terminos y condiciones</h2>
        </div>
          <div class=\"modal-body\">
                ";
        // line 464
        echo $this->getAttribute((isset($context["aviso"]) ? $context["aviso"] : $this->getContext($context, "aviso")), "terminos", array());
        echo "
            </div>
       
      </div>
    </div>

    <!-- include js files -->
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
     <script type=\"text/javascript\">
  // \$( document ).ready(function() {
   function abrira() {
        jQuery('#myModal2').modal('show'); 
   }
   function abrirb() {
      jQuery('#myModal').modal('show');
   }
      
    // });     
    </script>
    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/bxslider/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/animo/Animo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/vendors/dug/dug.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/scripts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/styleswitcher.js"), "html", null, true);
        echo "\"></script>
    <!--customjs-->
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/dest/js/custom2.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery( document ).ready(function() {
   
        jQuery( \"#dvMarcas\" ).click(function() {
          jQuery( \"#ulMarcas\" ).toggle();
        });

        jQuery('#btnNews').click(function() {
           //\$( \"#form_poliza_new\" ).click();
           var regex = /[\\w-\\.]{2,}@([\\w-]{2,}\\.)*([\\w-]{2,}\\.)[\\w-]{2,4}/;
 
    //Se utiliza la funcion test() nativa de JavaScript
    if(jQuery(\"#terminos\").is(':checked')) {  
           // alert(\"Está activado\");  
        } else {  
            alert(\"Debes aceptar los terminos y condiciones\"); 
            return false; 
        } 
    if (regex.test(jQuery('#elemail').val().trim())) {
        //alert('Correo validado');    
           
             jQuery.ajax({
                        type: \"POST\",
                        dataType: \"Json\",
                        data:\"&email=\"+jQuery('#elemail').val(),
                        url: '";
        // line 522
        echo $this->env->getExtension('routing')->getPath("guardarnews");
        echo "',
                        beforeSend: function() {
                           jQuery('#preloader-formulario').show();             
                        },
                        success: function(response) {   
                            jQuery('#preloader-formulario').hide();  
                            //\$( \"#bodyPoliza\" ).append(response ); 
                            if(!response.funciono){
                                alert(\"ocurrio un error por favor verifica tus datos\");
                            }                        
                            
                            alert(\"Gracias por registrarte\");
                                                                                 
                             
                        },
                        error: function(xhr, ajaxOptions, thrownError) {}
                    });
        }
            else {
                alert('La direccion de correo no es valida');
            }

        });

    });

    </script>
    ";
        // line 549
        $this->displayBlock('unscrip', $context, $blocks);
        // line 551
        echo "</body>
</html>
";
    }

    // line 549
    public function block_unscrip($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  881 => 549,  875 => 551,  873 => 549,  843 => 522,  814 => 496,  809 => 494,  805 => 493,  801 => 492,  797 => 491,  793 => 490,  789 => 489,  785 => 488,  781 => 487,  777 => 486,  773 => 485,  757 => 472,  753 => 471,  743 => 464,  727 => 451,  659 => 385,  656 => 384,  651 => 382,  647 => 373,  644 => 372,  640 => 369,  633 => 364,  623 => 360,  617 => 359,  608 => 357,  605 => 356,  601 => 355,  592 => 349,  586 => 345,  575 => 343,  572 => 342,  568 => 341,  552 => 328,  548 => 327,  543 => 325,  533 => 317,  529 => 316,  518 => 314,  515 => 313,  511 => 312,  507 => 311,  501 => 307,  498 => 306,  487 => 374,  485 => 372,  481 => 370,  479 => 306,  428 => 258,  379 => 212,  330 => 166,  281 => 120,  270 => 111,  267 => 110,  262 => 108,  251 => 99,  241 => 95,  235 => 92,  229 => 89,  221 => 86,  217 => 84,  213 => 83,  206 => 78,  204 => 77,  201 => 76,  198 => 75,  192 => 10,  188 => 9,  183 => 8,  180 => 7,  168 => 67,  162 => 64,  156 => 61,  152 => 59,  149 => 58,  138 => 56,  133 => 55,  131 => 54,  125 => 51,  105 => 34,  92 => 24,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  57 => 12,  55 => 7,  48 => 2,  45 => 1,  41 => 554,  38 => 384,  36 => 382,  33 => 110,  30 => 75,  28 => 1,);
    }
}
