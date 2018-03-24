<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/autumn/pages/blog.htm */
class __TwigTemplate_612bca6ed3ca1297f78e46e6ca934e3a9db04bb86c8da48278365a95eba49be8 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPosts' %}", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/autumn/pages/blog.htm", "");
    }
}
