<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_87891d93d2200f0e1dbb0428907e792518a97a0e229338a9a7e586272bd022d0 extends Twig_Template
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
        $__internal_f12d41d9a82d7d76979b979762d815ca3f89082d833d321d62173c03b3fafc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12d41d9a82d7d76979b979762d815ca3f89082d833d321d62173c03b3fafc1c->enter($__internal_f12d41d9a82d7d76979b979762d815ca3f89082d833d321d62173c03b3fafc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f12d41d9a82d7d76979b979762d815ca3f89082d833d321d62173c03b3fafc1c->leave($__internal_f12d41d9a82d7d76979b979762d815ca3f89082d833d321d62173c03b3fafc1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
