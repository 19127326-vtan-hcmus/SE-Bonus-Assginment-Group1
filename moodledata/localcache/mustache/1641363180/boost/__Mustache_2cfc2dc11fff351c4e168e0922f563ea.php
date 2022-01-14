<?php

class __Mustache_2cfc2dc11fff351c4e168e0922f563ea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="custom-control custom-checkbox">
';
        $buffer .= $indent . '  <input type="checkbox" name=';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= $value;
        $buffer .= ' class="custom-control-input" value=';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= $value;
        $buffer .= ' id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= $value;
        $buffer .= '" ';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->sectionB6bbc8e340ee0a0d1fcb32ab02369f61($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '  <label class="custom-control-label" for="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= $value;
        $buffer .= '">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= $value;
        $buffer .= '</label>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionB6bbc8e340ee0a0d1fcb32ab02369f61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked="checked" ';
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
                
                $buffer .= ' checked="checked" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
