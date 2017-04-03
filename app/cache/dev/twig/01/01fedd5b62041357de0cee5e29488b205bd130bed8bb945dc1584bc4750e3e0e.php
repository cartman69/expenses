<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e01b8b03b0581d4a67ede3ffc5119ad6b2b3e917be6f931b8e60d75d1ec6b56d extends Twig_Template
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
        $__internal_b56d2de309f367c6c9c2fd19a850c44988745db3b86ae00243628fde6de847ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56d2de309f367c6c9c2fd19a850c44988745db3b86ae00243628fde6de847ee->enter($__internal_b56d2de309f367c6c9c2fd19a850c44988745db3b86ae00243628fde6de847ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b56d2de309f367c6c9c2fd19a850c44988745db3b86ae00243628fde6de847ee->leave($__internal_b56d2de309f367c6c9c2fd19a850c44988745db3b86ae00243628fde6de847ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
