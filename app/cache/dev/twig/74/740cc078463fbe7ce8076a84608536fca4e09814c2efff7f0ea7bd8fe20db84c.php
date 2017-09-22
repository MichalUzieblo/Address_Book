<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f96ee7fa1755c7853b01a118c3d503233b21f0c83ee8bbbb625343437a498cc8 extends Twig_Template
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
        $__internal_c8687021294990ee051e0c1d6b1e9eeb50d7ed5413de7bc4b1f8d36573d780ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8687021294990ee051e0c1d6b1e9eeb50d7ed5413de7bc4b1f8d36573d780ec->enter($__internal_c8687021294990ee051e0c1d6b1e9eeb50d7ed5413de7bc4b1f8d36573d780ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c8687021294990ee051e0c1d6b1e9eeb50d7ed5413de7bc4b1f8d36573d780ec->leave($__internal_c8687021294990ee051e0c1d6b1e9eeb50d7ed5413de7bc4b1f8d36573d780ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
