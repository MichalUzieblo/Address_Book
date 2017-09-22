<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7afdd2056a221b4f77b4686d1963d554e86e9aa544b0117dbcc2379dd0748561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4c7bd5bd37808d44c096155df42f5608761402f9fd72e57ec1a13944a46054e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7bd5bd37808d44c096155df42f5608761402f9fd72e57ec1a13944a46054e8->enter($__internal_4c7bd5bd37808d44c096155df42f5608761402f9fd72e57ec1a13944a46054e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7bd5bd37808d44c096155df42f5608761402f9fd72e57ec1a13944a46054e8->leave($__internal_4c7bd5bd37808d44c096155df42f5608761402f9fd72e57ec1a13944a46054e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4337c7635ac99aac17d71514f855f34afa14a2fb0b4d4216c325d01cfee051a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4337c7635ac99aac17d71514f855f34afa14a2fb0b4d4216c325d01cfee051a0->enter($__internal_4337c7635ac99aac17d71514f855f34afa14a2fb0b4d4216c325d01cfee051a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4337c7635ac99aac17d71514f855f34afa14a2fb0b4d4216c325d01cfee051a0->leave($__internal_4337c7635ac99aac17d71514f855f34afa14a2fb0b4d4216c325d01cfee051a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
