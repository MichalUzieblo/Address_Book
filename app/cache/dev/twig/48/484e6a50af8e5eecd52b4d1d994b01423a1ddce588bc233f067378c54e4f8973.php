<?php

/* AddressBookBundle:Rank:edit.html.twig */
class __TwigTemplate_4a9b5af5990b38c116f328602bbe23d77b37c464596fa29840fda984a3903047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:edit.html.twig", 1);
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
        $__internal_3e1ace06dfc9b5229e695ef6f1097361ba17b046ccc14d7dbe7c16a5fcb703cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1ace06dfc9b5229e695ef6f1097361ba17b046ccc14d7dbe7c16a5fcb703cb->enter($__internal_3e1ace06dfc9b5229e695ef6f1097361ba17b046ccc14d7dbe7c16a5fcb703cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Rank:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e1ace06dfc9b5229e695ef6f1097361ba17b046ccc14d7dbe7c16a5fcb703cb->leave($__internal_3e1ace06dfc9b5229e695ef6f1097361ba17b046ccc14d7dbe7c16a5fcb703cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91732a9d07ceabccb96d5c34f9ae36c7f320d758b895933bcc567b7c656c4bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91732a9d07ceabccb96d5c34f9ae36c7f320d758b895933bcc567b7c656c4bc2->enter($__internal_91732a9d07ceabccb96d5c34f9ae36c7f320d758b895933bcc567b7c656c4bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["rank"] ?? $this->getContext($context, "rank")), "name", array()), "html", null, true);
        
        $__internal_91732a9d07ceabccb96d5c34f9ae36c7f320d758b895933bcc567b7c656c4bc2->leave($__internal_91732a9d07ceabccb96d5c34f9ae36c7f320d758b895933bcc567b7c656c4bc2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5850993c9e0ff01a31cc8f885d70affb1a6e5267d69782e27e45a499fce9a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5850993c9e0ff01a31cc8f885d70affb1a6e5267d69782e27e45a499fce9a07->enter($__internal_a5850993c9e0ff01a31cc8f885d70affb1a6e5267d69782e27e45a499fce9a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a5850993c9e0ff01a31cc8f885d70affb1a6e5267d69782e27e45a499fce9a07->leave($__internal_a5850993c9e0ff01a31cc8f885d70affb1a6e5267d69782e27e45a499fce9a07_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:edit.html.twig";
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

{% block title %}{{rank.name}}{% endblock %}

{% block body %}
    {{ form(form)}}
{% endblock %}
", "AddressBookBundle:Rank:edit.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/edit.html.twig");
    }
}
