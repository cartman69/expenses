<?php

/* AppBundle:TypeDepense:create.html.twig */
class __TwigTemplate_ec5d49bd6233db2ac456bcfe80e413f0f1bd12d86a6dc61338ab49dfb700b81e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:TypeDepense:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7ced45c2c2117704722c44c17beda11bf8bc6ca82c9ab69718202754cf739c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ced45c2c2117704722c44c17beda11bf8bc6ca82c9ab69718202754cf739c3->enter($__internal_c7ced45c2c2117704722c44c17beda11bf8bc6ca82c9ab69718202754cf739c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:TypeDepense:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ced45c2c2117704722c44c17beda11bf8bc6ca82c9ab69718202754cf739c3->leave($__internal_c7ced45c2c2117704722c44c17beda11bf8bc6ca82c9ab69718202754cf739c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8027666009cf35952930c9f100cbe5b065af0ffc152a9423b0efca43fe28b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8027666009cf35952930c9f100cbe5b065af0ffc152a9423b0efca43fe28b81->enter($__internal_b8027666009cf35952930c9f100cbe5b065af0ffc152a9423b0efca43fe28b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:TypeDepense:create";
        
        $__internal_b8027666009cf35952930c9f100cbe5b065af0ffc152a9423b0efca43fe28b81->leave($__internal_b8027666009cf35952930c9f100cbe5b065af0ffc152a9423b0efca43fe28b81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f74319bb610bb26df404591431c7bc8a5a672f2c7701f624fb38b43878f4a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f74319bb610bb26df404591431c7bc8a5a672f2c7701f624fb38b43878f4a44->enter($__internal_1f74319bb610bb26df404591431c7bc8a5a672f2c7701f624fb38b43878f4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the TypeDepense:create page</h1>
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1f74319bb610bb26df404591431c7bc8a5a672f2c7701f624fb38b43878f4a44->leave($__internal_1f74319bb610bb26df404591431c7bc8a5a672f2c7701f624fb38b43878f4a44_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:TypeDepense:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:TypeDepense:create{% endblock %}

{% block body %}
<h1>Welcome to the TypeDepense:create page</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}
", "AppBundle:TypeDepense:create.html.twig", "Z:\\laragon\\www\\depenses\\src\\AppBundle\\Resources\\views\\TypeDepense\\create.html.twig");
    }
}
