<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_94f2d896932c5a0105733df38fcd375b23099240061ae98adce1cc7de380ec12 extends Twig_Template
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
        $__internal_fb995f6673a01a69dcaa4c832e059055d725a37726500a8d6fd5ac5f70f741cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb995f6673a01a69dcaa4c832e059055d725a37726500a8d6fd5ac5f70f741cf->enter($__internal_fb995f6673a01a69dcaa4c832e059055d725a37726500a8d6fd5ac5f70f741cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fb995f6673a01a69dcaa4c832e059055d725a37726500a8d6fd5ac5f70f741cf->leave($__internal_fb995f6673a01a69dcaa4c832e059055d725a37726500a8d6fd5ac5f70f741cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
