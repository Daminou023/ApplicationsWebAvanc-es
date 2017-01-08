<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_1da0239b12e07f8280c8c9c4b190be575de3fdef246f5ea8f88d222f56db4d76 extends Twig_Template
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
        $__internal_a27e9cdbcaeba439e97b9bbe124dd5b31415a8fddb74f60b86c51246d1846f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27e9cdbcaeba439e97b9bbe124dd5b31415a8fddb74f60b86c51246d1846f1c->enter($__internal_a27e9cdbcaeba439e97b9bbe124dd5b31415a8fddb74f60b86c51246d1846f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a27e9cdbcaeba439e97b9bbe124dd5b31415a8fddb74f60b86c51246d1846f1c->leave($__internal_a27e9cdbcaeba439e97b9bbe124dd5b31415a8fddb74f60b86c51246d1846f1c_prof);

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
", "BlogBundle:Default:index.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
