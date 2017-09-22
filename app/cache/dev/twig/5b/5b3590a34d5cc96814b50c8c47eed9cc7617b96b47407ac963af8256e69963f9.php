<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6345bb3c546984e03910df94429451a9440acf7aef6c7dd41be910dc54e54d35 extends Twig_Template
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
        $__internal_71d11160cacc8d3d895ca79ca0e10ab1546b89247406bf0620f2ab9ec04b6736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d11160cacc8d3d895ca79ca0e10ab1546b89247406bf0620f2ab9ec04b6736->enter($__internal_71d11160cacc8d3d895ca79ca0e10ab1546b89247406bf0620f2ab9ec04b6736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_71d11160cacc8d3d895ca79ca0e10ab1546b89247406bf0620f2ab9ec04b6736->leave($__internal_71d11160cacc8d3d895ca79ca0e10ab1546b89247406bf0620f2ab9ec04b6736_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
