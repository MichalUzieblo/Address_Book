<?php

/* AddressBookBundle:Person:edit.html.twig */
class __TwigTemplate_0c0757079faf1e0690bb45f9cdd316506238baae57b3f36896d3038b6c1487eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:edit.html.twig", 1);
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
        $__internal_d99d2979b52b1763dc91914a14fe2334c424f1034c9941e7e0c8a246dc4df49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99d2979b52b1763dc91914a14fe2334c424f1034c9941e7e0c8a246dc4df49d->enter($__internal_d99d2979b52b1763dc91914a14fe2334c424f1034c9941e7e0c8a246dc4df49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d99d2979b52b1763dc91914a14fe2334c424f1034c9941e7e0c8a246dc4df49d->leave($__internal_d99d2979b52b1763dc91914a14fe2334c424f1034c9941e7e0c8a246dc4df49d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0cc5a950934d02de0f994277c5b70b4de5a10e21faf08fbf47d66cea09aaa34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc5a950934d02de0f994277c5b70b4de5a10e21faf08fbf47d66cea09aaa34d->enter($__internal_0cc5a950934d02de0f994277c5b70b4de5a10e21faf08fbf47d66cea09aaa34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        
        $__internal_0cc5a950934d02de0f994277c5b70b4de5a10e21faf08fbf47d66cea09aaa34d->leave($__internal_0cc5a950934d02de0f994277c5b70b4de5a10e21faf08fbf47d66cea09aaa34d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced9f01382a1eb242f01f9b6e85a80b392015437c5b5346165b3d8496bffea38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced9f01382a1eb242f01f9b6e85a80b392015437c5b5346165b3d8496bffea38->enter($__internal_ced9f01382a1eb242f01f9b6e85a80b392015437c5b5346165b3d8496bffea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_ced9f01382a1eb242f01f9b6e85a80b392015437c5b5346165b3d8496bffea38->leave($__internal_ced9f01382a1eb242f01f9b6e85a80b392015437c5b5346165b3d8496bffea38_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %}{{person.name}} {{person.surname}}{% endblock %}

{% block body %}
    {{ form(form)}}
{% endblock %}
", "AddressBookBundle:Person:edit.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/edit.html.twig");
    }
}
