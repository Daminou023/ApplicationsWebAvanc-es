<?php

/* BlogBundle:Default:authors.html.twig */
class __TwigTemplate_71cbf5d7850ff70f15a9caa0ea5aeeeb2481840701eb860b61071063e4d6b185 extends Twig_Template
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
        $__internal_0105e1e445987018f5c9caea1cc716eee85d9131356c3384dec46652e5173118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0105e1e445987018f5c9caea1cc716eee85d9131356c3384dec46652e5173118->enter($__internal_0105e1e445987018f5c9caea1cc716eee85d9131356c3384dec46652e5173118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:authors.html.twig"));

        // line 1
        echo "Welcome to the Author Page!";
        
        $__internal_0105e1e445987018f5c9caea1cc716eee85d9131356c3384dec46652e5173118->leave($__internal_0105e1e445987018f5c9caea1cc716eee85d9131356c3384dec46652e5173118_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:authors.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Welcome to the Author Page!", "BlogBundle:Default:authors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/authors.html.twig");
    }
}
