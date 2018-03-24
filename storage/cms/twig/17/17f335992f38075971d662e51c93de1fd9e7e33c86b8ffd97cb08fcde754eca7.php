<?php

/* C:\xampp\htdocs\train-codes\Gitting\cms/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_e051c80cb4d541f36e3b41ef0e5bf4b2d87a8d4c4b285d77b3dc1bfdf340f481 extends Twig_Template
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
        echo "<h1>Contact us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email</label>
        <input type=\"text\" name=\"email\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"message\">Message</label>
        <textarea name=\"message\" class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact us</h1>
<form action=\"\">
    <div class=\"form-group\">
        <label for=\"name\">Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"email\">Email</label>
        <input type=\"text\" name=\"email\" class=\"form-control\">
    </div>
    <div class=\"form-group\">
        <label for=\"message\">Message</label>
        <textarea name=\"message\" class=\"form-control\"></textarea>
    </div>
    <button type=\"submit\">Submit</button>
</form>", "C:\\xampp\\htdocs\\train-codes\\Gitting\\cms/themes/responsiv-clean/pages/contact.htm", "");
    }
}
