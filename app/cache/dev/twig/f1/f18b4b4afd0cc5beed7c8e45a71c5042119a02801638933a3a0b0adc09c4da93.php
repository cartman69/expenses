<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0dc8ac6a21f6ad23ea1b985ca3bff2894f3312c47249ea6dd1cee7b120debf03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_327403b5ef95eae5372db23e5ecd2120d81e04c92546ce1ddb1317e577e7aa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327403b5ef95eae5372db23e5ecd2120d81e04c92546ce1ddb1317e577e7aa84->enter($__internal_327403b5ef95eae5372db23e5ecd2120d81e04c92546ce1ddb1317e577e7aa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_327403b5ef95eae5372db23e5ecd2120d81e04c92546ce1ddb1317e577e7aa84->leave($__internal_327403b5ef95eae5372db23e5ecd2120d81e04c92546ce1ddb1317e577e7aa84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
