<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7eafe5bca01e97aa98a4e7ac143116e7a79567a9cf0752f8532e891e9b311d83 extends Twig_Template
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
        $__internal_c37dc7f488d87028338eb578eb347a6d0c83e9d308184ece8a66b8cfc3f689ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37dc7f488d87028338eb578eb347a6d0c83e9d308184ece8a66b8cfc3f689ce->enter($__internal_c37dc7f488d87028338eb578eb347a6d0c83e9d308184ece8a66b8cfc3f689ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37dc7f488d87028338eb578eb347a6d0c83e9d308184ece8a66b8cfc3f689ce->leave($__internal_c37dc7f488d87028338eb578eb347a6d0c83e9d308184ece8a66b8cfc3f689ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b12d900903a9aa78fe687d0ab32e3cc2bcadf37c7ea0344aef9a94a00b5c008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12d900903a9aa78fe687d0ab32e3cc2bcadf37c7ea0344aef9a94a00b5c008c->enter($__internal_b12d900903a9aa78fe687d0ab32e3cc2bcadf37c7ea0344aef9a94a00b5c008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_b12d900903a9aa78fe687d0ab32e3cc2bcadf37c7ea0344aef9a94a00b5c008c->leave($__internal_b12d900903a9aa78fe687d0ab32e3cc2bcadf37c7ea0344aef9a94a00b5c008c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d503c4ed7c87fd7c717b53e948ded4bf427e40a8ca94d6714bb28275043a7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d503c4ed7c87fd7c717b53e948ded4bf427e40a8ca94d6714bb28275043a7bf->enter($__internal_8d503c4ed7c87fd7c717b53e948ded4bf427e40a8ca94d6714bb28275043a7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d503c4ed7c87fd7c717b53e948ded4bf427e40a8ca94d6714bb28275043a7bf->leave($__internal_8d503c4ed7c87fd7c717b53e948ded4bf427e40a8ca94d6714bb28275043a7bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73498582606a671b52b4b9f0f8513d767bacd57f1a6bd57c67601a3d7cf92a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73498582606a671b52b4b9f0f8513d767bacd57f1a6bd57c67601a3d7cf92a40->enter($__internal_73498582606a671b52b4b9f0f8513d767bacd57f1a6bd57c67601a3d7cf92a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73498582606a671b52b4b9f0f8513d767bacd57f1a6bd57c67601a3d7cf92a40->leave($__internal_73498582606a671b52b4b9f0f8513d767bacd57f1a6bd57c67601a3d7cf92a40_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
