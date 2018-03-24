<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/autumn/layouts/default.htm */
class __TwigTemplate_4b28f8ab5b2163f464f7d00587c545333b19677e32143082bf7101522ebdb36a extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t    <title>Autumn ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
\t    <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\">
\t    ";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "\t\t</header>
\t\t<div class=\"container\">
\t\t\t";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 16
        echo "\t\t</div>
\t\t<footer>
\t\t\t";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "\t\t</footer>
\t\t<script type=\"text/javascript\" src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  70 => 21,  66 => 20,  63 => 19,  59 => 18,  55 => 16,  53 => 15,  49 => 13,  45 => 12,  40 => 9,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
\t<head>
\t    <title>Autumn {{ this.page.title }}</title>
\t    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/lux/bootstrap.min.css\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/css/theme.css'|theme }}\">
\t    {% styles %}
\t</head>
\t<body>
\t\t<header>
\t\t\t{% partial 'site/header' %}
\t\t</header>
\t\t<div class=\"container\">
\t\t\t{% page %}
\t\t</div>
\t\t<footer>
\t\t\t{% partial 'site/footer' %}
\t\t</footer>
\t\t<script type=\"text/javascript\" src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
\t</body>
</html>", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/layouts/default.htm", "");
    }
}
