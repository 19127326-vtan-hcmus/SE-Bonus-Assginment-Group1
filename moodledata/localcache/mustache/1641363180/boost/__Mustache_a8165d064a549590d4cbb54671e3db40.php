<?php

class __Mustache_a8165d064a549590d4cbb54671e3db40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE10894e1d199b8d98cd9097196b8b1a7($context, $indent, $value);

        return $buffer;
    }

    private function sectionE10894e1d199b8d98cd9097196b8b1a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core_message/message_popover\'
],
function(
    $,
    Popover
) {
    var toggle = $(\'#message-drawer-toggle-{{uniqid}}\');
    Popover.init(toggle);
});
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
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_message/message_popover\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Popover
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var toggle = $(\'#message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    Popover.init(toggle);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
