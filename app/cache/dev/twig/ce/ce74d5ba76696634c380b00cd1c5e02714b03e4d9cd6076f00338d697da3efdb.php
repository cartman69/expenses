<?php

/* AppBundle:TypeDepense:list.html.twig */
class __TwigTemplate_04349a4b6317110178c6328fbb64db5f95e5163aafc027b0088555e7f8f7ae0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:TypeDepense:list.html.twig", 1);
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
        $__internal_f6b081fd01184ab63e6e6e1c552a8c4fb3bc7134567dc6a4735a94762038db0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b081fd01184ab63e6e6e1c552a8c4fb3bc7134567dc6a4735a94762038db0e->enter($__internal_f6b081fd01184ab63e6e6e1c552a8c4fb3bc7134567dc6a4735a94762038db0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:TypeDepense:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6b081fd01184ab63e6e6e1c552a8c4fb3bc7134567dc6a4735a94762038db0e->leave($__internal_f6b081fd01184ab63e6e6e1c552a8c4fb3bc7134567dc6a4735a94762038db0e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7b1f908412e0b40d6215b684377b867b7643d9f6eeace237d029f646cbcb3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b1f908412e0b40d6215b684377b867b7643d9f6eeace237d029f646cbcb3cf->enter($__internal_d7b1f908412e0b40d6215b684377b867b7643d9f6eeace237d029f646cbcb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:TypeDepense:list";
        
        $__internal_d7b1f908412e0b40d6215b684377b867b7643d9f6eeace237d029f646cbcb3cf->leave($__internal_d7b1f908412e0b40d6215b684377b867b7643d9f6eeace237d029f646cbcb3cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ac973f9aaf78f81914a5ded139a6e7ad92e2c8325797bd9396a0f1374a8e306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac973f9aaf78f81914a5ded139a6e7ad92e2c8325797bd9396a0f1374a8e306->enter($__internal_0ac973f9aaf78f81914a5ded139a6e7ad92e2c8325797bd9396a0f1374a8e306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the TypeDepense:list page</h1>
";
        
        $__internal_0ac973f9aaf78f81914a5ded139a6e7ad92e2c8325797bd9396a0f1374a8e306->leave($__internal_0ac973f9aaf78f81914a5ded139a6e7ad92e2c8325797bd9396a0f1374a8e306_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:TypeDepense:list.html.twig";
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
", "AppBundle:TypeDepense:list.html.twig", "Z:\\laragon\\www\\depenses\\src\\AppBundle/Resources/views/TypeDepense/list.html.twig");
    }
}
