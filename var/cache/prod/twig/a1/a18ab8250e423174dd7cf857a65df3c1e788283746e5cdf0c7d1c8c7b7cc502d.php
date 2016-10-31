<?php

/* @Blog/post/showpost.html.twig */
class __TwigTemplate_a2cdd9bc81c152dd9c26a277cdfd631a5e3ce5d299e83eb4596cb93f1b502760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "@Blog/post/showpost.html.twig", 1);
        $this->blocks = array(
            'site_title' => array($this, 'block_site_title'),
            'main' => array($this, 'block_main'),
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
    public function block_site_title($context, array $blocks = array())
    {
        // line 3
        echo "         <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array())), "html", null, true);
        echo "</h2>
     ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "              <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "description", array()), "html", null, true);
        echo "</p>
             <p>";
        // line 7
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "datetime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "datetime", array()), "Y-m-d H:i"), "html", null, true);
        }
        echo "</p>
     ";
    }

    public function getTemplateName()
    {
        return "@Blog/post/showpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::page.html.twig' %}*/
/*      {% block site_title %}*/
/*          <h2>{{ post.title|upper }}</h2>*/
/*      {% endblock %}*/
/*      {% block main %}*/
/*               <p>{{ post.description }}</p>*/
/*              <p>{% if post.datetime %}{{ post.datetime|date('Y-m-d H:i') }}{% endif %}</p>*/
/*      {% endblock %}*/
