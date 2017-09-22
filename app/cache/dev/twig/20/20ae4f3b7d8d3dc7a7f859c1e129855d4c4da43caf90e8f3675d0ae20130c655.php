<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_de49f9133400667eb7365bf9ed37cc382c80a84bea6bc655857fc5bf255d6b13 extends Twig_Template
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
        $__internal_fa27ffee4e083599f8aa1f99fd2d6497ab08f7b4830b0fd57143ab6a47d10d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa27ffee4e083599f8aa1f99fd2d6497ab08f7b4830b0fd57143ab6a47d10d06->enter($__internal_fa27ffee4e083599f8aa1f99fd2d6497ab08f7b4830b0fd57143ab6a47d10d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa27ffee4e083599f8aa1f99fd2d6497ab08f7b4830b0fd57143ab6a47d10d06->leave($__internal_fa27ffee4e083599f8aa1f99fd2d6497ab08f7b4830b0fd57143ab6a47d10d06_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_836d73c4b6c0f76ef30b5c88855833247a9dc8c1954c41517c62394cc28ed1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836d73c4b6c0f76ef30b5c88855833247a9dc8c1954c41517c62394cc28ed1f8->enter($__internal_836d73c4b6c0f76ef30b5c88855833247a9dc8c1954c41517c62394cc28ed1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_836d73c4b6c0f76ef30b5c88855833247a9dc8c1954c41517c62394cc28ed1f8->leave($__internal_836d73c4b6c0f76ef30b5c88855833247a9dc8c1954c41517c62394cc28ed1f8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2c1e855d00e6cedfa9511434ed01cd9b2438dd2ff1e8684d01e0bcfcc439714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c1e855d00e6cedfa9511434ed01cd9b2438dd2ff1e8684d01e0bcfcc439714->enter($__internal_e2c1e855d00e6cedfa9511434ed01cd9b2438dd2ff1e8684d01e0bcfcc439714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2c1e855d00e6cedfa9511434ed01cd9b2438dd2ff1e8684d01e0bcfcc439714->leave($__internal_e2c1e855d00e6cedfa9511434ed01cd9b2438dd2ff1e8684d01e0bcfcc439714_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_605f5c4bc80c7f3a3736f965e14c976bcb3af1e553162885d97a9ce222ddfe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605f5c4bc80c7f3a3736f965e14c976bcb3af1e553162885d97a9ce222ddfe0d->enter($__internal_605f5c4bc80c7f3a3736f965e14c976bcb3af1e553162885d97a9ce222ddfe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_605f5c4bc80c7f3a3736f965e14c976bcb3af1e553162885d97a9ce222ddfe0d->leave($__internal_605f5c4bc80c7f3a3736f965e14c976bcb3af1e553162885d97a9ce222ddfe0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
