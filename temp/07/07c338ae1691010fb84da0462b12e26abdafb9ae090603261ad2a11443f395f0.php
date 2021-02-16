<?php

/* home.twig */
class __TwigTemplate_5ccf32435448d98986377505bb980234556c341bbcf3666e1275fd9f5a92b912 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "

";
        // line 6
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "  <title>Film</title>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Les films</h1>
  <ul>
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["film"]);
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 10
            echo "\t<li>film.nom_film</li>
  </ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  54 => 10,  50 => 9,  46 => 7,  43 => 6,  38 => 2,  35 => 1,  31 => 6,  27 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\wamp64\\www\\annuaire\\model\\home.twig");
    }
}
