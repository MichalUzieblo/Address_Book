<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2425e7e11889fa6bd68e0e25907f21fdb57f388b27417e58b993b19cc641459e extends Twig_Template
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
        $__internal_2c2c0d0a7a6d7e5f02f3842cd099f2a06ada1622396b36b0d0057b1f6e49b233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2c0d0a7a6d7e5f02f3842cd099f2a06ada1622396b36b0d0057b1f6e49b233->enter($__internal_2c2c0d0a7a6d7e5f02f3842cd099f2a06ada1622396b36b0d0057b1f6e49b233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2c2c0d0a7a6d7e5f02f3842cd099f2a06ada1622396b36b0d0057b1f6e49b233->leave($__internal_2c2c0d0a7a6d7e5f02f3842cd099f2a06ada1622396b36b0d0057b1f6e49b233_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
