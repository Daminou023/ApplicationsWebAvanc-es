<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_1dfc5ae19571e911c2729780d84517a492a6dc0572c0f7becc126902b096fc46 extends Twig_Template
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
        $__internal_d1a598265b0644243e4e8f376a3d78f5d343632feb5cbef62a9815a9325053a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a598265b0644243e4e8f376a3d78f5d343632feb5cbef62a9815a9325053a4->enter($__internal_d1a598265b0644243e4e8f376a3d78f5d343632feb5cbef62a9815a9325053a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d1a598265b0644243e4e8f376a3d78f5d343632feb5cbef62a9815a9325053a4->leave($__internal_d1a598265b0644243e4e8f376a3d78f5d343632feb5cbef62a9815a9325053a4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BlogBundle:Default:index.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Backup/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
