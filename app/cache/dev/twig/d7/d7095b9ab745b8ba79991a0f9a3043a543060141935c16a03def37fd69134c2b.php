<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_3d30e4fea48df5186ab6e9f63478f71b90dd52e96339ca197fb0715ee0fd76e8 extends Twig_Template
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
        $__internal_d873d593ed9e5c33b8a0e8cbaa01ef8a677c9c7a1d76eb08804e2e17606e77dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d873d593ed9e5c33b8a0e8cbaa01ef8a677c9c7a1d76eb08804e2e17606e77dc->enter($__internal_d873d593ed9e5c33b8a0e8cbaa01ef8a677c9c7a1d76eb08804e2e17606e77dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d873d593ed9e5c33b8a0e8cbaa01ef8a677c9c7a1d76eb08804e2e17606e77dc->leave($__internal_d873d593ed9e5c33b8a0e8cbaa01ef8a677c9c7a1d76eb08804e2e17606e77dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
