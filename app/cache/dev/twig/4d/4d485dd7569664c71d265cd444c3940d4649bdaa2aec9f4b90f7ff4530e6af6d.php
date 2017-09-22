<?php

/* AddressBookBundle:Person:new.html.twig */
class __TwigTemplate_ae69b79eb6044060f30418a325d85fa7c3f132899fbc19acc4fc900f92d2656e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_268860d07603584b307f3ab859cee0f9b9fc247adf4e5ebd629f941e7517dfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268860d07603584b307f3ab859cee0f9b9fc247adf4e5ebd629f941e7517dfe2->enter($__internal_268860d07603584b307f3ab859cee0f9b9fc247adf4e5ebd629f941e7517dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268860d07603584b307f3ab859cee0f9b9fc247adf4e5ebd629f941e7517dfe2->leave($__internal_268860d07603584b307f3ab859cee0f9b9fc247adf4e5ebd629f941e7517dfe2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16ecb359767a098d3ad1ce3206eab59c7372aac935eaf1b141e36bef6c1a938e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ecb359767a098d3ad1ce3206eab59c7372aac935eaf1b141e36bef6c1a938e->enter($__internal_16ecb359767a098d3ad1ce3206eab59c7372aac935eaf1b141e36bef6c1a938e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Person";
        
        $__internal_16ecb359767a098d3ad1ce3206eab59c7372aac935eaf1b141e36bef6c1a938e->leave($__internal_16ecb359767a098d3ad1ce3206eab59c7372aac935eaf1b141e36bef6c1a938e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f27fa914fb33d6d595d914911d5745ef696e3f1ba8c6209a119b1828d1dfedd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27fa914fb33d6d595d914911d5745ef696e3f1ba8c6209a119b1828d1dfedd6->enter($__internal_f27fa914fb33d6d595d914911d5745ef696e3f1ba8c6209a119b1828d1dfedd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_f27fa914fb33d6d595d914911d5745ef696e3f1ba8c6209a119b1828d1dfedd6->leave($__internal_f27fa914fb33d6d595d914911d5745ef696e3f1ba8c6209a119b1828d1dfedd6_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}New Person{% endblock %}

{% block body %}
    {{form(form)}}
{% endblock %}
", "AddressBookBundle:Person:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/new.html.twig");
    }
}
