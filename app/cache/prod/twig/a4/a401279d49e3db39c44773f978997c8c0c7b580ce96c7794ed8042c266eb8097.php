<?php

/* AddressBookBundle:Rank:index.html.twig */
class __TwigTemplate_a795250018fc7d7d7a6c9649ffadb78eb272345be232de18767254bbc0c0a533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Rank:index.html.twig", 1);
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
        echo "My groups";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>My groups:</h1>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ranks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rank"]) {
            // line 9
            echo "    <div class=\"row well\">
        <div class=\"col-xs-8\">            
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["rank"], "name", array()), "html", null, true);
            echo "            
        </div>
        <div class=\"col-xs-4\" align=\"right\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_edit", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
            </a>
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_rank_delete", array("rank_id" => $this->getAttribute($context["rank"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
            </a>
        </div>

    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "    <div class=\"row well\">
        No groups yet.
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Rank:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  75 => 24,  63 => 17,  57 => 14,  51 => 11,  47 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AddressBookBundle:Rank:index.html.twig", "/home/michal/Workspace/modul_5/Address_Book/src/AddressBookBundle/Resources/views/Rank/index.html.twig");
    }
}
