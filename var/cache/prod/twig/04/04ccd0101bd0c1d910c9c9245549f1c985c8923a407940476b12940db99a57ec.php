<?php

/* BlogBundle:Blog:blog.html.twig */
class __TwigTemplate_3db12f28680082a375f7d482a00527c6d6d3b5a07f0cf71b9f15b45b70a86d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Blog:blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "        <h1>Мой блог</h1>
    ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* 	{% block body %}*/
/*         <h1>Мой блог</h1>*/
/*     {% endblock %}*/
