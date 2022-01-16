<?php

class __Mustache_88bf1a4e006aef1366e11efc2c7859a7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'defaulteventcontext' section
        $value = $context->find('defaulteventcontext');
        $buffer .= $this->sectionAb28de6bcceaddd92a4b856c2c11f2c6($context, $indent, $value);

        return $buffer;
    }

    private function sectionAb28de6bcceaddd92a4b856c2c11f2c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{!
    }}{{!

    }}
    
</>
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '</>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
