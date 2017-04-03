<?php

/* @App/TypeDepense/list.html.twig */
class __TwigTemplate_56c0f1a271b6f1f76080273cdd713242e425e0f98848c771d44381f757d1282c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@App/TypeDepense/list.html.twig", 1);
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
        $__internal_9bf869dd077013af3a3f234982bc36176f17a9c41db1bcbe616cbc9a14bfb4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf869dd077013af3a3f234982bc36176f17a9c41db1bcbe616cbc9a14bfb4d2->enter($__internal_9bf869dd077013af3a3f234982bc36176f17a9c41db1bcbe616cbc9a14bfb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/TypeDepense/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf869dd077013af3a3f234982bc36176f17a9c41db1bcbe616cbc9a14bfb4d2->leave($__internal_9bf869dd077013af3a3f234982bc36176f17a9c41db1bcbe616cbc9a14bfb4d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a0df170f0c524cc0af7bb5a99a3e4400d01280d0ae2af1c9b649782546535c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a0df170f0c524cc0af7bb5a99a3e4400d01280d0ae2af1c9b649782546535c->enter($__internal_a3a0df170f0c524cc0af7bb5a99a3e4400d01280d0ae2af1c9b649782546535c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:TypeDepense:list";
        
        $__internal_a3a0df170f0c524cc0af7bb5a99a3e4400d01280d0ae2af1c9b649782546535c->leave($__internal_a3a0df170f0c524cc0af7bb5a99a3e4400d01280d0ae2af1c9b649782546535c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17bc7a9b41feb3daade5ceb6f6b084fe91eb463f3da460d2f068abf7804d5140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bc7a9b41feb3daade5ceb6f6b084fe91eb463f3da460d2f068abf7804d5140->enter($__internal_17bc7a9b41feb3daade5ceb6f6b084fe91eb463f3da460d2f068abf7804d5140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the TypeDepense:list page</h1>
";
        
        $__internal_17bc7a9b41feb3daade5ceb6f6b084fe91eb463f3da460d2f068abf7804d5140->leave($__internal_17bc7a9b41feb3daade5ceb6f6b084fe91eb463f3da460d2f068abf7804d5140_prof);

    }

    public function getTemplateName()
    {
        return "@App/TypeDepense/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}AppBundle:TypeDepense:list{% endblock %}

{% block body %}
<h1>Welcome to the TypeDepense:list page</h1>
{% endblock %}
", "@App/TypeDepense/list.html.twig", "Z:\\laragon\\www\\depenses\\src\\AppBundle\\Resources\\views\\TypeDepense\\list.html.twig");
    }
}
