<?php
namespace App\Admin\Extensions\Show;

use Encore\Admin\Show\AbstractField;

class UnSerialize extends AbstractField
{
    public $border = false;

    /**
     * If this field show escaped contents.
     *
     * @var bool
     */
    public $escape = false;

    public function render($arg = '')
    {
        // 返回任意可被渲染的内容
        return $this->value;
    }
}