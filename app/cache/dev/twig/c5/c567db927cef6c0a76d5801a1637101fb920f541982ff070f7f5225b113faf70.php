<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_46dcd2e8254465fd7d2729ce9d447eca4eb6b92ef87fd5838f542a9b812a1f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_985287735230315b0e0d2a7206f40bda198f727589927916183a8c7b8e27e879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985287735230315b0e0d2a7206f40bda198f727589927916183a8c7b8e27e879->enter($__internal_985287735230315b0e0d2a7206f40bda198f727589927916183a8c7b8e27e879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985287735230315b0e0d2a7206f40bda198f727589927916183a8c7b8e27e879->leave($__internal_985287735230315b0e0d2a7206f40bda198f727589927916183a8c7b8e27e879_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cf06e7f53b29edbfb1bb73e86a1f5eb07a4a081ea6b2baa102f2a6a281f86d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf06e7f53b29edbfb1bb73e86a1f5eb07a4a081ea6b2baa102f2a6a281f86d0->enter($__internal_0cf06e7f53b29edbfb1bb73e86a1f5eb07a4a081ea6b2baa102f2a6a281f86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0cf06e7f53b29edbfb1bb73e86a1f5eb07a4a081ea6b2baa102f2a6a281f86d0->leave($__internal_0cf06e7f53b29edbfb1bb73e86a1f5eb07a4a081ea6b2baa102f2a6a281f86d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b895ff2cddb4f404d4e77d1a2e393303d8fc9abbd825a372d72032bd9d56ee45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b895ff2cddb4f404d4e77d1a2e393303d8fc9abbd825a372d72032bd9d56ee45->enter($__internal_b895ff2cddb4f404d4e77d1a2e393303d8fc9abbd825a372d72032bd9d56ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b895ff2cddb4f404d4e77d1a2e393303d8fc9abbd825a372d72032bd9d56ee45->leave($__internal_b895ff2cddb4f404d4e77d1a2e393303d8fc9abbd825a372d72032bd9d56ee45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f0ef3d29eb29c3f977f14cde1a51059e26b665e3e0482a4215eeaf72d5caba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0ef3d29eb29c3f977f14cde1a51059e26b665e3e0482a4215eeaf72d5caba1->enter($__internal_1f0ef3d29eb29c3f977f14cde1a51059e26b665e3e0482a4215eeaf72d5caba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1f0ef3d29eb29c3f977f14cde1a51059e26b665e3e0482a4215eeaf72d5caba1->leave($__internal_1f0ef3d29eb29c3f977f14cde1a51059e26b665e3e0482a4215eeaf72d5caba1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
