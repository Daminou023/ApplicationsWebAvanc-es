<?php

/* BlogBundle:Default:listAuthors.html.twig */
class __TwigTemplate_629d80c793b47c8dc378f622a5c094040d98c36eec0c4da0442291db8e4f8d94 extends Twig_Template
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
        $__internal_bee4a6995eaa4e8fdf0ffc1909eef632b34289d8c98d067bf846f8d916e8cb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee4a6995eaa4e8fdf0ffc1909eef632b34289d8c98d067bf846f8d916e8cb72->enter($__internal_bee4a6995eaa4e8fdf0ffc1909eef632b34289d8c98d067bf846f8d916e8cb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:listAuthors.html.twig"));

        // line 1
        echo "Welcome to the list authors page!";
        
        $__internal_bee4a6995eaa4e8fdf0ffc1909eef632b34289d8c98d067bf846f8d916e8cb72->leave($__internal_bee4a6995eaa4e8fdf0ffc1909eef632b34289d8c98d067bf846f8d916e8cb72_prof);

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
        return new Twig_Source("Welcome to the list authors page!", "BlogBundle:Default:listAuthors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/src/BlogBundle/Resources/views/Default/listAuthors.html.twig");
    }
}
