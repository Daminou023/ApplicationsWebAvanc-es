<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e8ba5011b57b61d703f0954fa0813d8c59824129757d4bdd6a1e872cf6f6992 extends Twig_Template
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
        $__internal_b76a400eefef6de8433686f27fa8bae92a86ddd5aa50bbe6358985b14fb538cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76a400eefef6de8433686f27fa8bae92a86ddd5aa50bbe6358985b14fb538cf->enter($__internal_b76a400eefef6de8433686f27fa8bae92a86ddd5aa50bbe6358985b14fb538cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76a400eefef6de8433686f27fa8bae92a86ddd5aa50bbe6358985b14fb538cf->leave($__internal_b76a400eefef6de8433686f27fa8bae92a86ddd5aa50bbe6358985b14fb538cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d3b268633cc193a9678c652f9c0887f5e90ee7e5c79974a9a0366d32d6e3270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3b268633cc193a9678c652f9c0887f5e90ee7e5c79974a9a0366d32d6e3270->enter($__internal_9d3b268633cc193a9678c652f9c0887f5e90ee7e5c79974a9a0366d32d6e3270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d3b268633cc193a9678c652f9c0887f5e90ee7e5c79974a9a0366d32d6e3270->leave($__internal_9d3b268633cc193a9678c652f9c0887f5e90ee7e5c79974a9a0366d32d6e3270_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_176494bc7df92c5823e2372b8a248c9c1c6b5103fad3b4f8594e6b2ee73d2eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176494bc7df92c5823e2372b8a248c9c1c6b5103fad3b4f8594e6b2ee73d2eef->enter($__internal_176494bc7df92c5823e2372b8a248c9c1c6b5103fad3b4f8594e6b2ee73d2eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_176494bc7df92c5823e2372b8a248c9c1c6b5103fad3b4f8594e6b2ee73d2eef->leave($__internal_176494bc7df92c5823e2372b8a248c9c1c6b5103fad3b4f8594e6b2ee73d2eef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_035db076a1840eca02c41532acc2a976fad77dece719b4dd47fd1b0b1f9565d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035db076a1840eca02c41532acc2a976fad77dece719b4dd47fd1b0b1f9565d7->enter($__internal_035db076a1840eca02c41532acc2a976fad77dece719b4dd47fd1b0b1f9565d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_035db076a1840eca02c41532acc2a976fad77dece719b4dd47fd1b0b1f9565d7->leave($__internal_035db076a1840eca02c41532acc2a976fad77dece719b4dd47fd1b0b1f9565d7_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
