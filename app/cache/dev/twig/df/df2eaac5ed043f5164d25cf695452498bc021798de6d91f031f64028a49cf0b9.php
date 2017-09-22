<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_98a9c3934c51b4c9fcee9ced15fac2edfe06e20ccdffe8d2c50282064cb74669 extends Twig_Template
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
        $__internal_19ecc2fdca0652909ca54b5c74a9af234dd14ae0f67d43a4b0fbc31b78be32e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ecc2fdca0652909ca54b5c74a9af234dd14ae0f67d43a4b0fbc31b78be32e3->enter($__internal_19ecc2fdca0652909ca54b5c74a9af234dd14ae0f67d43a4b0fbc31b78be32e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_19ecc2fdca0652909ca54b5c74a9af234dd14ae0f67d43a4b0fbc31b78be32e3->leave($__internal_19ecc2fdca0652909ca54b5c74a9af234dd14ae0f67d43a4b0fbc31b78be32e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
