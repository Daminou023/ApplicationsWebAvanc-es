<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d29b6a4ac1b47052ac371e70f060d4f35852d927f12de135f090aad2107aa803 extends Twig_Template
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
        $__internal_3f1356593ef125d2cf8c0117e3ce8ca3ed6691103186710324a9897012aff19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1356593ef125d2cf8c0117e3ce8ca3ed6691103186710324a9897012aff19e->enter($__internal_3f1356593ef125d2cf8c0117e3ce8ca3ed6691103186710324a9897012aff19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1356593ef125d2cf8c0117e3ce8ca3ed6691103186710324a9897012aff19e->leave($__internal_3f1356593ef125d2cf8c0117e3ce8ca3ed6691103186710324a9897012aff19e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d62ff04a8d5d0883f0e9ae0e05745a8fe6dff2b0610bf53a47750312b59f45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d62ff04a8d5d0883f0e9ae0e05745a8fe6dff2b0610bf53a47750312b59f45e->enter($__internal_0d62ff04a8d5d0883f0e9ae0e05745a8fe6dff2b0610bf53a47750312b59f45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0d62ff04a8d5d0883f0e9ae0e05745a8fe6dff2b0610bf53a47750312b59f45e->leave($__internal_0d62ff04a8d5d0883f0e9ae0e05745a8fe6dff2b0610bf53a47750312b59f45e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_370e9e146fa610c73af56f89040f06a7a2dc5f035b06f435ef6e1fbc4f463e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370e9e146fa610c73af56f89040f06a7a2dc5f035b06f435ef6e1fbc4f463e1c->enter($__internal_370e9e146fa610c73af56f89040f06a7a2dc5f035b06f435ef6e1fbc4f463e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_370e9e146fa610c73af56f89040f06a7a2dc5f035b06f435ef6e1fbc4f463e1c->leave($__internal_370e9e146fa610c73af56f89040f06a7a2dc5f035b06f435ef6e1fbc4f463e1c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e495d20548f413b3be9665e5bc2b626c5be6f359ed46767d8091a466bad6b31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e495d20548f413b3be9665e5bc2b626c5be6f359ed46767d8091a466bad6b31c->enter($__internal_e495d20548f413b3be9665e5bc2b626c5be6f359ed46767d8091a466bad6b31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e495d20548f413b3be9665e5bc2b626c5be6f359ed46767d8091a466bad6b31c->leave($__internal_e495d20548f413b3be9665e5bc2b626c5be6f359ed46767d8091a466bad6b31c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
