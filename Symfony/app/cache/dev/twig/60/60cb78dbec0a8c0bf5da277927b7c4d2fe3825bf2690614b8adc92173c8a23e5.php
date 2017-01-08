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
        $__internal_257b7ebda8d0ecb658a93dced80130b247489dd9f9f7260f62eaa5f0dcb9a11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257b7ebda8d0ecb658a93dced80130b247489dd9f9f7260f62eaa5f0dcb9a11c->enter($__internal_257b7ebda8d0ecb658a93dced80130b247489dd9f9f7260f62eaa5f0dcb9a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257b7ebda8d0ecb658a93dced80130b247489dd9f9f7260f62eaa5f0dcb9a11c->leave($__internal_257b7ebda8d0ecb658a93dced80130b247489dd9f9f7260f62eaa5f0dcb9a11c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4162633901767a0a5f95724c7217d20c7579704a4bdc0d86fb0d94a590283399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4162633901767a0a5f95724c7217d20c7579704a4bdc0d86fb0d94a590283399->enter($__internal_4162633901767a0a5f95724c7217d20c7579704a4bdc0d86fb0d94a590283399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_4162633901767a0a5f95724c7217d20c7579704a4bdc0d86fb0d94a590283399->leave($__internal_4162633901767a0a5f95724c7217d20c7579704a4bdc0d86fb0d94a590283399_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc146d940f3afe35ce157a224f36d7cc3cb292e3b033e109621cc2fce2e73f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc146d940f3afe35ce157a224f36d7cc3cb292e3b033e109621cc2fce2e73f95->enter($__internal_dc146d940f3afe35ce157a224f36d7cc3cb292e3b033e109621cc2fce2e73f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc146d940f3afe35ce157a224f36d7cc3cb292e3b033e109621cc2fce2e73f95->leave($__internal_dc146d940f3afe35ce157a224f36d7cc3cb292e3b033e109621cc2fce2e73f95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52d7bed70cbe8f5309b7e27317e80cafa3b53b3db320749d5905722a891d6298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d7bed70cbe8f5309b7e27317e80cafa3b53b3db320749d5905722a891d6298->enter($__internal_52d7bed70cbe8f5309b7e27317e80cafa3b53b3db320749d5905722a891d6298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_52d7bed70cbe8f5309b7e27317e80cafa3b53b3db320749d5905722a891d6298->leave($__internal_52d7bed70cbe8f5309b7e27317e80cafa3b53b3db320749d5905722a891d6298_prof);

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
