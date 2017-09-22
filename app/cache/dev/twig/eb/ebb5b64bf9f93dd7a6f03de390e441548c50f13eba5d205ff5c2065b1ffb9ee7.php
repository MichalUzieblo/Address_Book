<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_149259381d0dcc3f196b4e3b2bd5b05a706ac3f5af00bb4ddb52db0dde0933e8 extends Twig_Template
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
        $__internal_cd7c3b3ee3289bf1b3061b6b37cef0df1068d1dde0b91d0cf2a3a649bfaf3605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c3b3ee3289bf1b3061b6b37cef0df1068d1dde0b91d0cf2a3a649bfaf3605->enter($__internal_cd7c3b3ee3289bf1b3061b6b37cef0df1068d1dde0b91d0cf2a3a649bfaf3605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cd7c3b3ee3289bf1b3061b6b37cef0df1068d1dde0b91d0cf2a3a649bfaf3605->leave($__internal_cd7c3b3ee3289bf1b3061b6b37cef0df1068d1dde0b91d0cf2a3a649bfaf3605_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
