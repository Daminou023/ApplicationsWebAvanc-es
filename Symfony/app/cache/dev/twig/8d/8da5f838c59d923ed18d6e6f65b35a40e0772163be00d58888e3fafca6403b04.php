<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3ccf69cf6c062c6e9d39bcb919e158c300fba7c35cf596dc96094c47f48b5b01 extends Twig_Template
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
        $__internal_10eeb837856b4c3810d484a9540a50b0a7d0e203638dea2e9ba6b08391e0bde5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eeb837856b4c3810d484a9540a50b0a7d0e203638dea2e9ba6b08391e0bde5->enter($__internal_10eeb837856b4c3810d484a9540a50b0a7d0e203638dea2e9ba6b08391e0bde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_10eeb837856b4c3810d484a9540a50b0a7d0e203638dea2e9ba6b08391e0bde5->leave($__internal_10eeb837856b4c3810d484a9540a50b0a7d0e203638dea2e9ba6b08391e0bde5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
