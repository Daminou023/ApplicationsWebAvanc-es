<?php

/* BlogBundle:Default:addAuthors.html.twig */
class __TwigTemplate_7281ddbae055b7621c1114b4fd7e1dbb95c12802d60d4ed506bd4a9d4a6f6224 extends Twig_Template
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
        $__internal_c6e23cae136bb3156a7c9701c493eb47eb4d99b41e5efc81b0d1852d803c5623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e23cae136bb3156a7c9701c493eb47eb4d99b41e5efc81b0d1852d803c5623->enter($__internal_c6e23cae136bb3156a7c9701c493eb47eb4d99b41e5efc81b0d1852d803c5623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addAuthors.html.twig"));

        // line 1
        echo "welcome to the add authors page
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_c6e23cae136bb3156a7c9701c493eb47eb4d99b41e5efc81b0d1852d803c5623->leave($__internal_c6e23cae136bb3156a7c9701c493eb47eb4d99b41e5efc81b0d1852d803c5623_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:addAuthors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("welcome to the add authors page
{{form(form)}}", "BlogBundle:Default:addAuthors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/addAuthors.html.twig");
    }
}
