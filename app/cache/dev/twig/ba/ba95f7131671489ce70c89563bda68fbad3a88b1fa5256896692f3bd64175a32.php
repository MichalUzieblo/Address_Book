<?php

/* AddressBookBundle:Email:new.html.twig */
class __TwigTemplate_d34adf141681012fe86204d66080b372932d5cf9713948045d42afb20b269201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Email:new.html.twig", 1);
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
        $__internal_bac80c9adf289b47efbcd5b409543e8a57def1c79fedf42346133732b2aa3f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac80c9adf289b47efbcd5b409543e8a57def1c79fedf42346133732b2aa3f1d->enter($__internal_bac80c9adf289b47efbcd5b409543e8a57def1c79fedf42346133732b2aa3f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Email:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac80c9adf289b47efbcd5b409543e8a57def1c79fedf42346133732b2aa3f1d->leave($__internal_bac80c9adf289b47efbcd5b409543e8a57def1c79fedf42346133732b2aa3f1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca2d5e95173080ee546dfc0a79e570a7b4000460af3d6a85f1d5e04cc61d454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca2d5e95173080ee546dfc0a79e570a7b4000460af3d6a85f1d5e04cc61d454->enter($__internal_9ca2d5e95173080ee546dfc0a79e570a7b4000460af3d6a85f1d5e04cc61d454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Email";
        
        $__internal_9ca2d5e95173080ee546dfc0a79e570a7b4000460af3d6a85f1d5e04cc61d454->leave($__internal_9ca2d5e95173080ee546dfc0a79e570a7b4000460af3d6a85f1d5e04cc61d454_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_397aa219c81b29db4798c8268da6f7d43b5a4235d02f11d773605b550dc2c8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397aa219c81b29db4798c8268da6f7d43b5a4235d02f11d773605b550dc2c8b7->enter($__internal_397aa219c81b29db4798c8268da6f7d43b5a4235d02f11d773605b550dc2c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_397aa219c81b29db4798c8268da6f7d43b5a4235d02f11d773605b550dc2c8b7->leave($__internal_397aa219c81b29db4798c8268da6f7d43b5a4235d02f11d773605b550dc2c8b7_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Email:new.html.twig";
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

{% block title %}New Email{% endblock %}

{% block body %}
    {{form(form)}}
{% endblock %}
", "AddressBookBundle:Email:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Email/new.html.twig");
    }
}
