<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_25794e640186a65fa073d422f4a4f7418fd6c6a3066ec043645bc50bac74b13b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a5e39ef9c02cb0ce609e6d253db8778e26063f2b13555dd40afd735d4fcaf23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e39ef9c02cb0ce609e6d253db8778e26063f2b13555dd40afd735d4fcaf23e->enter($__internal_a5e39ef9c02cb0ce609e6d253db8778e26063f2b13555dd40afd735d4fcaf23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e39ef9c02cb0ce609e6d253db8778e26063f2b13555dd40afd735d4fcaf23e->leave($__internal_a5e39ef9c02cb0ce609e6d253db8778e26063f2b13555dd40afd735d4fcaf23e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d7643047ccec8c67b15837f75ba037ec8152eb6e9659051b6744e337d523d57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7643047ccec8c67b15837f75ba037ec8152eb6e9659051b6744e337d523d57c->enter($__internal_d7643047ccec8c67b15837f75ba037ec8152eb6e9659051b6744e337d523d57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7643047ccec8c67b15837f75ba037ec8152eb6e9659051b6744e337d523d57c->leave($__internal_d7643047ccec8c67b15837f75ba037ec8152eb6e9659051b6744e337d523d57c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6607e3e03dcfe332aed3c4540934597b0d3525ebc1a5e0c32cafe60f87ad45c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6607e3e03dcfe332aed3c4540934597b0d3525ebc1a5e0c32cafe60f87ad45c4->enter($__internal_6607e3e03dcfe332aed3c4540934597b0d3525ebc1a5e0c32cafe60f87ad45c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6607e3e03dcfe332aed3c4540934597b0d3525ebc1a5e0c32cafe60f87ad45c4->leave($__internal_6607e3e03dcfe332aed3c4540934597b0d3525ebc1a5e0c32cafe60f87ad45c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85a18d01f90ceabe37925806f33fc2a96006e06b349e740e1e3b45d02c8b7cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a18d01f90ceabe37925806f33fc2a96006e06b349e740e1e3b45d02c8b7cf0->enter($__internal_85a18d01f90ceabe37925806f33fc2a96006e06b349e740e1e3b45d02c8b7cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85a18d01f90ceabe37925806f33fc2a96006e06b349e740e1e3b45d02c8b7cf0->leave($__internal_85a18d01f90ceabe37925806f33fc2a96006e06b349e740e1e3b45d02c8b7cf0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
