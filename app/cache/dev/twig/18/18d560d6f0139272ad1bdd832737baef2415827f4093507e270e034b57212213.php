<?php

/* AddressBookBundle:Rank:select.html.twig */
class __TwigTemplate_b0264fc89b781cb8303f58bb5a03d392699cbe9b67df55d7e4d1c8a6075d9862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:select.html.twig", 1);
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
        $__internal_d0388b44361e87973e458a14adc0eb59d096fdebdd65cc0fdd28a0f4eed7aadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0388b44361e87973e458a14adc0eb59d096fdebdd65cc0fdd28a0f4eed7aadb->enter($__internal_d0388b44361e87973e458a14adc0eb59d096fdebdd65cc0fdd28a0f4eed7aadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Rank:select.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0388b44361e87973e458a14adc0eb59d096fdebdd65cc0fdd28a0f4eed7aadb->leave($__internal_d0388b44361e87973e458a14adc0eb59d096fdebdd65cc0fdd28a0f4eed7aadb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2fb16c41c962d22530091849b987ad6ed3b4996f0ff363bf82d10a302a60357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fb16c41c962d22530091849b987ad6ed3b4996f0ff363bf82d10a302a60357->enter($__internal_c2fb16c41c962d22530091849b987ad6ed3b4996f0ff363bf82d10a302a60357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New group of persons";
        
        $__internal_c2fb16c41c962d22530091849b987ad6ed3b4996f0ff363bf82d10a302a60357->leave($__internal_c2fb16c41c962d22530091849b987ad6ed3b4996f0ff363bf82d10a302a60357_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77764dc7cbd8c9849ea9163c5c6c812270e0c7e7ebd1510de2c6ffeb0e255c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77764dc7cbd8c9849ea9163c5c6c812270e0c7e7ebd1510de2c6ffeb0e255c8a->enter($__internal_77764dc7cbd8c9849ea9163c5c6c812270e0c7e7ebd1510de2c6ffeb0e255c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_new", array("person_id" => ($context["person_id"] ?? $this->getContext($context, "person_id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        New group
    </a>
";
        
        $__internal_77764dc7cbd8c9849ea9163c5c6c812270e0c7e7ebd1510de2c6ffeb0e255c8a->leave($__internal_77764dc7cbd8c9849ea9163c5c6c812270e0c7e7ebd1510de2c6ffeb0e255c8a_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}New group of persons{% endblock %}

{% block body %}
    {{form(form)}}
    
    <a href=\"{{path('addressbook_rank_new', {'person_id':person_id})}}\" class=\"btn btn-default\">
        New group
    </a>
{% endblock %}

", "AddressBookBundle:Rank:select.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/select.html.twig");
    }
}
