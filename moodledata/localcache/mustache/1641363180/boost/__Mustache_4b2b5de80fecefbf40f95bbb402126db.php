<?php

class __Mustache_4b2b5de80fecefbf40f95bbb402126db extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
    @template core/action_menu_link

    Action menu link.

    Example context (json):
    {
        "text": "Example link text",
        "showtext": true,
        "url": "http://example.com/link"
    }
';

        return $buffer;
    }
}
