<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/autumn/partials/site/header.htm */
class __TwigTemplate_eef6e68d10dfe04585c0d7ea026827630f5647eccd2ca93b37ba7ca65052d6fd extends Twig_Template
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
        echo "<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"#\">Home</a>
        <a class=\"p-2 text-dark\" href=\"#\">Contact</a>
      </nav>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom box-shadow\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">{{ this.theme.site_name }}</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"#\">Home</a>
        <a class=\"p-2 text-dark\" href=\"#\">Contact</a>
      </nav>
    </div>", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/partials/site/header.htm", "");
    }
}
