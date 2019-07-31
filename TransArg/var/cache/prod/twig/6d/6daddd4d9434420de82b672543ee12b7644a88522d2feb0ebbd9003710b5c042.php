<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e9841388fc304eadda155fab88c6707b8a177d1e5427a4cada056260583b8b29 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('submit_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('reset_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-horizontal"))]);
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "col-sm-2";
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["widget_attr"] = [];
        // line 27
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 28
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 30
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 32
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 36
        echo "</div>
";
        // line 37
        echo "</div>";
    }

    // line 40
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "<div class=\"form-group\">";
        // line 42
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 43
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        echo "</div>";
        // line 46
        echo "</div>";
    }

    // line 49
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div class=\"form-group\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "col-sm-10";
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 64
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 65
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 68
        echo "</div>";
        // line 69
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 69,  251 => 68,  249 => 67,  247 => 66,  243 => 65,  239 => 64,  233 => 63,  229 => 62,  225 => 59,  221 => 58,  217 => 55,  215 => 54,  213 => 53,  209 => 52,  205 => 51,  203 => 50,  199 => 49,  195 => 46,  193 => 45,  191 => 44,  187 => 43,  183 => 42,  181 => 41,  177 => 40,  173 => 37,  170 => 36,  168 => 35,  166 => 34,  164 => 33,  160 => 32,  158 => 31,  152 => 30,  149 => 28,  147 => 27,  145 => 26,  141 => 25,  137 => 20,  133 => 19,  128 => 15,  126 => 14,  121 => 12,  119 => 11,  115 => 10,  111 => 5,  109 => 4,  105 => 3,  101 => 62,  98 => 61,  96 => 58,  93 => 57,  91 => 49,  88 => 48,  86 => 40,  83 => 39,  81 => 25,  78 => 24,  75 => 22,  73 => 19,  70 => 18,  68 => 10,  65 => 9,  62 => 7,  60 => 3,  57 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "/home/diene/Documents/Transfert-Argent-/TransArg/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
