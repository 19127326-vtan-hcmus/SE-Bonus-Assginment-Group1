<?php

class __Mustache_328ecc3363ee3c29929568d1ad2f2bbd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->sectionFbed11caadf8a5e5d31fed7c03ce91f2($context, $indent, $value);

        return $buffer;
    }

    private function section17f3d1ab55887b273f62f9f7fe44e71b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newevent, core_calendar';
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
                
                $buffer .= 'newevent, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbed11caadf8a5e5d31fed7c03ce91f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<button{{!
    }} class=""{{!

    }}>
    {{#str}}newevent, core_calendar{{/str}}
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
                $buffer .= ' class=""';
                $buffer .= '>
';
                $buffer .= $indent . '    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section17f3d1ab55887b273f62f9f7fe44e71b($context, $indent, $value);
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
