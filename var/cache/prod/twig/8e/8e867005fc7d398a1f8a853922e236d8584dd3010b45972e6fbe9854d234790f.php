<?php

/* BlogBundle:Pages:about.html.twig */
class __TwigTemplate_10095ae8fc64541b815b24f36679c1843fd65373d776ee43ede872e2fa32a155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:Pages:about.html.twig", 1);
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
        return "BlogBundle:Pages:about.html.twig";
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
