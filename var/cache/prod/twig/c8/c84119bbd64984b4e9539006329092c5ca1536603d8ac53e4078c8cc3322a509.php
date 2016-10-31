<?php

/* BlogBundle:Pages:layout.html.twig */
class __TwigTemplate_5dcf502e089c7a5c589c818aad13df5dcfe2eb5eea7614ad230d92d6c1d13d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Pages:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main_menu' => array($this, 'block_main_menu'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('main_menu', $context, $blocks);
        // line 10
        echo "    <h1>";
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
    <p>";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        echo "</p>
";
    }

    // line 4
    public function block_main_menu($context, array $blocks = array())
    {
        // line 5
        echo "        <ul>
         <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("create_prod");
        echo "\">Главная</a></li>
         <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("blog_about");
        echo "\">О нас</a></li>
        </ul>
    ";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "BlogBundle:Pages:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  65 => 10,  58 => 7,  54 => 6,  51 => 5,  48 => 4,  42 => 11,  37 => 10,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% block main_menu %}*/
/*         <ul>*/
/*          <li><a href="{{ path('create_prod') }}">Главная</a></li>*/
/*          <li><a href="{{ path('blog_about') }}">О нас</a></li>*/
/*         </ul>*/
/*     {% endblock %}*/
/*     <h1>{% block page_title %}{% endblock %}</h1>*/
/*     <p>{% block content %}{% endblock %}</p>*/
/* {% endblock %}*/
