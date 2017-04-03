<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_61fb970c46fc5fa1d5ab4897420f79dcc6fea0673a0ff1f48d6695ab38962170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddbeaedb0be467aaee65d3f23d9743fb4fc4bdca007092ea74afc7d36f3aa8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbeaedb0be467aaee65d3f23d9743fb4fc4bdca007092ea74afc7d36f3aa8ef->enter($__internal_ddbeaedb0be467aaee65d3f23d9743fb4fc4bdca007092ea74afc7d36f3aa8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddbeaedb0be467aaee65d3f23d9743fb4fc4bdca007092ea74afc7d36f3aa8ef->leave($__internal_ddbeaedb0be467aaee65d3f23d9743fb4fc4bdca007092ea74afc7d36f3aa8ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6e3d89b52f57d367a980414926bcba0c322d8415d79c486768d98117823a3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e3d89b52f57d367a980414926bcba0c322d8415d79c486768d98117823a3d0->enter($__internal_f6e3d89b52f57d367a980414926bcba0c322d8415d79c486768d98117823a3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6e3d89b52f57d367a980414926bcba0c322d8415d79c486768d98117823a3d0->leave($__internal_f6e3d89b52f57d367a980414926bcba0c322d8415d79c486768d98117823a3d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0030d9eb29053e0d08ae1733da9828ed2aff5ed4c42f72045af320a84b535bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0030d9eb29053e0d08ae1733da9828ed2aff5ed4c42f72045af320a84b535bc->enter($__internal_a0030d9eb29053e0d08ae1733da9828ed2aff5ed4c42f72045af320a84b535bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0030d9eb29053e0d08ae1733da9828ed2aff5ed4c42f72045af320a84b535bc->leave($__internal_a0030d9eb29053e0d08ae1733da9828ed2aff5ed4c42f72045af320a84b535bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2fc8bbe3307a0fd69aa760906a9324373ddcf329759c7b01086db26d57db2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2fc8bbe3307a0fd69aa760906a9324373ddcf329759c7b01086db26d57db2f8->enter($__internal_c2fc8bbe3307a0fd69aa760906a9324373ddcf329759c7b01086db26d57db2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c2fc8bbe3307a0fd69aa760906a9324373ddcf329759c7b01086db26d57db2f8->leave($__internal_c2fc8bbe3307a0fd69aa760906a9324373ddcf329759c7b01086db26d57db2f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
