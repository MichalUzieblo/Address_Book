<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_72ba82dd2fc52a822bf2258639dd69dfc2ebb01afe73368cd809c1e169af2d55 extends Twig_Template
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
        $__internal_cc821e4271f2a4e19e79beeb93fdbab2ffb41d95059fc88d5c693389ec16b7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc821e4271f2a4e19e79beeb93fdbab2ffb41d95059fc88d5c693389ec16b7e7->enter($__internal_cc821e4271f2a4e19e79beeb93fdbab2ffb41d95059fc88d5c693389ec16b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cc821e4271f2a4e19e79beeb93fdbab2ffb41d95059fc88d5c693389ec16b7e7->leave($__internal_cc821e4271f2a4e19e79beeb93fdbab2ffb41d95059fc88d5c693389ec16b7e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
