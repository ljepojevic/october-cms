<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/autumn/pages/about.htm */
class __TwigTemplate_9c62b329bd07b437b8d27cdcfc3e805b1db3f06b09c3ca5beeb5f41641106a49 extends Twig_Template
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
        echo "<h1>About us</h1>
<p>This is About page</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About us</h1>
<p>This is About page</p>
<hr>
{% component 'resourcesLinks' %}", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/about.htm", "");
    }
}
