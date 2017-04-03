<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_acb060f43b82469696d40f039524ee797f572826930c252a94ca0c1f68673fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e183f370bd7d82c6cda24551efc2cf801b5721541dccada4f972c04a277985a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e183f370bd7d82c6cda24551efc2cf801b5721541dccada4f972c04a277985a1->enter($__internal_e183f370bd7d82c6cda24551efc2cf801b5721541dccada4f972c04a277985a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e183f370bd7d82c6cda24551efc2cf801b5721541dccada4f972c04a277985a1->leave($__internal_e183f370bd7d82c6cda24551efc2cf801b5721541dccada4f972c04a277985a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2a8abd4b50b561acbd21b859ebc82eeafcfb4be3239303eef5b1caa90dce8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a8abd4b50b561acbd21b859ebc82eeafcfb4be3239303eef5b1caa90dce8e9->enter($__internal_b2a8abd4b50b561acbd21b859ebc82eeafcfb4be3239303eef5b1caa90dce8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2a8abd4b50b561acbd21b859ebc82eeafcfb4be3239303eef5b1caa90dce8e9->leave($__internal_b2a8abd4b50b561acbd21b859ebc82eeafcfb4be3239303eef5b1caa90dce8e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e14438b99313f0f85ee65b109af7b77891c287e2b021ebc453d433d3d599545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e14438b99313f0f85ee65b109af7b77891c287e2b021ebc453d433d3d599545->enter($__internal_5e14438b99313f0f85ee65b109af7b77891c287e2b021ebc453d433d3d599545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e14438b99313f0f85ee65b109af7b77891c287e2b021ebc453d433d3d599545->leave($__internal_5e14438b99313f0f85ee65b109af7b77891c287e2b021ebc453d433d3d599545_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54897c397b3ed5ae21f44f63032833b0ce1e4188ab7a78f07edb5d4ccaa62222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54897c397b3ed5ae21f44f63032833b0ce1e4188ab7a78f07edb5d4ccaa62222->enter($__internal_54897c397b3ed5ae21f44f63032833b0ce1e4188ab7a78f07edb5d4ccaa62222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54897c397b3ed5ae21f44f63032833b0ce1e4188ab7a78f07edb5d4ccaa62222->leave($__internal_54897c397b3ed5ae21f44f63032833b0ce1e4188ab7a78f07edb5d4ccaa62222_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
