<?php

/* ::page.html.twig */
class __TwigTemplate_979f0f5df9be215498ddf9d98969d07abf1e30cc904f83193fbe07c976763911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'logo' => array($this, 'block_logo'),
            'main_menu' => array($this, 'block_main_menu'),
            'content' => array($this, 'block_content'),
            'site_title' => array($this, 'block_site_title'),
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
            'futer' => array($this, 'block_futer'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('futer', $context, $blocks);
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"header\" role=\"header\">
            <div class=\"logo-header\">
                ";
        // line 6
        $this->displayBlock('logo', $context, $blocks);
        // line 14
        echo "                ";
        $this->displayBlock('main_menu', $context, $blocks);
        // line 23
        echo "            </div>
        </div>
    ";
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        // line 7
        echo "                    <div class=\"block block-logo\">
                            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/images/hornet_logo_sign.png"), "html", null, true);
        echo "\"></a>
                    </div>
                    <div class=\"block block-logo-rev\">
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/images/hornet_logo_rev.png"), "html", null, true);
        echo "\"></a>
                    </div>
                ";
    }

    // line 14
    public function block_main_menu($context, array $blocks = array())
    {
        // line 15
        echo "                    <div class=\"main_menu\" id=\"menu_main_menu\">
                        <ul>
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\">Main</a></li>
                            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("blog_about");
        echo "\">About me</a></li>
                            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("create_index");
        echo "\">Admin area</a></li>
                        </ul>
                    </div>
                ";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "        <div class=\"main_container\">
            ";
        // line 29
        $this->displayBlock('site_title', $context, $blocks);
        // line 34
        echo "            <main>
                ";
        // line 35
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "            </main>
        </div>
    ";
    }

    // line 29
    public function block_site_title($context, array $blocks = array())
    {
        // line 30
        echo "                <div class=\"page title\" id=\"page_title\">
                    <h1>";
        // line 31
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
                </div>
            ";
    }

    public function block_page_title($context, array $blocks = array())
    {
        echo "Page title";
    }

    // line 35
    public function block_main($context, array $blocks = array())
    {
        // line 36
        echo "                    Чтота
                ";
    }

    // line 42
    public function block_futer($context, array $blocks = array())
    {
        // line 43
        echo "        <footer role=\"contentinfo\">
            <div class=\"block block-copyright\">
                Produced by Harnet 2016. All right reserved.
            </div>
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "::page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 43,  163 => 42,  158 => 36,  155 => 35,  143 => 31,  140 => 30,  137 => 29,  131 => 38,  129 => 35,  126 => 34,  124 => 29,  121 => 28,  118 => 27,  110 => 19,  106 => 18,  102 => 17,  98 => 15,  95 => 14,  86 => 11,  78 => 8,  75 => 7,  72 => 6,  66 => 23,  63 => 14,  61 => 6,  57 => 4,  54 => 3,  50 => 42,  47 => 41,  45 => 27,  42 => 26,  39 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/*     {% block header %}*/
/*         <div class="header" role="header">*/
/*             <div class="logo-header">*/
/*                 {% block logo %}*/
/*                     <div class="block block-logo">*/
/*                             <a href="{{ path('create_prod') }}"><img src="{{asset("bundles/BlogBundle/images/hornet_logo_sign.png") }}"></a>*/
/*                     </div>*/
/*                     <div class="block block-logo-rev">*/
/*                         <a href="{{ path('create_prod') }}"><img src="{{asset("bundles/BlogBundle/images/hornet_logo_rev.png") }}"></a>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*                 {% block main_menu %}*/
/*                     <div class="main_menu" id="menu_main_menu">*/
/*                         <ul>*/
/*                             <li><a href="{{ path('create_prod') }}">Main</a></li>*/
/*                             <li><a href="{{ path('blog_about') }}">About me</a></li>*/
/*                             <li><a href="{{ path('create_index') }}">Admin area</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*         <div class="main_container">*/
/*             {% block site_title %}*/
/*                 <div class="page title" id="page_title">*/
/*                     <h1>{% block page_title %}Page title{% endblock %}</h1>*/
/*                 </div>*/
/*             {% endblock %}*/
/*             <main>*/
/*                 {% block main %}*/
/*                     Чтота*/
/*                 {% endblock %}*/
/*             </main>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/*     {% block futer %}*/
/*         <footer role="contentinfo">*/
/*             <div class="block block-copyright">*/
/*                 Produced by Harnet 2016. All right reserved.*/
/*             </div>*/
/*         </footer>*/
/*     {% endblock %}*/
/* {% endblock %}*/
