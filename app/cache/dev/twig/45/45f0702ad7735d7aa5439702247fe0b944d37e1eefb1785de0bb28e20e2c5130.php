<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_43261acd26987262a7da1c24e873f4e6e767a33b9ca8971ea7c8ba5f81afbc51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_23097ae94d4a20780976209a692aed21ad9e26a7bab7ce574f9ddb6e2feb9445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23097ae94d4a20780976209a692aed21ad9e26a7bab7ce574f9ddb6e2feb9445->enter($__internal_23097ae94d4a20780976209a692aed21ad9e26a7bab7ce574f9ddb6e2feb9445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23097ae94d4a20780976209a692aed21ad9e26a7bab7ce574f9ddb6e2feb9445->leave($__internal_23097ae94d4a20780976209a692aed21ad9e26a7bab7ce574f9ddb6e2feb9445_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f00a1105eecc9160ad576e3a7289c70a591f0b3bc94876783ee283c1d610470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00a1105eecc9160ad576e3a7289c70a591f0b3bc94876783ee283c1d610470a->enter($__internal_f00a1105eecc9160ad576e3a7289c70a591f0b3bc94876783ee283c1d610470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f00a1105eecc9160ad576e3a7289c70a591f0b3bc94876783ee283c1d610470a->leave($__internal_f00a1105eecc9160ad576e3a7289c70a591f0b3bc94876783ee283c1d610470a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
