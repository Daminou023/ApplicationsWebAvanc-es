<?php

/* BlogBundle:Default:authors.html.twig */
class __TwigTemplate_87e9f33d1674afdbc4e693b9d9ec50ac91abf75d44ec1a87c393690d87736916 extends Twig_Template
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
        $__internal_7028cc6020a32a978198305ff16cc0f5efe33933f8a7ef039af6514e787f12e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7028cc6020a32a978198305ff16cc0f5efe33933f8a7ef039af6514e787f12e3->enter($__internal_7028cc6020a32a978198305ff16cc0f5efe33933f8a7ef039af6514e787f12e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:authors.html.twig"));

        // line 1
        echo "Welcome to the Author Page!";
        
        $__internal_7028cc6020a32a978198305ff16cc0f5efe33933f8a7ef039af6514e787f12e3->leave($__internal_7028cc6020a32a978198305ff16cc0f5efe33933f8a7ef039af6514e787f12e3_prof);

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
        return new Twig_Source("Welcome to the Author Page!", "BlogBundle:Default:authors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/authors.html.twig");
    }
}
