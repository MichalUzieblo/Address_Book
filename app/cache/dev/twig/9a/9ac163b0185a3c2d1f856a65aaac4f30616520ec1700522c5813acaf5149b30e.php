<?php

/* AddressBookBundle:Rank:new.html.twig */
class __TwigTemplate_901e1f2e90eb94b6f47f78f2415e24f7cd247f0702d51ef0af368dec2db41504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:new.html.twig", 1);
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
        $__internal_7ca5459eb86e04b7b5c6c39cae6e5c02a783c504eb9047ef5259783b8c923786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca5459eb86e04b7b5c6c39cae6e5c02a783c504eb9047ef5259783b8c923786->enter($__internal_7ca5459eb86e04b7b5c6c39cae6e5c02a783c504eb9047ef5259783b8c923786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Rank:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca5459eb86e04b7b5c6c39cae6e5c02a783c504eb9047ef5259783b8c923786->leave($__internal_7ca5459eb86e04b7b5c6c39cae6e5c02a783c504eb9047ef5259783b8c923786_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ce4905a7868d134f4c4f2bd106d6a72b93c6f7252c593a342f655cc663eaa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce4905a7868d134f4c4f2bd106d6a72b93c6f7252c593a342f655cc663eaa04->enter($__internal_3ce4905a7868d134f4c4f2bd106d6a72b93c6f7252c593a342f655cc663eaa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New group of persons";
        
        $__internal_3ce4905a7868d134f4c4f2bd106d6a72b93c6f7252c593a342f655cc663eaa04->leave($__internal_3ce4905a7868d134f4c4f2bd106d6a72b93c6f7252c593a342f655cc663eaa04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_92c804a690adafd832ff95afdbc899777ac2213c749248126117f551a812d86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c804a690adafd832ff95afdbc899777ac2213c749248126117f551a812d86c->enter($__internal_92c804a690adafd832ff95afdbc899777ac2213c749248126117f551a812d86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_select", array("person_id" => ($context["person_id"] ?? $this->getContext($context, "person_id")))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        Select group
    </a>
";
        
        $__internal_92c804a690adafd832ff95afdbc899777ac2213c749248126117f551a812d86c->leave($__internal_92c804a690adafd832ff95afdbc899777ac2213c749248126117f551a812d86c_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}New group of persons{% endblock %}

{% block body %}
    {{form(form)}}
    
    <a href=\"{{path('addressbook_rank_select', {'person_id':person_id})}}\" class=\"btn btn-default\">
        Select group
    </a>
{% endblock %}

", "AddressBookBundle:Rank:new.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/new.html.twig");
    }
}
