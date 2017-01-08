<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_978e019150cae4dc8cc5a460aa332e4538e414be2485f9b82013e6b75a262c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6500cd78cffbe674f97e66bb1725edb893e099a57c4c9d1e17e1efcfcc2bb055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6500cd78cffbe674f97e66bb1725edb893e099a57c4c9d1e17e1efcfcc2bb055->enter($__internal_6500cd78cffbe674f97e66bb1725edb893e099a57c4c9d1e17e1efcfcc2bb055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6500cd78cffbe674f97e66bb1725edb893e099a57c4c9d1e17e1efcfcc2bb055->leave($__internal_6500cd78cffbe674f97e66bb1725edb893e099a57c4c9d1e17e1efcfcc2bb055_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_949c0075abaf2e24ef72efbcb48fd96f7a5dad28e61f2bfa0deee53575e42ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949c0075abaf2e24ef72efbcb48fd96f7a5dad28e61f2bfa0deee53575e42ceb->enter($__internal_949c0075abaf2e24ef72efbcb48fd96f7a5dad28e61f2bfa0deee53575e42ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_949c0075abaf2e24ef72efbcb48fd96f7a5dad28e61f2bfa0deee53575e42ceb->leave($__internal_949c0075abaf2e24ef72efbcb48fd96f7a5dad28e61f2bfa0deee53575e42ceb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3395169669b61736bcc5691e1b13305b91f9c3758fa0a182d93d7691f269c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3395169669b61736bcc5691e1b13305b91f9c3758fa0a182d93d7691f269c7c->enter($__internal_e3395169669b61736bcc5691e1b13305b91f9c3758fa0a182d93d7691f269c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3395169669b61736bcc5691e1b13305b91f9c3758fa0a182d93d7691f269c7c->leave($__internal_e3395169669b61736bcc5691e1b13305b91f9c3758fa0a182d93d7691f269c7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b426322fe04a84dea82371029110948b031f89e275a105862dddbd21aa65bd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b426322fe04a84dea82371029110948b031f89e275a105862dddbd21aa65bd5b->enter($__internal_b426322fe04a84dea82371029110948b031f89e275a105862dddbd21aa65bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b426322fe04a84dea82371029110948b031f89e275a105862dddbd21aa65bd5b->leave($__internal_b426322fe04a84dea82371029110948b031f89e275a105862dddbd21aa65bd5b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
