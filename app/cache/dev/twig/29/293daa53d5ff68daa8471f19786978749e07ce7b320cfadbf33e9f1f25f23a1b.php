<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_dd4d0c439c365057a5dd3630bddffb9e21ca8ac6ba54b6f78aa27d0b00b94877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3cd86c361dd1d846d0dec3cbba6e1098bbc8394e1daf48a9881565897eff573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cd86c361dd1d846d0dec3cbba6e1098bbc8394e1daf48a9881565897eff573->enter($__internal_e3cd86c361dd1d846d0dec3cbba6e1098bbc8394e1daf48a9881565897eff573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3cd86c361dd1d846d0dec3cbba6e1098bbc8394e1daf48a9881565897eff573->leave($__internal_e3cd86c361dd1d846d0dec3cbba6e1098bbc8394e1daf48a9881565897eff573_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_caad1a2a387ae6f93e57123c4e2129dff9657d9d9f210654d09d8f1d45f05d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caad1a2a387ae6f93e57123c4e2129dff9657d9d9f210654d09d8f1d45f05d88->enter($__internal_caad1a2a387ae6f93e57123c4e2129dff9657d9d9f210654d09d8f1d45f05d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_caad1a2a387ae6f93e57123c4e2129dff9657d9d9f210654d09d8f1d45f05d88->leave($__internal_caad1a2a387ae6f93e57123c4e2129dff9657d9d9f210654d09d8f1d45f05d88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
