<?php
/**
 * slince view library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\View;

class ViewElementFactory
{

    /**
     * 创建视图块对象
     *
     * @param string $content            
     * @return Block
     */
    static function createBlock($content)
    {
        return new Block($content);
    }

    /**
     * 创建局部视图对象
     *
     * @param string $path            
     * @return Element
     */
    static function createElement($path)
    {
        return new Element($path);
    }
}