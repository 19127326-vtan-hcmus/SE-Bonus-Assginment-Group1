<?php

class __Mustache_8568150a2637534c28b8c778c5ad3208 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="popover-region collapsed ';
        $blockFunction = $context->findInBlock('classes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('attributes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    data-region="popover-region">
';
        $buffer .= $indent . '    <div class="popover-region-toggle nav-link icon-no-margin"
';
        $buffer .= $indent . '        data-region="popover-region-toggle"
';
        $buffer .= $indent . '        role="button"
';
        $buffer .= $indent . '        aria-controls="popover-region-container-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '        aria-haspopup="true"
';
        $buffer .= $indent . '        aria-label="';
        $blockFunction = $context->findInBlock('togglelabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section8b664e6398e53f993cf581dd926d5784($context, $indent, $value);
        }
        $buffer .= '"
';
        $buffer .= $indent . '        tabindex="0">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('togglecontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div ';
        $blockFunction = $context->findInBlock('containerattributes');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '     
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8b664e6398e53f993cf581dd926d5784(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showpopovermenu';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showpopovermenu';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
