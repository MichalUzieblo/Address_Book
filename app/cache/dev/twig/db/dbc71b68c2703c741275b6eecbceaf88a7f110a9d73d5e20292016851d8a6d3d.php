<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_56047a77bdcae7741743227bdbfddba588f986032319099e2f4c0f6568d3c9fc extends Twig_Template
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
        $__internal_db0ab71e908c3925ef9d3ed90913861fb3886c0c468fb2ecfae9755d658c37f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0ab71e908c3925ef9d3ed90913861fb3886c0c468fb2ecfae9755d658c37f9->enter($__internal_db0ab71e908c3925ef9d3ed90913861fb3886c0c468fb2ecfae9755d658c37f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_db0ab71e908c3925ef9d3ed90913861fb3886c0c468fb2ecfae9755d658c37f9->leave($__internal_db0ab71e908c3925ef9d3ed90913861fb3886c0c468fb2ecfae9755d658c37f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/michal/Workspace/modul_5/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
