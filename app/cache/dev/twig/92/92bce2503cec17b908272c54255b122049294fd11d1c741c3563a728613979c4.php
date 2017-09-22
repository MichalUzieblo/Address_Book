<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_06caa69206bb8d3734149c7f3f375526b2a14eb0ba1a587838db9e78952988d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_529ce8dc8885e4a51b55159c977a207ead4aa581ef50e48fb36489a801abb2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529ce8dc8885e4a51b55159c977a207ead4aa581ef50e48fb36489a801abb2a2->enter($__internal_529ce8dc8885e4a51b55159c977a207ead4aa581ef50e48fb36489a801abb2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_529ce8dc8885e4a51b55159c977a207ead4aa581ef50e48fb36489a801abb2a2->leave($__internal_529ce8dc8885e4a51b55159c977a207ead4aa581ef50e48fb36489a801abb2a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_111aaa1306f69fb3f22d6875dabefb400cbf3221587a03b7c6fd3d52bf153849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111aaa1306f69fb3f22d6875dabefb400cbf3221587a03b7c6fd3d52bf153849->enter($__internal_111aaa1306f69fb3f22d6875dabefb400cbf3221587a03b7c6fd3d52bf153849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_111aaa1306f69fb3f22d6875dabefb400cbf3221587a03b7c6fd3d52bf153849->leave($__internal_111aaa1306f69fb3f22d6875dabefb400cbf3221587a03b7c6fd3d52bf153849_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77a98a5bb03e628b4e6ed0bcf83d6016b0dcf267804bf60e8d2002112b02fb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a98a5bb03e628b4e6ed0bcf83d6016b0dcf267804bf60e8d2002112b02fb72->enter($__internal_77a98a5bb03e628b4e6ed0bcf83d6016b0dcf267804bf60e8d2002112b02fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_77a98a5bb03e628b4e6ed0bcf83d6016b0dcf267804bf60e8d2002112b02fb72->leave($__internal_77a98a5bb03e628b4e6ed0bcf83d6016b0dcf267804bf60e8d2002112b02fb72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6fdefa066466e05534e3f261f610700fcc7488cf5f3b8c25bde0f19fbff20fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fdefa066466e05534e3f261f610700fcc7488cf5f3b8c25bde0f19fbff20fb->enter($__internal_b6fdefa066466e05534e3f261f610700fcc7488cf5f3b8c25bde0f19fbff20fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6fdefa066466e05534e3f261f610700fcc7488cf5f3b8c25bde0f19fbff20fb->leave($__internal_b6fdefa066466e05534e3f261f610700fcc7488cf5f3b8c25bde0f19fbff20fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
