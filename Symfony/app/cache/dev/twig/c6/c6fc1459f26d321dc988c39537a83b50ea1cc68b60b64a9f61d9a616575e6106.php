<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_61511cc890b75ab3c053561f98cd899d5a4cd29a9371d3088e82c28956f0a8f3 extends Twig_Template
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
        $__internal_19c1233c0f643f17da5c478727f14f5356e1bcad1652e850abd05873f611061a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c1233c0f643f17da5c478727f14f5356e1bcad1652e850abd05873f611061a->enter($__internal_19c1233c0f643f17da5c478727f14f5356e1bcad1652e850abd05873f611061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_19c1233c0f643f17da5c478727f14f5356e1bcad1652e850abd05873f611061a->leave($__internal_19c1233c0f643f17da5c478727f14f5356e1bcad1652e850abd05873f611061a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
