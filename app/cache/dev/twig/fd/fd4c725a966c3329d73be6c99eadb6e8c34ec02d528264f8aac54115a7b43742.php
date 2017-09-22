<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_632d0b197aa7c2c1f702e2fbda66524748e04447b7ec44413daaf71d47c4021e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e51d7ad3642d9486f077ce63d36ea2341ccbc04b8e3edffe7bcd5035ca625c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e51d7ad3642d9486f077ce63d36ea2341ccbc04b8e3edffe7bcd5035ca625c->enter($__internal_28e51d7ad3642d9486f077ce63d36ea2341ccbc04b8e3edffe7bcd5035ca625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e51d7ad3642d9486f077ce63d36ea2341ccbc04b8e3edffe7bcd5035ca625c->leave($__internal_28e51d7ad3642d9486f077ce63d36ea2341ccbc04b8e3edffe7bcd5035ca625c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cb32b175be66b17522296b9dcee1fdede4325555ac88cb1941f537ad895d959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb32b175be66b17522296b9dcee1fdede4325555ac88cb1941f537ad895d959->enter($__internal_0cb32b175be66b17522296b9dcee1fdede4325555ac88cb1941f537ad895d959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0cb32b175be66b17522296b9dcee1fdede4325555ac88cb1941f537ad895d959->leave($__internal_0cb32b175be66b17522296b9dcee1fdede4325555ac88cb1941f537ad895d959_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa12b2d1a098cd1fee183eff7652d50ae5b1832b1ac105ed67b08d34c226fabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa12b2d1a098cd1fee183eff7652d50ae5b1832b1ac105ed67b08d34c226fabb->enter($__internal_fa12b2d1a098cd1fee183eff7652d50ae5b1832b1ac105ed67b08d34c226fabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fa12b2d1a098cd1fee183eff7652d50ae5b1832b1ac105ed67b08d34c226fabb->leave($__internal_fa12b2d1a098cd1fee183eff7652d50ae5b1832b1ac105ed67b08d34c226fabb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_557b6350a8afdbd2de99168cf9ccb977002ec431c59064fc2a2ce9fcc71d6f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557b6350a8afdbd2de99168cf9ccb977002ec431c59064fc2a2ce9fcc71d6f20->enter($__internal_557b6350a8afdbd2de99168cf9ccb977002ec431c59064fc2a2ce9fcc71d6f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_557b6350a8afdbd2de99168cf9ccb977002ec431c59064fc2a2ce9fcc71d6f20->leave($__internal_557b6350a8afdbd2de99168cf9ccb977002ec431c59064fc2a2ce9fcc71d6f20_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4469e4b729c313b413f67e8f585f8207365ab276f679762bcae680c8bdd41969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4469e4b729c313b413f67e8f585f8207365ab276f679762bcae680c8bdd41969->enter($__internal_4469e4b729c313b413f67e8f585f8207365ab276f679762bcae680c8bdd41969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4469e4b729c313b413f67e8f585f8207365ab276f679762bcae680c8bdd41969->leave($__internal_4469e4b729c313b413f67e8f585f8207365ab276f679762bcae680c8bdd41969_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle:Configurator:layout.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
