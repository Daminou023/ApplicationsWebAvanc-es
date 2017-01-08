<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_558c438045ee82f5694f00a333010243eada38c1a46d581f2132d5bd0dcc2a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_53c71c4511307aaf12ed7e1c186e933f8e28f4804a569210b47ce8b6a1bbcd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c71c4511307aaf12ed7e1c186e933f8e28f4804a569210b47ce8b6a1bbcd28->enter($__internal_53c71c4511307aaf12ed7e1c186e933f8e28f4804a569210b47ce8b6a1bbcd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c71c4511307aaf12ed7e1c186e933f8e28f4804a569210b47ce8b6a1bbcd28->leave($__internal_53c71c4511307aaf12ed7e1c186e933f8e28f4804a569210b47ce8b6a1bbcd28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_890577434833dbe2a1b3f08e800140ab553cb90f9d3d4a086870f8609601bf79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890577434833dbe2a1b3f08e800140ab553cb90f9d3d4a086870f8609601bf79->enter($__internal_890577434833dbe2a1b3f08e800140ab553cb90f9d3d4a086870f8609601bf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_890577434833dbe2a1b3f08e800140ab553cb90f9d3d4a086870f8609601bf79->leave($__internal_890577434833dbe2a1b3f08e800140ab553cb90f9d3d4a086870f8609601bf79_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae02e53e0db754663d8ecd9020a162fae39384dcfeee963789aa25162038adb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae02e53e0db754663d8ecd9020a162fae39384dcfeee963789aa25162038adb0->enter($__internal_ae02e53e0db754663d8ecd9020a162fae39384dcfeee963789aa25162038adb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae02e53e0db754663d8ecd9020a162fae39384dcfeee963789aa25162038adb0->leave($__internal_ae02e53e0db754663d8ecd9020a162fae39384dcfeee963789aa25162038adb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
