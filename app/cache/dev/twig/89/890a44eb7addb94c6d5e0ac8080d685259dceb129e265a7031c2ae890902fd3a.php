<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_e5cf8b28aab37fb9a63032409a3fdf39f9a38f60fc6fd756ad228c10625e55c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae17ba748d1372aa34ebb657dac4e5fe1eef07e26d20c03c58525e08c70517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae17ba748d1372aa34ebb657dac4e5fe1eef07e26d20c03c58525e08c70517d->enter($__internal_2ae17ba748d1372aa34ebb657dac4e5fe1eef07e26d20c03c58525e08c70517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae17ba748d1372aa34ebb657dac4e5fe1eef07e26d20c03c58525e08c70517d->leave($__internal_2ae17ba748d1372aa34ebb657dac4e5fe1eef07e26d20c03c58525e08c70517d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4bc7fb2e2c5e3531bed6723d91f47974e798d7c1fe7d27f75e225f6cf32083a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bc7fb2e2c5e3531bed6723d91f47974e798d7c1fe7d27f75e225f6cf32083a->enter($__internal_f4bc7fb2e2c5e3531bed6723d91f47974e798d7c1fe7d27f75e225f6cf32083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f4bc7fb2e2c5e3531bed6723d91f47974e798d7c1fe7d27f75e225f6cf32083a->leave($__internal_f4bc7fb2e2c5e3531bed6723d91f47974e798d7c1fe7d27f75e225f6cf32083a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08bb998264828e3ab7e209de7c233547a41446bc9afbcab9a93952e7bbc43b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb998264828e3ab7e209de7c233547a41446bc9afbcab9a93952e7bbc43b45->enter($__internal_08bb998264828e3ab7e209de7c233547a41446bc9afbcab9a93952e7bbc43b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_08bb998264828e3ab7e209de7c233547a41446bc9afbcab9a93952e7bbc43b45->leave($__internal_08bb998264828e3ab7e209de7c233547a41446bc9afbcab9a93952e7bbc43b45_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2634e1cc2d6c9f1ea6f6f0d1e184bea55ae77fc2bdfcba222fcb7a11b637d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2634e1cc2d6c9f1ea6f6f0d1e184bea55ae77fc2bdfcba222fcb7a11b637d884->enter($__internal_2634e1cc2d6c9f1ea6f6f0d1e184bea55ae77fc2bdfcba222fcb7a11b637d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_2634e1cc2d6c9f1ea6f6f0d1e184bea55ae77fc2bdfcba222fcb7a11b637d884->leave($__internal_2634e1cc2d6c9f1ea6f6f0d1e184bea55ae77fc2bdfcba222fcb7a11b637d884_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b76b03e1de54803df04136e1dbdfde5358a908002a2206200e2bbf3422b3391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b76b03e1de54803df04136e1dbdfde5358a908002a2206200e2bbf3422b3391->enter($__internal_7b76b03e1de54803df04136e1dbdfde5358a908002a2206200e2bbf3422b3391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7b76b03e1de54803df04136e1dbdfde5358a908002a2206200e2bbf3422b3391->leave($__internal_7b76b03e1de54803df04136e1dbdfde5358a908002a2206200e2bbf3422b3391_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
