<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_93237944c41921439fe7ec90001978cf04673d0e2ff49334a74b193a96ab8697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_086b1db522487805920c016391346c318d31ef9c03892948d07f3197ddaecde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086b1db522487805920c016391346c318d31ef9c03892948d07f3197ddaecde4->enter($__internal_086b1db522487805920c016391346c318d31ef9c03892948d07f3197ddaecde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086b1db522487805920c016391346c318d31ef9c03892948d07f3197ddaecde4->leave($__internal_086b1db522487805920c016391346c318d31ef9c03892948d07f3197ddaecde4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fc013ec72a1d6e88e82f624ebbfdb4ce3a5794d0a79db67b650c9c447f43032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc013ec72a1d6e88e82f624ebbfdb4ce3a5794d0a79db67b650c9c447f43032->enter($__internal_3fc013ec72a1d6e88e82f624ebbfdb4ce3a5794d0a79db67b650c9c447f43032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3fc013ec72a1d6e88e82f624ebbfdb4ce3a5794d0a79db67b650c9c447f43032->leave($__internal_3fc013ec72a1d6e88e82f624ebbfdb4ce3a5794d0a79db67b650c9c447f43032_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
