<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46f7acc8722f776da8d23dce4349788a821dd58bf472d59e9a03b6d629510a2d extends Twig_Template
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
        $__internal_5867a2f8841e595475a9c7bc4d5174321d6f34e874706bcbd0635e93a2647229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5867a2f8841e595475a9c7bc4d5174321d6f34e874706bcbd0635e93a2647229->enter($__internal_5867a2f8841e595475a9c7bc4d5174321d6f34e874706bcbd0635e93a2647229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5867a2f8841e595475a9c7bc4d5174321d6f34e874706bcbd0635e93a2647229->leave($__internal_5867a2f8841e595475a9c7bc4d5174321d6f34e874706bcbd0635e93a2647229_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b035091d89cc4a0a19638d40a3405d23a2a321990be9206bcaeb198b57d8cc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b035091d89cc4a0a19638d40a3405d23a2a321990be9206bcaeb198b57d8cc4a->enter($__internal_b035091d89cc4a0a19638d40a3405d23a2a321990be9206bcaeb198b57d8cc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_b035091d89cc4a0a19638d40a3405d23a2a321990be9206bcaeb198b57d8cc4a->leave($__internal_b035091d89cc4a0a19638d40a3405d23a2a321990be9206bcaeb198b57d8cc4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d296b492e45537b84be2988593e89af91b10b595ef42d05b2102f3310a41aefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d296b492e45537b84be2988593e89af91b10b595ef42d05b2102f3310a41aefd->enter($__internal_d296b492e45537b84be2988593e89af91b10b595ef42d05b2102f3310a41aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d296b492e45537b84be2988593e89af91b10b595ef42d05b2102f3310a41aefd->leave($__internal_d296b492e45537b84be2988593e89af91b10b595ef42d05b2102f3310a41aefd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d01bc8c195a356c3a1d5754f20166ca60c5f787b49a257891bb848ecc35812f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01bc8c195a356c3a1d5754f20166ca60c5f787b49a257891bb848ecc35812f6->enter($__internal_d01bc8c195a356c3a1d5754f20166ca60c5f787b49a257891bb848ecc35812f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d01bc8c195a356c3a1d5754f20166ca60c5f787b49a257891bb848ecc35812f6->leave($__internal_d01bc8c195a356c3a1d5754f20166ca60c5f787b49a257891bb848ecc35812f6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
