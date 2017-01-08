<?php

/* base.html.twig */
class __TwigTemplate_db600c9cfe3a29995c1262c612d9146a05a7f40d4dfb35111b1e3d31cb3d932e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d70c63617c27cec0c86d036b8b9ba3ca9e9fe064be54fd85500cced6dd223281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70c63617c27cec0c86d036b8b9ba3ca9e9fe064be54fd85500cced6dd223281->enter($__internal_d70c63617c27cec0c86d036b8b9ba3ca9e9fe064be54fd85500cced6dd223281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d70c63617c27cec0c86d036b8b9ba3ca9e9fe064be54fd85500cced6dd223281->leave($__internal_d70c63617c27cec0c86d036b8b9ba3ca9e9fe064be54fd85500cced6dd223281_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e06b6ec25f1c0f2800d4d809f68773bb6e3fd807761e6e399c8e0111ce6ca193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06b6ec25f1c0f2800d4d809f68773bb6e3fd807761e6e399c8e0111ce6ca193->enter($__internal_e06b6ec25f1c0f2800d4d809f68773bb6e3fd807761e6e399c8e0111ce6ca193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_e06b6ec25f1c0f2800d4d809f68773bb6e3fd807761e6e399c8e0111ce6ca193->leave($__internal_e06b6ec25f1c0f2800d4d809f68773bb6e3fd807761e6e399c8e0111ce6ca193_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_211bdd8f6f5799f8d420cfedc5167b5715594d127f37bad2578098728db81a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211bdd8f6f5799f8d420cfedc5167b5715594d127f37bad2578098728db81a70->enter($__internal_211bdd8f6f5799f8d420cfedc5167b5715594d127f37bad2578098728db81a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_211bdd8f6f5799f8d420cfedc5167b5715594d127f37bad2578098728db81a70->leave($__internal_211bdd8f6f5799f8d420cfedc5167b5715594d127f37bad2578098728db81a70_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08b2536be5e3bd265e0f533ab9aea3e0a1dabd9c44dabf4b2473b7cb97a9765b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b2536be5e3bd265e0f533ab9aea3e0a1dabd9c44dabf4b2473b7cb97a9765b->enter($__internal_08b2536be5e3bd265e0f533ab9aea3e0a1dabd9c44dabf4b2473b7cb97a9765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_08b2536be5e3bd265e0f533ab9aea3e0a1dabd9c44dabf4b2473b7cb97a9765b->leave($__internal_08b2536be5e3bd265e0f533ab9aea3e0a1dabd9c44dabf4b2473b7cb97a9765b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fea887fe8799ee128afeff72e60262d316d4c5c07e782efe4b94df19f5dedab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea887fe8799ee128afeff72e60262d316d4c5c07e782efe4b94df19f5dedab5->enter($__internal_fea887fe8799ee128afeff72e60262d316d4c5c07e782efe4b94df19f5dedab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_fea887fe8799ee128afeff72e60262d316d4c5c07e782efe4b94df19f5dedab5->leave($__internal_fea887fe8799ee128afeff72e60262d316d4c5c07e782efe4b94df19f5dedab5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Symfony/app/Resources/views/base.html.twig");
    }
}
