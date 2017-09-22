<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9e743f226b86cd6d14686f1b6e9c45be428c23694fc16238c25d803500e164a4 extends Twig_Template
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
        $__internal_bdaef5825b9decfa1f38e7a878cbd51236978fd7997b6d0d1c8d1f0ef2157dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaef5825b9decfa1f38e7a878cbd51236978fd7997b6d0d1c8d1f0ef2157dd2->enter($__internal_bdaef5825b9decfa1f38e7a878cbd51236978fd7997b6d0d1c8d1f0ef2157dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_bdaef5825b9decfa1f38e7a878cbd51236978fd7997b6d0d1c8d1f0ef2157dd2->leave($__internal_bdaef5825b9decfa1f38e7a878cbd51236978fd7997b6d0d1c8d1f0ef2157dd2_prof);

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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
