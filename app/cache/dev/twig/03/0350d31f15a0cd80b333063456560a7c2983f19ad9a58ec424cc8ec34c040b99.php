<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9a34bf276eb4a8a7d9800d5d14ffd8cab07f248f495cdab66e3b942af06426ee extends Twig_Template
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
        $__internal_6e8b5241a949356dda31185fc06b155b4fe2c437043808ce75f6c6c8383ebc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8b5241a949356dda31185fc06b155b4fe2c437043808ce75f6c6c8383ebc02->enter($__internal_6e8b5241a949356dda31185fc06b155b4fe2c437043808ce75f6c6c8383ebc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6e8b5241a949356dda31185fc06b155b4fe2c437043808ce75f6c6c8383ebc02->leave($__internal_6e8b5241a949356dda31185fc06b155b4fe2c437043808ce75f6c6c8383ebc02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
