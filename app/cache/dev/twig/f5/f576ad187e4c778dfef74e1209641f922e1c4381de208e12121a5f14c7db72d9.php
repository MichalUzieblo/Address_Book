<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_729e7b770dfdcac39cfcac43b0211aeeb075f262023b4d5c1d5cf3b5aeee4381 extends Twig_Template
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
        $__internal_26f3967d8587fe31ac4589cc732410d8fb3fbed6875106b9ca8a919e01f825fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f3967d8587fe31ac4589cc732410d8fb3fbed6875106b9ca8a919e01f825fa->enter($__internal_26f3967d8587fe31ac4589cc732410d8fb3fbed6875106b9ca8a919e01f825fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_26f3967d8587fe31ac4589cc732410d8fb3fbed6875106b9ca8a919e01f825fa->leave($__internal_26f3967d8587fe31ac4589cc732410d8fb3fbed6875106b9ca8a919e01f825fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
