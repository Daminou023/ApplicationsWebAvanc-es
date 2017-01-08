<?php

/* BlogBundle:Default:addAuthors.html.twig */
class __TwigTemplate_119cff458159eb069d8c69cc5d76027f382272845e28d41f2b7cbd37b5d84024 extends Twig_Template
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
        $__internal_039bb59d69bb677c3c5fe87e0e4574cfad6d3bb1d828ea588814be51bd011ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039bb59d69bb677c3c5fe87e0e4574cfad6d3bb1d828ea588814be51bd011ea5->enter($__internal_039bb59d69bb677c3c5fe87e0e4574cfad6d3bb1d828ea588814be51bd011ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addAuthors.html.twig"));

        // line 1
        echo "welcome to the add authors page
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_039bb59d69bb677c3c5fe87e0e4574cfad6d3bb1d828ea588814be51bd011ea5->leave($__internal_039bb59d69bb677c3c5fe87e0e4574cfad6d3bb1d828ea588814be51bd011ea5_prof);

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
{{form(form)}}", "BlogBundle:Default:addAuthors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/src/BlogBundle/Resources/views/Default/addAuthors.html.twig");
    }
}
