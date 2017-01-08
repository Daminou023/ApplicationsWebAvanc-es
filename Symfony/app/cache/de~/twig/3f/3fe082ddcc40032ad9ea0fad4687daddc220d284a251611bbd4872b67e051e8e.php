<?php

/* BlogBundle:Default:authors.html.twig */
class __TwigTemplate_880cf8c55ed292219bdd6be91e47e49f87ae9b0b4b43f5270b3fad216515682f extends Twig_Template
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
        $__internal_33216f9fb87b7782630a8d81d8b52f64f040e6190fd98a09a54dd9c1c32631d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33216f9fb87b7782630a8d81d8b52f64f040e6190fd98a09a54dd9c1c32631d2->enter($__internal_33216f9fb87b7782630a8d81d8b52f64f040e6190fd98a09a54dd9c1c32631d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:authors.html.twig"));

        // line 1
        echo "Welcome to the Author Page!";
        
        $__internal_33216f9fb87b7782630a8d81d8b52f64f040e6190fd98a09a54dd9c1c32631d2->leave($__internal_33216f9fb87b7782630a8d81d8b52f64f040e6190fd98a09a54dd9c1c32631d2_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:authors.html.twig";
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
        return new Twig_Source("Welcome to the Author Page!", "BlogBundle:Default:authors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/src/BlogBundle/Resources/views/Default/authors.html.twig");
    }
}
