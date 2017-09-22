<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_cb70b4fca7172081a306ff0cb73a86259b718b7862b0afcdd11d5d5df3a68328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f27bc48ae07b957b21176940415837c3ecf8e53534b8bff19f0403a6df74fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f27bc48ae07b957b21176940415837c3ecf8e53534b8bff19f0403a6df74fe6->enter($__internal_6f27bc48ae07b957b21176940415837c3ecf8e53534b8bff19f0403a6df74fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"btn-default btn\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<br>
<form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_user_delete");
        echo "\" method=\"post\">
    <div class=\"form-group\">
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-default btn\" value=\"Delete User\" />
    </div>
</form>
";
        
        $__internal_6f27bc48ae07b957b21176940415837c3ecf8e53534b8bff19f0403a6df74fe6->leave($__internal_6f27bc48ae07b957b21176940415837c3ecf8e53534b8bff19f0403a6df74fe6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" class=\"btn-default btn\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}

<br>
<form action=\"{{ path(\"addressbook_user_delete\") }}\" method=\"post\">
    <div class=\"form-group\">
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-default btn\" value=\"Delete User\" />
    </div>
</form>
", "FOSUserBundle:Profile:edit_content.html.twig", "/home/michal/Workspace/modul_5/Address_Book/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
