<?php

/* BlogBundle:Default:listAuthors.html.twig */
class __TwigTemplate_02fd7a6b23c07abc247107e0e3de8480ae3c83427f7afe7a6d0fd007c421cc1c extends Twig_Template
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
        $__internal_bb949675c766d9ab9888f9fe0a0b7912c24e1c7c6a0ef7acc3f078dd2f43d32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb949675c766d9ab9888f9fe0a0b7912c24e1c7c6a0ef7acc3f078dd2f43d32b->enter($__internal_bb949675c766d9ab9888f9fe0a0b7912c24e1c7c6a0ef7acc3f078dd2f43d32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:listAuthors.html.twig"));

        // line 1
        echo "Welcome to the list authors page!";
        
        $__internal_bb949675c766d9ab9888f9fe0a0b7912c24e1c7c6a0ef7acc3f078dd2f43d32b->leave($__internal_bb949675c766d9ab9888f9fe0a0b7912c24e1c7c6a0ef7acc3f078dd2f43d32b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:listAuthors.html.twig";
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
        return new Twig_Source("Welcome to the list authors page!", "BlogBundle:Default:listAuthors.html.twig", "/var/www/html/Symfony/src/BlogBundle/Resources/views/Default/listAuthors.html.twig");
    }
}
