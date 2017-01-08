<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b651c58b76b4a410fa46f8ab637a5912911c26657fb36b017ef60f370716b363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e70fa14b85c5d75bba7c10d2b831969f24fd3be865fa2e32f610e610c9e5a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e70fa14b85c5d75bba7c10d2b831969f24fd3be865fa2e32f610e610c9e5a82->enter($__internal_0e70fa14b85c5d75bba7c10d2b831969f24fd3be865fa2e32f610e610c9e5a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e70fa14b85c5d75bba7c10d2b831969f24fd3be865fa2e32f610e610c9e5a82->leave($__internal_0e70fa14b85c5d75bba7c10d2b831969f24fd3be865fa2e32f610e610c9e5a82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46e0f265b44d941fe3b8b5093e6d176c1c21b1e7fec749c4a268f54ecc8d9b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e0f265b44d941fe3b8b5093e6d176c1c21b1e7fec749c4a268f54ecc8d9b34->enter($__internal_46e0f265b44d941fe3b8b5093e6d176c1c21b1e7fec749c4a268f54ecc8d9b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_46e0f265b44d941fe3b8b5093e6d176c1c21b1e7fec749c4a268f54ecc8d9b34->leave($__internal_46e0f265b44d941fe3b8b5093e6d176c1c21b1e7fec749c4a268f54ecc8d9b34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db1585ae1450fdc2dd47b3c27c7f7c45ee2e8f9353b2b8f2e56db9ffa751c25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1585ae1450fdc2dd47b3c27c7f7c45ee2e8f9353b2b8f2e56db9ffa751c25d->enter($__internal_db1585ae1450fdc2dd47b3c27c7f7c45ee2e8f9353b2b8f2e56db9ffa751c25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db1585ae1450fdc2dd47b3c27c7f7c45ee2e8f9353b2b8f2e56db9ffa751c25d->leave($__internal_db1585ae1450fdc2dd47b3c27c7f7c45ee2e8f9353b2b8f2e56db9ffa751c25d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9267053cf7e5e29c168737d4cefc18c7b7d4990403dd73ce8d3fccc0ca888f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9267053cf7e5e29c168737d4cefc18c7b7d4990403dd73ce8d3fccc0ca888f40->enter($__internal_9267053cf7e5e29c168737d4cefc18c7b7d4990403dd73ce8d3fccc0ca888f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9267053cf7e5e29c168737d4cefc18c7b7d4990403dd73ce8d3fccc0ca888f40->leave($__internal_9267053cf7e5e29c168737d4cefc18c7b7d4990403dd73ce8d3fccc0ca888f40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
