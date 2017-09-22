<?php

/* AddressBookBundle:Phone:new.html.twig */
class __TwigTemplate_3ac89fa5d7eb6ef951d54e7b81e0b3751a523f8b6252ce64c4ad60a3ef4ec4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Phone:new.html.twig", 1);
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
        $__internal_4d961d80ef0b79fcdd739166e3375e8b27cad4bbe7fe34cb4a80065d16bfb2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d961d80ef0b79fcdd739166e3375e8b27cad4bbe7fe34cb4a80065d16bfb2a7->enter($__internal_4d961d80ef0b79fcdd739166e3375e8b27cad4bbe7fe34cb4a80065d16bfb2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Phone:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d961d80ef0b79fcdd739166e3375e8b27cad4bbe7fe34cb4a80065d16bfb2a7->leave($__internal_4d961d80ef0b79fcdd739166e3375e8b27cad4bbe7fe34cb4a80065d16bfb2a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1cc325db4271ffe5c20b40264c8763832a64f0b5369b0323035283b4b0d585f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cc325db4271ffe5c20b40264c8763832a64f0b5369b0323035283b4b0d585f->enter($__internal_e1cc325db4271ffe5c20b40264c8763832a64f0b5369b0323035283b4b0d585f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Phone";
        
        $__internal_e1cc325db4271ffe5c20b40264c8763832a64f0b5369b0323035283b4b0d585f->leave($__internal_e1cc325db4271ffe5c20b40264c8763832a64f0b5369b0323035283b4b0d585f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0cda175b0d889870c83bb602f779a14d3ae6bfcb24de53bc56c027b7c02e142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cda175b0d889870c83bb602f779a14d3ae6bfcb24de53bc56c027b7c02e142->enter($__internal_a0cda175b0d889870c83bb602f779a14d3ae6bfcb24de53bc56c027b7c02e142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_a0cda175b0d889870c83bb602f779a14d3ae6bfcb24de53bc56c027b7c02e142->leave($__internal_a0cda175b0d889870c83bb602f779a14d3ae6bfcb24de53bc56c027b7c02e142_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Phone:new.html.twig";
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

{% block title %}New Phone{% endblock %}

{% block body %}
    {{form(form)}}
{% endblock %}
", "AddressBookBundle:Phone:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Phone/new.html.twig");
    }
}
