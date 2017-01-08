<?php

/* BlogBundle:Default:authors.html.twig */
class __TwigTemplate_ab58c623408cb683f8ab533ee345baf7f17bb35276e0baefc143f10be5dd7dd0 extends Twig_Template
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
        $__internal_b626c2fca125938935060c1c1cc90b7213eb0345384157370fc605343b5a3aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b626c2fca125938935060c1c1cc90b7213eb0345384157370fc605343b5a3aa4->enter($__internal_b626c2fca125938935060c1c1cc90b7213eb0345384157370fc605343b5a3aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:authors.html.twig"));

        // line 1
        echo "Welcome to the Author Page!";
        
        $__internal_b626c2fca125938935060c1c1cc90b7213eb0345384157370fc605343b5a3aa4->leave($__internal_b626c2fca125938935060c1c1cc90b7213eb0345384157370fc605343b5a3aa4_prof);

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
        return new Twig_Source("Welcome to the Author Page!", "BlogBundle:Default:authors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/src/BlogBundle/Resources/views/Default/authors.html.twig");
    }
}
