<?php

class __Mustache_fae65d03a2dab289685bb41008fde03a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->section542e400c294ae5d183b8aa3e0f23488a($context, $indent, $value);

        return $buffer;
    }

    private function sectionA82d3adfa1a862526bb3f8dc8d6b75b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'a, core_calendar';
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
                
                $buffer .= 'a, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section542e400c294ae5d183b8aa3e0f23488a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button{{!
    }} class="btn btn-primary float-sm-right float-right"{{!
    }} data-context-id="{{defaulteventcontext}}"{{!
    }} a="new-event-button"{{!
    }}>
    {{#str}}a, core_calendar{{/str}}
</button>
';
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
                
                $buffer .= $indent . '<button';
                $buffer .= ' class="btn btn-primary float-sm-right float-right"';
                $buffer .= ' data-context-id="';
                $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= ' a="new-event-button"';
                $buffer .= '>
';
                $buffer .= $indent . '    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA82d3adfa1a862526bb3f8dc8d6b75b0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
