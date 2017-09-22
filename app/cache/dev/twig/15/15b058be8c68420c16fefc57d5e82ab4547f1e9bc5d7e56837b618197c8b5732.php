<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8cc0e254fecbb32aaa08863be8326801c5b7eeb57cf16691895924902f2bdefc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2b99e5e9da8b6d1672ebe3cee847e951c7f7607f0d673dd72e2493960a020a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b99e5e9da8b6d1672ebe3cee847e951c7f7607f0d673dd72e2493960a020a3f->enter($__internal_2b99e5e9da8b6d1672ebe3cee847e951c7f7607f0d673dd72e2493960a020a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b99e5e9da8b6d1672ebe3cee847e951c7f7607f0d673dd72e2493960a020a3f->leave($__internal_2b99e5e9da8b6d1672ebe3cee847e951c7f7607f0d673dd72e2493960a020a3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_289a166e473a08f29d9295f7a04b8cfd37b321ed2b7ce367b01d17c028b7659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289a166e473a08f29d9295f7a04b8cfd37b321ed2b7ce367b01d17c028b7659c->enter($__internal_289a166e473a08f29d9295f7a04b8cfd37b321ed2b7ce367b01d17c028b7659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_289a166e473a08f29d9295f7a04b8cfd37b321ed2b7ce367b01d17c028b7659c->leave($__internal_289a166e473a08f29d9295f7a04b8cfd37b321ed2b7ce367b01d17c028b7659c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
