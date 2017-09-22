<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3449aef501f7a7c1af9954e7e9c0639e1103180df73215319a2f29ab8bbe4f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a169588674cff7c70ca6e1bc83e210a47d6012ef9271c94e2ceba582c8a259d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a169588674cff7c70ca6e1bc83e210a47d6012ef9271c94e2ceba582c8a259d2->enter($__internal_a169588674cff7c70ca6e1bc83e210a47d6012ef9271c94e2ceba582c8a259d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a169588674cff7c70ca6e1bc83e210a47d6012ef9271c94e2ceba582c8a259d2->leave($__internal_a169588674cff7c70ca6e1bc83e210a47d6012ef9271c94e2ceba582c8a259d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03b4a6c9b0227b5da2724f56a8674fa6e160328539fdcdb833949ffeb6a68f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b4a6c9b0227b5da2724f56a8674fa6e160328539fdcdb833949ffeb6a68f07->enter($__internal_03b4a6c9b0227b5da2724f56a8674fa6e160328539fdcdb833949ffeb6a68f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_03b4a6c9b0227b5da2724f56a8674fa6e160328539fdcdb833949ffeb6a68f07->leave($__internal_03b4a6c9b0227b5da2724f56a8674fa6e160328539fdcdb833949ffeb6a68f07_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
