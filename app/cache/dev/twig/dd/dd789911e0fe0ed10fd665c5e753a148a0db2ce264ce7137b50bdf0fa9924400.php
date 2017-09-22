<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cc32c870d1d3c0444158e9a8affe5035c2e75358bbfb37071e3d906fec99d616 extends Twig_Template
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
        $__internal_cec43041e6d85906183526e62f0775c46e2ff7a67a010e53fb30e944fb9e1ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec43041e6d85906183526e62f0775c46e2ff7a67a010e53fb30e944fb9e1ab8->enter($__internal_cec43041e6d85906183526e62f0775c46e2ff7a67a010e53fb30e944fb9e1ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cec43041e6d85906183526e62f0775c46e2ff7a67a010e53fb30e944fb9e1ab8->leave($__internal_cec43041e6d85906183526e62f0775c46e2ff7a67a010e53fb30e944fb9e1ab8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
