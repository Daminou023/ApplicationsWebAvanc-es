<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_fe36de3ae57a2e9e0df12201ad3f0f3b9f869455790821d56a1cb7678703a7f4 extends Twig_Template
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
        $__internal_61a1e289e05d89f5f3e7a50e917a6e03b77f66848da2de4cab2104b60b260c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a1e289e05d89f5f3e7a50e917a6e03b77f66848da2de4cab2104b60b260c28->enter($__internal_61a1e289e05d89f5f3e7a50e917a6e03b77f66848da2de4cab2104b60b260c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_61a1e289e05d89f5f3e7a50e917a6e03b77f66848da2de4cab2104b60b260c28->leave($__internal_61a1e289e05d89f5f3e7a50e917a6e03b77f66848da2de4cab2104b60b260c28_prof);

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
