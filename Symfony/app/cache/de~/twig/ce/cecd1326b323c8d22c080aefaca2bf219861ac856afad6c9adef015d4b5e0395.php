<?php

/* BlogBundle:Default:addAuthors.html.twig */
class __TwigTemplate_c50eb8da92e29ddf7d83b931220ab63b1e1ab3d4eebf4a3eae61ed9a10564b31 extends Twig_Template
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
        $__internal_694549f28e164140fb0c82a9ec7bb3e3aff07c8972ce52d5fa53864eff6f86ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694549f28e164140fb0c82a9ec7bb3e3aff07c8972ce52d5fa53864eff6f86ff->enter($__internal_694549f28e164140fb0c82a9ec7bb3e3aff07c8972ce52d5fa53864eff6f86ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:addAuthors.html.twig"));

        // line 1
        echo "welcome to the add authors page
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        
        $__internal_694549f28e164140fb0c82a9ec7bb3e3aff07c8972ce52d5fa53864eff6f86ff->leave($__internal_694549f28e164140fb0c82a9ec7bb3e3aff07c8972ce52d5fa53864eff6f86ff_prof);

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
{{form(form)}}", "BlogBundle:Default:addAuthors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/src/BlogBundle/Resources/views/Default/addAuthors.html.twig");
    }
}
