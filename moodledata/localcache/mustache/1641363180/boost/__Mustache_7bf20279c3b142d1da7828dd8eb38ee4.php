<?php

class __Mustache_7bf20279c3b142d1da7828dd8eb38ee4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->sectionA483a326f1c4fed12476aa9c4147b42f($context, $indent, $value);

        return $buffer;
    }

    private function sectionE5dae5271a22b45025d3d9c8ba8d79a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aaa, core_calendar';
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
                
                $buffer .= 'aaa, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA483a326f1c4fed12476aa9c4147b42f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button{{!
    }} class="btn btn-primary float-sm-right float-right"{{!
    }} data-context-id="{{defaulteventcontext}}"{{!
    }} aa="new-event-button"{{!
    }}>
    {{#str}}aaa, core_calendar{{/str}}
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
                $buffer .= ' aa="new-event-button"';
                $buffer .= '>
';
                $buffer .= $indent . '    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE5dae5271a22b45025d3d9c8ba8d79a7($context, $indent, $value);
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
