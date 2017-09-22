<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_82f255b40f4dc22da2c5ce68b988e22e01e760ca1c7ebdcc80b71e756d7315d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ef6a2eb5d09b662cd3c4fda99409d674d08666b84f5d89512dfb0c5fc525faae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6a2eb5d09b662cd3c4fda99409d674d08666b84f5d89512dfb0c5fc525faae->enter($__internal_ef6a2eb5d09b662cd3c4fda99409d674d08666b84f5d89512dfb0c5fc525faae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6a2eb5d09b662cd3c4fda99409d674d08666b84f5d89512dfb0c5fc525faae->leave($__internal_ef6a2eb5d09b662cd3c4fda99409d674d08666b84f5d89512dfb0c5fc525faae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4186ce993be56267d553484dd1dd6f6103bbdbb06f9af075253545263069be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4186ce993be56267d553484dd1dd6f6103bbdbb06f9af075253545263069be57->enter($__internal_4186ce993be56267d553484dd1dd6f6103bbdbb06f9af075253545263069be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4186ce993be56267d553484dd1dd6f6103bbdbb06f9af075253545263069be57->leave($__internal_4186ce993be56267d553484dd1dd6f6103bbdbb06f9af075253545263069be57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
