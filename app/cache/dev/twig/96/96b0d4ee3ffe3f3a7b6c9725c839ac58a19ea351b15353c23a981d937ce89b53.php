<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8628242cd86bd6523040f22ff4190d9bb4ef297ec5d84568db598083d8f5b841 extends Twig_Template
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
        $__internal_c9f7a308fe784f1a9dfab2e5136cc2453c57635088572b148308595b65a52698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f7a308fe784f1a9dfab2e5136cc2453c57635088572b148308595b65a52698->enter($__internal_c9f7a308fe784f1a9dfab2e5136cc2453c57635088572b148308595b65a52698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c9f7a308fe784f1a9dfab2e5136cc2453c57635088572b148308595b65a52698->leave($__internal_c9f7a308fe784f1a9dfab2e5136cc2453c57635088572b148308595b65a52698_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
