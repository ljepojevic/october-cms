<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/autumn/pages/home.htm */
class __TwigTemplate_90dccd8d8d8db9b47c8f583db004ee331beaa7b91b660daa0145f88273f63c7d extends Twig_Template
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
        // line 1
        echo "<div class=\"jumbotron text-center\">
\t<h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
\t<p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
\t<p>
\t\t<a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" class=\"btn btn-primary\">Read more</a>
\t</p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
\t<h1>{{ this.theme.site_name }}</h1>
\t<p>{{ this.theme.site_description }}</p>
\t<p>
\t\t<a href=\"{{ 'about'|page }}\" class=\"btn btn-primary\">Read more</a>
\t</p>
</div>", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/home.htm", "");
    }
}
