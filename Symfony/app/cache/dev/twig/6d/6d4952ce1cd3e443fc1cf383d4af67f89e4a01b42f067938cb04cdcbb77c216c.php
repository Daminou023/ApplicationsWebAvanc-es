<?php

/* BlogBundle:Default:addAuthors.html.twig */
class __TwigTemplate_9b34ef4c4330f5a3d2d19065a791e7516517f29c68e8beec1ff79e019d6b7fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d93ff52f9009a233f0c3e6cc37f6aff01fc5998fec2d01d37373a7072cc919a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d93ff52f9009a233f0c3e6cc37f6aff01fc5998fec2d01d37373a7072cc919a->enter($__internal_5d93ff52f9009a233f0c3e6cc37f6aff01fc5998fec2d01d37373a7072cc919a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addAuthors.html.twig"));

        // line 1
        echo "welcome to the add authors page
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_5d93ff52f9009a233f0c3e6cc37f6aff01fc5998fec2d01d37373a7072cc919a->leave($__internal_5d93ff52f9009a233f0c3e6cc37f6aff01fc5998fec2d01d37373a7072cc919a_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:addAuthors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("welcome to the add authors page
{{form(form)}}", "BlogBundle:Default:addAuthors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/addAuthors.html.twig");
    }
}
