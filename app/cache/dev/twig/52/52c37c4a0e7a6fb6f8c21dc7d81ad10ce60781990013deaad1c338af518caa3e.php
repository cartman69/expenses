<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cc11adcd8905086ab512b4ae440a1382026d0e83d72ee054ffef684fd10baf0b extends Twig_Template
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
        $__internal_0985c9ed8cd3ea2b074b2dbb27f2b04023d2149487918e690d2514abce204ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0985c9ed8cd3ea2b074b2dbb27f2b04023d2149487918e690d2514abce204ed9->enter($__internal_0985c9ed8cd3ea2b074b2dbb27f2b04023d2149487918e690d2514abce204ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0985c9ed8cd3ea2b074b2dbb27f2b04023d2149487918e690d2514abce204ed9->leave($__internal_0985c9ed8cd3ea2b074b2dbb27f2b04023d2149487918e690d2514abce204ed9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9fc63437acda27548e738bd394e963d657e3dde1950a964a03676f0f1adb375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fc63437acda27548e738bd394e963d657e3dde1950a964a03676f0f1adb375->enter($__internal_d9fc63437acda27548e738bd394e963d657e3dde1950a964a03676f0f1adb375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9fc63437acda27548e738bd394e963d657e3dde1950a964a03676f0f1adb375->leave($__internal_d9fc63437acda27548e738bd394e963d657e3dde1950a964a03676f0f1adb375_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab5c74f211f0431986d9e6b8f18a85ed04ec95fce9e8415ec9157adc0837b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab5c74f211f0431986d9e6b8f18a85ed04ec95fce9e8415ec9157adc0837b70->enter($__internal_fab5c74f211f0431986d9e6b8f18a85ed04ec95fce9e8415ec9157adc0837b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fab5c74f211f0431986d9e6b8f18a85ed04ec95fce9e8415ec9157adc0837b70->leave($__internal_fab5c74f211f0431986d9e6b8f18a85ed04ec95fce9e8415ec9157adc0837b70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2252bfa6c01e90d873249b5714f012c6e86a52e789cb982cb697f7e8981ff2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2252bfa6c01e90d873249b5714f012c6e86a52e789cb982cb697f7e8981ff2c0->enter($__internal_2252bfa6c01e90d873249b5714f012c6e86a52e789cb982cb697f7e8981ff2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2252bfa6c01e90d873249b5714f012c6e86a52e789cb982cb697f7e8981ff2c0->leave($__internal_2252bfa6c01e90d873249b5714f012c6e86a52e789cb982cb697f7e8981ff2c0_prof);

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
