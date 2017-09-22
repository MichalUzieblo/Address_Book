<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_24babb1829d4832c3b24ee8090c573f0e16cadb6d8124e117ed4fccfcfc17a36 extends Twig_Template
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
        $__internal_4653776039c4e12a28efcf019c33053aee3ebd7b7efc648d49bdb1903580b1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4653776039c4e12a28efcf019c33053aee3ebd7b7efc648d49bdb1903580b1c6->enter($__internal_4653776039c4e12a28efcf019c33053aee3ebd7b7efc648d49bdb1903580b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4653776039c4e12a28efcf019c33053aee3ebd7b7efc648d49bdb1903580b1c6->leave($__internal_4653776039c4e12a28efcf019c33053aee3ebd7b7efc648d49bdb1903580b1c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
