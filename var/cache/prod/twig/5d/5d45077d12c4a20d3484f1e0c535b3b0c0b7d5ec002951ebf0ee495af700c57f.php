<?php

/* @Blog/Pages/about.html.twig */
class __TwigTemplate_44b902f4bb6e927c108bae34d94792046e34309881a75943da9174117b8fd5fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "@Blog/Pages/about.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        echo "About us";
    }

    public function getTemplateName()
    {
        return "@Blog/Pages/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/* {% block page_title %}About us{% endblock %}*/
/* */
