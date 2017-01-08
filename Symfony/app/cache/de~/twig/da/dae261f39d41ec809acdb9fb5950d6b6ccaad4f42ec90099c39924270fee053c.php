<?php

/* BlogBundle:Default:listAuthors.html.twig */
class __TwigTemplate_bd0c134fd0ea5eb4927795bd249689fabc71a066437c221eb7b1fd14661c239f extends Twig_Template
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
        $__internal_fc281b0ea9ce6968211a79a8ae51696d09f65305728df3438facd5c14202f124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc281b0ea9ce6968211a79a8ae51696d09f65305728df3438facd5c14202f124->enter($__internal_fc281b0ea9ce6968211a79a8ae51696d09f65305728df3438facd5c14202f124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:listAuthors.html.twig"));

        // line 1
        echo "Welcome to the list authors page!";
        
        $__internal_fc281b0ea9ce6968211a79a8ae51696d09f65305728df3438facd5c14202f124->leave($__internal_fc281b0ea9ce6968211a79a8ae51696d09f65305728df3438facd5c14202f124_prof);

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
        return new Twig_Source("Welcome to the list authors page!", "BlogBundle:Default:listAuthors.html.twig", "/home/damien/Documents/Travail/ECAM/Cours/Applications Web avancées/Projet/dkp/Symfony/src/BlogBundle/Resources/views/Default/listAuthors.html.twig");
    }
}
