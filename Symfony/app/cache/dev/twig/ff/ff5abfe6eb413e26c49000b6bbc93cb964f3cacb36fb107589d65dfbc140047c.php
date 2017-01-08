<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4978887af319973fc04cf88a0a410f3c3c7a26b174de8739764038b16233f9ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73713a2b8db5754b21c783a524396facf1a13e6723c2f457bb21c2b220b0d30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73713a2b8db5754b21c783a524396facf1a13e6723c2f457bb21c2b220b0d30d->enter($__internal_73713a2b8db5754b21c783a524396facf1a13e6723c2f457bb21c2b220b0d30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_73713a2b8db5754b21c783a524396facf1a13e6723c2f457bb21c2b220b0d30d->leave($__internal_73713a2b8db5754b21c783a524396facf1a13e6723c2f457bb21c2b220b0d30d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3409cd43dcae939a9081c4037ad03e1be745c2b1a8433883906f2a1fcb67bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3409cd43dcae939a9081c4037ad03e1be745c2b1a8433883906f2a1fcb67bbc->enter($__internal_a3409cd43dcae939a9081c4037ad03e1be745c2b1a8433883906f2a1fcb67bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_a3409cd43dcae939a9081c4037ad03e1be745c2b1a8433883906f2a1fcb67bbc->leave($__internal_a3409cd43dcae939a9081c4037ad03e1be745c2b1a8433883906f2a1fcb67bbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
