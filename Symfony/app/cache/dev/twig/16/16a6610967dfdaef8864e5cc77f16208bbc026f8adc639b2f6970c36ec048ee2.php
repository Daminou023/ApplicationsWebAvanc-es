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
        $__internal_a2b9b83561b3f2a9c9e22e71dc4cd0e9ac11fc16e77b9acb72e99cc9c8f7d2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b9b83561b3f2a9c9e22e71dc4cd0e9ac11fc16e77b9acb72e99cc9c8f7d2fb->enter($__internal_a2b9b83561b3f2a9c9e22e71dc4cd0e9ac11fc16e77b9acb72e99cc9c8f7d2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a2b9b83561b3f2a9c9e22e71dc4cd0e9ac11fc16e77b9acb72e99cc9c8f7d2fb->leave($__internal_a2b9b83561b3f2a9c9e22e71dc4cd0e9ac11fc16e77b9acb72e99cc9c8f7d2fb_prof);

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
