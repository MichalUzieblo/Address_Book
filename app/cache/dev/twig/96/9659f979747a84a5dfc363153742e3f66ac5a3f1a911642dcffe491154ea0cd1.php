<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3480a7c89219c95706249bc10fb6a7860043ad6b6df053ad51dfcb66fc76e316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b58c8563be96b1a4eb5ae686c7cd66db141f19115082861d4756c1fa112041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b58c8563be96b1a4eb5ae686c7cd66db141f19115082861d4756c1fa112041->enter($__internal_97b58c8563be96b1a4eb5ae686c7cd66db141f19115082861d4756c1fa112041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_97b58c8563be96b1a4eb5ae686c7cd66db141f19115082861d4756c1fa112041->leave($__internal_97b58c8563be96b1a4eb5ae686c7cd66db141f19115082861d4756c1fa112041_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4874caab416388f8815a2c01b473ef3e6e4efa37d2107585076f5d0666aa405b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4874caab416388f8815a2c01b473ef3e6e4efa37d2107585076f5d0666aa405b->enter($__internal_4874caab416388f8815a2c01b473ef3e6e4efa37d2107585076f5d0666aa405b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4874caab416388f8815a2c01b473ef3e6e4efa37d2107585076f5d0666aa405b->leave($__internal_4874caab416388f8815a2c01b473ef3e6e4efa37d2107585076f5d0666aa405b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
