<?php

/* AddressBookBundle:Person:index.html.twig */
class __TwigTemplate_a7744b9e4bcdc9f800b8ca33187b43977259fc6bc0bd939122158672c815395d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "My contacts";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>My contacts:</h1>
<h3>Select group:</h3>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ranks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 9
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_indexrank", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_indexrank", array("rank_id" => "all"));
        echo "\" class=\"btn btn-default\">
        All
    </a>
<hr>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["persons"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 18
            echo "    <div class=\"row well\">
        <div class=\"col-xs-8\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo "
            </a>
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_delete", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    <div class=\"row well\">
        No contacts yet.
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  108 => 35,  96 => 28,  90 => 25,  81 => 21,  77 => 20,  73 => 18,  68 => 17,  60 => 13,  51 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AddressBookBundle:Person:index.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Person/index.html.twig");
    }
}
