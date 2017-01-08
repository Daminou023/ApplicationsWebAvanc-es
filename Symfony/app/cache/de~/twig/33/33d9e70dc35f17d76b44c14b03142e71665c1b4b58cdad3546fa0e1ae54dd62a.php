<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_3c5b0ecacfb868453ba50249f5a51849a4bf6c5f8fa27dc7dc6347b983d41ccf extends Twig_Template
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
        $__internal_ec3d4615c106b06833cdaec8b0aef5cebd148907cf2ed2d47274a644c7bd7d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3d4615c106b06833cdaec8b0aef5cebd148907cf2ed2d47274a644c7bd7d6b->enter($__internal_ec3d4615c106b06833cdaec8b0aef5cebd148907cf2ed2d47274a644c7bd7d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ec3d4615c106b06833cdaec8b0aef5cebd148907cf2ed2d47274a644c7bd7d6b->leave($__internal_ec3d4615c106b06833cdaec8b0aef5cebd148907cf2ed2d47274a644c7bd7d6b_prof);

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
", "BlogBundle:Default:index.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
