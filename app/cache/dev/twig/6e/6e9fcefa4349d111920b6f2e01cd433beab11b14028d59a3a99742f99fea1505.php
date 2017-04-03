<?php

/* AppBundle:TypeDepense:create.html.twig */
class __TwigTemplate_a6d86a862a7092437d603da1d8f957ef059ec73d681f5084badddbf59b699076 extends Twig_Template
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
        $__internal_e5c156cf440fb2f28c7f4ccdeb00eb63d3107a1369dcd873f593996b1bcf6907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c156cf440fb2f28c7f4ccdeb00eb63d3107a1369dcd873f593996b1bcf6907->enter($__internal_e5c156cf440fb2f28c7f4ccdeb00eb63d3107a1369dcd873f593996b1bcf6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:TypeDepense:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c156cf440fb2f28c7f4ccdeb00eb63d3107a1369dcd873f593996b1bcf6907->leave($__internal_e5c156cf440fb2f28c7f4ccdeb00eb63d3107a1369dcd873f593996b1bcf6907_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e8a9c24d51a3905f1d4b70659eaf4331a21c86621893df6b222f826249592e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8a9c24d51a3905f1d4b70659eaf4331a21c86621893df6b222f826249592e7->enter($__internal_5e8a9c24d51a3905f1d4b70659eaf4331a21c86621893df6b222f826249592e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:TypeDepense:create";
        
        $__internal_5e8a9c24d51a3905f1d4b70659eaf4331a21c86621893df6b222f826249592e7->leave($__internal_5e8a9c24d51a3905f1d4b70659eaf4331a21c86621893df6b222f826249592e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27cd0513cf80ac05edfd6f73031955e1f6b0a3d729bd93b6a63e9c9af6f2c9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cd0513cf80ac05edfd6f73031955e1f6b0a3d729bd93b6a63e9c9af6f2c9e4->enter($__internal_27cd0513cf80ac05edfd6f73031955e1f6b0a3d729bd93b6a63e9c9af6f2c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_27cd0513cf80ac05edfd6f73031955e1f6b0a3d729bd93b6a63e9c9af6f2c9e4->leave($__internal_27cd0513cf80ac05edfd6f73031955e1f6b0a3d729bd93b6a63e9c9af6f2c9e4_prof);

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
", "AppBundle:TypeDepense:create.html.twig", "Z:\\laragon\\www\\depenses\\src\\AppBundle/Resources/views/TypeDepense/create.html.twig");
    }
}
