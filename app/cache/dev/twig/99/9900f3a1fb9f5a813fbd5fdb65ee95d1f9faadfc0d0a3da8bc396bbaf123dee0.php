<?php

/* AddressBookBundle:Address:new.html.twig */
class __TwigTemplate_a3f97dd0eb3cc74d47002fbe4e09f9f93f39e72904461ad23580b96636588ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Address:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_832edff40cbcbe04f78c7a87906a5b023e2ce085b08a2a88f79eed19b2a286d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832edff40cbcbe04f78c7a87906a5b023e2ce085b08a2a88f79eed19b2a286d1->enter($__internal_832edff40cbcbe04f78c7a87906a5b023e2ce085b08a2a88f79eed19b2a286d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Address:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832edff40cbcbe04f78c7a87906a5b023e2ce085b08a2a88f79eed19b2a286d1->leave($__internal_832edff40cbcbe04f78c7a87906a5b023e2ce085b08a2a88f79eed19b2a286d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2358b6b14facbf4129fe6588194ff40936fa04ba405705037c0b7b41ac02d36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2358b6b14facbf4129fe6588194ff40936fa04ba405705037c0b7b41ac02d36d->enter($__internal_2358b6b14facbf4129fe6588194ff40936fa04ba405705037c0b7b41ac02d36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Address";
        
        $__internal_2358b6b14facbf4129fe6588194ff40936fa04ba405705037c0b7b41ac02d36d->leave($__internal_2358b6b14facbf4129fe6588194ff40936fa04ba405705037c0b7b41ac02d36d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebbe943f874a4bdb674f13b3f4ed26347a6c532e7569194ea7710dff261a4619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbe943f874a4bdb674f13b3f4ed26347a6c532e7569194ea7710dff261a4619->enter($__internal_ebbe943f874a4bdb674f13b3f4ed26347a6c532e7569194ea7710dff261a4619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_ebbe943f874a4bdb674f13b3f4ed26347a6c532e7569194ea7710dff261a4619->leave($__internal_ebbe943f874a4bdb674f13b3f4ed26347a6c532e7569194ea7710dff261a4619_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Address:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}New Address{% endblock %}

{% block body %}
    {{form(form)}}
{% endblock %}
", "AddressBookBundle:Address:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Address/new.html.twig");
    }
}
