<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f7035d455e5af1ad9ada534d0c17d696a249a2d8b3c1e87676a7f8bcafd4337c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a320c04a7b4000a50c801c1761e311a34101ebd35a8d27d2599411cb2bed61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a320c04a7b4000a50c801c1761e311a34101ebd35a8d27d2599411cb2bed61f->enter($__internal_5a320c04a7b4000a50c801c1761e311a34101ebd35a8d27d2599411cb2bed61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a320c04a7b4000a50c801c1761e311a34101ebd35a8d27d2599411cb2bed61f->leave($__internal_5a320c04a7b4000a50c801c1761e311a34101ebd35a8d27d2599411cb2bed61f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3292c1b3d5f384ee03cf4ec025751c5e9719240dbf6a4e0d55b56494d4d300f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3292c1b3d5f384ee03cf4ec025751c5e9719240dbf6a4e0d55b56494d4d300f7->enter($__internal_3292c1b3d5f384ee03cf4ec025751c5e9719240dbf6a4e0d55b56494d4d300f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3292c1b3d5f384ee03cf4ec025751c5e9719240dbf6a4e0d55b56494d4d300f7->leave($__internal_3292c1b3d5f384ee03cf4ec025751c5e9719240dbf6a4e0d55b56494d4d300f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dec1100c42453b0be7a10be49ab2bb654ac2e80775931ddb813e43f89e359fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec1100c42453b0be7a10be49ab2bb654ac2e80775931ddb813e43f89e359fc2->enter($__internal_dec1100c42453b0be7a10be49ab2bb654ac2e80775931ddb813e43f89e359fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dec1100c42453b0be7a10be49ab2bb654ac2e80775931ddb813e43f89e359fc2->leave($__internal_dec1100c42453b0be7a10be49ab2bb654ac2e80775931ddb813e43f89e359fc2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede316202b2baa32d26f22c1b6325e12263b2094bf27641d8dd31269043aa043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede316202b2baa32d26f22c1b6325e12263b2094bf27641d8dd31269043aa043->enter($__internal_ede316202b2baa32d26f22c1b6325e12263b2094bf27641d8dd31269043aa043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ede316202b2baa32d26f22c1b6325e12263b2094bf27641d8dd31269043aa043->leave($__internal_ede316202b2baa32d26f22c1b6325e12263b2094bf27641d8dd31269043aa043_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
