<?php
/**
 * CommonPlugin for phplist
 * 
 * This file is a part of CommonPlugin.
 *
 * @category  phplist
 * @package   CommonPlugin
 * @author    Duncan Cameron
 * @copyright 2011-2012 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 * @link      http://forums.phplist.com/viewtopic.php?f=7&t=35427
 */

/**
 * Class to create a URL for an image served through the plugin
 * Encapsulates how the image is served
 */
class CommonPlugin_ImageTag
{
    /*
     *    Public methods
     */
    public function __construct($image, $title)
    {
        $this->image = $image;
        $this->title = $title;
        $this->alt = $title;
    }

    public function __toString()
    {
        $imageUrl = new CommonPlugin_PageURL('image', array('pi' => 'CommonPlugin', 'image' => $this->image));
        return CHtml::tag('img', array('src'=> $imageUrl, 'alt' => $this->alt, 'title' => $this->title));
    }
}
