<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_86ff1ca230142a446a4b2eb8dcb65692b04d77bf9ee1ef12ac0ef612344c051a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_3826f7659359e7d3fdaf4fae10e9e29e2de6bc03a1e5ee7156297a67ad331330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3826f7659359e7d3fdaf4fae10e9e29e2de6bc03a1e5ee7156297a67ad331330->enter($__internal_3826f7659359e7d3fdaf4fae10e9e29e2de6bc03a1e5ee7156297a67ad331330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3826f7659359e7d3fdaf4fae10e9e29e2de6bc03a1e5ee7156297a67ad331330->leave($__internal_3826f7659359e7d3fdaf4fae10e9e29e2de6bc03a1e5ee7156297a67ad331330_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_02a7f710c67c91b1ba92074ca078d9b61834fd721a8a273e00afe71a634fff4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a7f710c67c91b1ba92074ca078d9b61834fd721a8a273e00afe71a634fff4d->enter($__internal_02a7f710c67c91b1ba92074ca078d9b61834fd721a8a273e00afe71a634fff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_02a7f710c67c91b1ba92074ca078d9b61834fd721a8a273e00afe71a634fff4d->leave($__internal_02a7f710c67c91b1ba92074ca078d9b61834fd721a8a273e00afe71a634fff4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aeb18be35a865dd0f8d00fc727cf778166a908136fc38973411c2bacd51d9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aeb18be35a865dd0f8d00fc727cf778166a908136fc38973411c2bacd51d9dd->enter($__internal_5aeb18be35a865dd0f8d00fc727cf778166a908136fc38973411c2bacd51d9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_5aeb18be35a865dd0f8d00fc727cf778166a908136fc38973411c2bacd51d9dd->leave($__internal_5aeb18be35a865dd0f8d00fc727cf778166a908136fc38973411c2bacd51d9dd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9d4cc3c3ac73b7610564083085ed287056ce12b8b0f5ab7d3300befbafeaa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d4cc3c3ac73b7610564083085ed287056ce12b8b0f5ab7d3300befbafeaa9d->enter($__internal_e9d4cc3c3ac73b7610564083085ed287056ce12b8b0f5ab7d3300befbafeaa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9d4cc3c3ac73b7610564083085ed287056ce12b8b0f5ab7d3300befbafeaa9d->leave($__internal_e9d4cc3c3ac73b7610564083085ed287056ce12b8b0f5ab7d3300befbafeaa9d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_1facc8f7e51a6ffb4af04bb87df2ef94b743d7d75ff6e79e79982d57cafdb987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1facc8f7e51a6ffb4af04bb87df2ef94b743d7d75ff6e79e79982d57cafdb987->enter($__internal_1facc8f7e51a6ffb4af04bb87df2ef94b743d7d75ff6e79e79982d57cafdb987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1facc8f7e51a6ffb4af04bb87df2ef94b743d7d75ff6e79e79982d57cafdb987->leave($__internal_1facc8f7e51a6ffb4af04bb87df2ef94b743d7d75ff6e79e79982d57cafdb987_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
", "@SensioDistribution/Configurator/layout.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
