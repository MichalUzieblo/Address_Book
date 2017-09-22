<?php

/* AddressBookBundle:Rank:delete.html.twig */
class __TwigTemplate_41dffb0b23da8df73e995871d793bbe061d335f8eaf746b4559934a46bac9e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:delete.html.twig", 1);
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
        $__internal_7042b9d50db7202af93ce083474b8cfc847b77851e726c03c584ef6a7835362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7042b9d50db7202af93ce083474b8cfc847b77851e726c03c584ef6a7835362d->enter($__internal_7042b9d50db7202af93ce083474b8cfc847b77851e726c03c584ef6a7835362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Rank:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7042b9d50db7202af93ce083474b8cfc847b77851e726c03c584ef6a7835362d->leave($__internal_7042b9d50db7202af93ce083474b8cfc847b77851e726c03c584ef6a7835362d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_227cae063fcf3c5fe4cf2bc89139dc14106cf0a166ab35e4d32936b849eb34e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227cae063fcf3c5fe4cf2bc89139dc14106cf0a166ab35e4d32936b849eb34e1->enter($__internal_227cae063fcf3c5fe4cf2bc89139dc14106cf0a166ab35e4d32936b849eb34e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AddressBookBundle:Group:delete";
        
        $__internal_227cae063fcf3c5fe4cf2bc89139dc14106cf0a166ab35e4d32936b849eb34e1->leave($__internal_227cae063fcf3c5fe4cf2bc89139dc14106cf0a166ab35e4d32936b849eb34e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15a125f464f99f09363c18ad8216da6263aefbe3c8f2c5469eea84028d2f48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15a125f464f99f09363c18ad8216da6263aefbe3c8f2c5469eea84028d2f48b->enter($__internal_d15a125f464f99f09363c18ad8216da6263aefbe3c8f2c5469eea84028d2f48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Group:delete page</h1>
";
        
        $__internal_d15a125f464f99f09363c18ad8216da6263aefbe3c8f2c5469eea84028d2f48b->leave($__internal_d15a125f464f99f09363c18ad8216da6263aefbe3c8f2c5469eea84028d2f48b_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:delete.html.twig";
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

{% block title %}AddressBookBundle:Group:delete{% endblock %}

{% block body %}
<h1>Welcome to the Group:delete page</h1>
{% endblock %}
", "AddressBookBundle:Rank:delete.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/delete.html.twig");
    }
}
