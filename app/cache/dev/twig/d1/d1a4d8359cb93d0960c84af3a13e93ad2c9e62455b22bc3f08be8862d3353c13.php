<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2857e8f884f9e6cac8f0adfbe59c50bf74ba904be1220961815718f562ed0898 extends Twig_Template
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
        $__internal_865fab6c9e5360776d18b051a91d904a45c93f8ff17ed3e53dc8e7d50c7c656b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865fab6c9e5360776d18b051a91d904a45c93f8ff17ed3e53dc8e7d50c7c656b->enter($__internal_865fab6c9e5360776d18b051a91d904a45c93f8ff17ed3e53dc8e7d50c7c656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_865fab6c9e5360776d18b051a91d904a45c93f8ff17ed3e53dc8e7d50c7c656b->leave($__internal_865fab6c9e5360776d18b051a91d904a45c93f8ff17ed3e53dc8e7d50c7c656b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
