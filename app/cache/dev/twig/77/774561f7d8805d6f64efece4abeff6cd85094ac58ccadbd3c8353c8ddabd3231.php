<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6997ed60810e404d3f3303c97cae1634fef842e6ba48d0ac1a33625f49c4d168 extends Twig_Template
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
        $__internal_9d5c0fcbcd7ba4f10adfbd283509656a2eba977c4b8402407ed8683d9cfd35ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5c0fcbcd7ba4f10adfbd283509656a2eba977c4b8402407ed8683d9cfd35ea->enter($__internal_9d5c0fcbcd7ba4f10adfbd283509656a2eba977c4b8402407ed8683d9cfd35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9d5c0fcbcd7ba4f10adfbd283509656a2eba977c4b8402407ed8683d9cfd35ea->leave($__internal_9d5c0fcbcd7ba4f10adfbd283509656a2eba977c4b8402407ed8683d9cfd35ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}