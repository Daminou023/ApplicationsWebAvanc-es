<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_acb407ed0bc2a9af6e3eb84115cb55ea091e2b990984509077ef8ddb475ebc0d extends Twig_Template
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
        $__internal_450b630d8013fdd1f0f21eb3fb22f79e8bd8f6c575724a9f90f593c2258fc98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450b630d8013fdd1f0f21eb3fb22f79e8bd8f6c575724a9f90f593c2258fc98f->enter($__internal_450b630d8013fdd1f0f21eb3fb22f79e8bd8f6c575724a9f90f593c2258fc98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_450b630d8013fdd1f0f21eb3fb22f79e8bd8f6c575724a9f90f593c2258fc98f->leave($__internal_450b630d8013fdd1f0f21eb3fb22f79e8bd8f6c575724a9f90f593c2258fc98f_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BlogBundle:Default:index.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
