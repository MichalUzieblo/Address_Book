<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2f42b4fb8e26935df9bc43628f3e041614dbb7e27d299601d4b2326423c16621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_140c4d3332ff2dc71b762ff7ebfcba0dabbaeec7cfc27665ffb16ec17b3ae745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140c4d3332ff2dc71b762ff7ebfcba0dabbaeec7cfc27665ffb16ec17b3ae745->enter($__internal_140c4d3332ff2dc71b762ff7ebfcba0dabbaeec7cfc27665ffb16ec17b3ae745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140c4d3332ff2dc71b762ff7ebfcba0dabbaeec7cfc27665ffb16ec17b3ae745->leave($__internal_140c4d3332ff2dc71b762ff7ebfcba0dabbaeec7cfc27665ffb16ec17b3ae745_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7372653aa35e61c1b843e8b05a8b6f60c3e58a2941144875c93c963acd8d31e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7372653aa35e61c1b843e8b05a8b6f60c3e58a2941144875c93c963acd8d31e9->enter($__internal_7372653aa35e61c1b843e8b05a8b6f60c3e58a2941144875c93c963acd8d31e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7372653aa35e61c1b843e8b05a8b6f60c3e58a2941144875c93c963acd8d31e9->leave($__internal_7372653aa35e61c1b843e8b05a8b6f60c3e58a2941144875c93c963acd8d31e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a41f494d29ec345bac4d130cea6b40c0bbe3b4c96c0b8345eb37a2a46dbad39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41f494d29ec345bac4d130cea6b40c0bbe3b4c96c0b8345eb37a2a46dbad39c->enter($__internal_a41f494d29ec345bac4d130cea6b40c0bbe3b4c96c0b8345eb37a2a46dbad39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a41f494d29ec345bac4d130cea6b40c0bbe3b4c96c0b8345eb37a2a46dbad39c->leave($__internal_a41f494d29ec345bac4d130cea6b40c0bbe3b4c96c0b8345eb37a2a46dbad39c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5015901909c5a987e76e84e18d255d12b5ebe61712060300b1cb936a0bdc5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5015901909c5a987e76e84e18d255d12b5ebe61712060300b1cb936a0bdc5b1->enter($__internal_f5015901909c5a987e76e84e18d255d12b5ebe61712060300b1cb936a0bdc5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f5015901909c5a987e76e84e18d255d12b5ebe61712060300b1cb936a0bdc5b1->leave($__internal_f5015901909c5a987e76e84e18d255d12b5ebe61712060300b1cb936a0bdc5b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
