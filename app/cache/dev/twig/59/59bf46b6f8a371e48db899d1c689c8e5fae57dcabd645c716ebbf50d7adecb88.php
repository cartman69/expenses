<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4b70962cdba1e8bf213a09391be627df24be6fd5436d8963dc99241c002fcdd2 extends Twig_Template
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
        $__internal_da50290a992eaf147d3a7e0278ac18e2b92b28f3eff76f3ed1b1452d7259ade8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da50290a992eaf147d3a7e0278ac18e2b92b28f3eff76f3ed1b1452d7259ade8->enter($__internal_da50290a992eaf147d3a7e0278ac18e2b92b28f3eff76f3ed1b1452d7259ade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_da50290a992eaf147d3a7e0278ac18e2b92b28f3eff76f3ed1b1452d7259ade8->leave($__internal_da50290a992eaf147d3a7e0278ac18e2b92b28f3eff76f3ed1b1452d7259ade8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
