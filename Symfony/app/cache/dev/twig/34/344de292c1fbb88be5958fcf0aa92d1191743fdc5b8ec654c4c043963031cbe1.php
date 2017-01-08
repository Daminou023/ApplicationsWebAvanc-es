<?php

/* BlogBundle:Default:listAuthors.html.twig */
class __TwigTemplate_4c62afbeba5935add022081659ba2154a9b22e97e91a99e764e13617610162ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d538352e502cdaa514caa1fae357284e3799b7ad18c41c5ed1f8af7a4e0a27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d538352e502cdaa514caa1fae357284e3799b7ad18c41c5ed1f8af7a4e0a27b->enter($__internal_9d538352e502cdaa514caa1fae357284e3799b7ad18c41c5ed1f8af7a4e0a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:listAuthors.html.twig"));

        // line 1
        echo "Welcome to the list authors page!";
        
        $__internal_9d538352e502cdaa514caa1fae357284e3799b7ad18c41c5ed1f8af7a4e0a27b->leave($__internal_9d538352e502cdaa514caa1fae357284e3799b7ad18c41c5ed1f8af7a4e0a27b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:listAuthors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Welcome to the list authors page!", "BlogBundle:Default:listAuthors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/listAuthors.html.twig");
    }
}
