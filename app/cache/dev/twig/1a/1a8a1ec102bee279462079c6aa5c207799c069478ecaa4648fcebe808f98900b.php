<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_15f31bc9daf6094e4bf51f6c164447ed3588bd442dfaeef2d1aec98564f16dc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c4a852e8d8de696253aa31fed1bf0e298035235f5473b4d3f9ffe97e3ed1931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4a852e8d8de696253aa31fed1bf0e298035235f5473b4d3f9ffe97e3ed1931->enter($__internal_2c4a852e8d8de696253aa31fed1bf0e298035235f5473b4d3f9ffe97e3ed1931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c4a852e8d8de696253aa31fed1bf0e298035235f5473b4d3f9ffe97e3ed1931->leave($__internal_2c4a852e8d8de696253aa31fed1bf0e298035235f5473b4d3f9ffe97e3ed1931_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe69d8c6057bc16176e55aa16a066e76ae012a299dce6b0373f683f201d0d913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe69d8c6057bc16176e55aa16a066e76ae012a299dce6b0373f683f201d0d913->enter($__internal_fe69d8c6057bc16176e55aa16a066e76ae012a299dce6b0373f683f201d0d913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fe69d8c6057bc16176e55aa16a066e76ae012a299dce6b0373f683f201d0d913->leave($__internal_fe69d8c6057bc16176e55aa16a066e76ae012a299dce6b0373f683f201d0d913_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
