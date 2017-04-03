<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_270991af087fd4e642b3583ad5f42798d3c6a5af5ed1b7c0c3652ab9f54fc6be extends Twig_Template
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
        $__internal_60af7adba99a0cb089feb46e30cb2796710b5966ad8fc68f9bf0bd89567cd9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60af7adba99a0cb089feb46e30cb2796710b5966ad8fc68f9bf0bd89567cd9fe->enter($__internal_60af7adba99a0cb089feb46e30cb2796710b5966ad8fc68f9bf0bd89567cd9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_60af7adba99a0cb089feb46e30cb2796710b5966ad8fc68f9bf0bd89567cd9fe->leave($__internal_60af7adba99a0cb089feb46e30cb2796710b5966ad8fc68f9bf0bd89567cd9fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "Z:\\laragon\\www\\depenses\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
