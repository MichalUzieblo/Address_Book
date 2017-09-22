<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_979c4087b62619c4e362b18fb04e0834667becac495175b6291882b809c8313f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881d6fbc39f7dbed8649ed0a7c33b37344f8af4d85c721981297355325bae0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881d6fbc39f7dbed8649ed0a7c33b37344f8af4d85c721981297355325bae0c1->enter($__internal_881d6fbc39f7dbed8649ed0a7c33b37344f8af4d85c721981297355325bae0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_881d6fbc39f7dbed8649ed0a7c33b37344f8af4d85c721981297355325bae0c1->leave($__internal_881d6fbc39f7dbed8649ed0a7c33b37344f8af4d85c721981297355325bae0c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a45f94114ffa94470c28264d01133a0d40eaf5a1e2240fb04fdd03792d34ebe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45f94114ffa94470c28264d01133a0d40eaf5a1e2240fb04fdd03792d34ebe4->enter($__internal_a45f94114ffa94470c28264d01133a0d40eaf5a1e2240fb04fdd03792d34ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a45f94114ffa94470c28264d01133a0d40eaf5a1e2240fb04fdd03792d34ebe4->leave($__internal_a45f94114ffa94470c28264d01133a0d40eaf5a1e2240fb04fdd03792d34ebe4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2051de1e74247a8a1c19441e95d60dc81b11db59358c811ec3ff2ff9a08f8442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2051de1e74247a8a1c19441e95d60dc81b11db59358c811ec3ff2ff9a08f8442->enter($__internal_2051de1e74247a8a1c19441e95d60dc81b11db59358c811ec3ff2ff9a08f8442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2051de1e74247a8a1c19441e95d60dc81b11db59358c811ec3ff2ff9a08f8442->leave($__internal_2051de1e74247a8a1c19441e95d60dc81b11db59358c811ec3ff2ff9a08f8442_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7fcb81a40573a014a8abd92a472f39e634b41f9b6e8c56d1dedbd80c3239ea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcb81a40573a014a8abd92a472f39e634b41f9b6e8c56d1dedbd80c3239ea07->enter($__internal_7fcb81a40573a014a8abd92a472f39e634b41f9b6e8c56d1dedbd80c3239ea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7fcb81a40573a014a8abd92a472f39e634b41f9b6e8c56d1dedbd80c3239ea07->leave($__internal_7fcb81a40573a014a8abd92a472f39e634b41f9b6e8c56d1dedbd80c3239ea07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
