<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f23d89eb15bdefe5e949e38f44adf3e7921d380acaa892369398a86a4d487742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4e814a6bc0dc8d6550f258a745f8caf765dde3ad2e56b83ddfdd97dd6606f8d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e814a6bc0dc8d6550f258a745f8caf765dde3ad2e56b83ddfdd97dd6606f8d7->enter($__internal_4e814a6bc0dc8d6550f258a745f8caf765dde3ad2e56b83ddfdd97dd6606f8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e814a6bc0dc8d6550f258a745f8caf765dde3ad2e56b83ddfdd97dd6606f8d7->leave($__internal_4e814a6bc0dc8d6550f258a745f8caf765dde3ad2e56b83ddfdd97dd6606f8d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8689ea141fbb3bb5431b8380aa234106d0c8ce19f22c5350200da9ddd24b41b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8689ea141fbb3bb5431b8380aa234106d0c8ce19f22c5350200da9ddd24b41b7->enter($__internal_8689ea141fbb3bb5431b8380aa234106d0c8ce19f22c5350200da9ddd24b41b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8689ea141fbb3bb5431b8380aa234106d0c8ce19f22c5350200da9ddd24b41b7->leave($__internal_8689ea141fbb3bb5431b8380aa234106d0c8ce19f22c5350200da9ddd24b41b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
