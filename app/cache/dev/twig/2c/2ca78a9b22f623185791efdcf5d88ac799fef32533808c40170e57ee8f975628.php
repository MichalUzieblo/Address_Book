<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_ef73829c1a6e03947bebda67ec84153200c39c4042559184e5ad7ff61169ecf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45d4378af2d41ba32e49a31f518a484c09bde7ded8d58530cbed5d0ac89b7c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d4378af2d41ba32e49a31f518a484c09bde7ded8d58530cbed5d0ac89b7c94->enter($__internal_45d4378af2d41ba32e49a31f518a484c09bde7ded8d58530cbed5d0ac89b7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45d4378af2d41ba32e49a31f518a484c09bde7ded8d58530cbed5d0ac89b7c94->leave($__internal_45d4378af2d41ba32e49a31f518a484c09bde7ded8d58530cbed5d0ac89b7c94_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_3e9b24183538b8e1de3090139067694abc86ed15dfc369b95bf219187aac8477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9b24183538b8e1de3090139067694abc86ed15dfc369b95bf219187aac8477->enter($__internal_3e9b24183538b8e1de3090139067694abc86ed15dfc369b95bf219187aac8477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo " 

    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Welcome in Address_Book Application</a>
    </div>

    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_index");
        echo "\">Home</a>
            </li>
        </ul>            
    </div><!--/.nav-collapse -->

";
        
        $__internal_3e9b24183538b8e1de3090139067694abc86ed15dfc369b95bf219187aac8477->leave($__internal_3e9b24183538b8e1de3090139067694abc86ed15dfc369b95bf219187aac8477_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_871058db25ea7f79d68e3d5e258aed862d183096154948460835cf3742c32ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871058db25ea7f79d68e3d5e258aed862d183096154948460835cf3742c32ecf->enter($__internal_871058db25ea7f79d68e3d5e258aed862d183096154948460835cf3742c32ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "<p>
";
        // line 29
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_871058db25ea7f79d68e3d5e258aed862d183096154948460835cf3742c32ecf->leave($__internal_871058db25ea7f79d68e3d5e258aed862d183096154948460835cf3742c32ecf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  76 => 28,  70 => 27,  57 => 18,  35 => 3,  11 => 1,);
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

{% block nav %} 

    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">Welcome in Address_Book Application</a>
    </div>

    <div id=\"navbar\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\">
                <a href=\"{{path('addressbook_person_index')}}\">Home</a>
            </li>
        </ul>            
    </div><!--/.nav-collapse -->

{% endblock %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
