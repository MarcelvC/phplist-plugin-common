<?php
/**
 * CommonPlugin for phplist
 * 
 * This file is a part of CommonPlugin.
 *
 * @category  phplist
 * @package   CommonPlugin
 * @author    Duncan Cameron
 * @copyright 2011-2014 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 * @link      http://forums.phplist.com/viewtopic.php?f=7&t=35427
 */

/**
 * Convenience class to create an HTML link to another page
 * 
 */
class CommonPlugin_PageLink
{
    /*
     * Private variables
     */
    private $url;
    private $text;
    private $attrs;
    /*
     *    Public methods
     */
    /**
     * Constructor
     * @param string $url the page url
     * @param string $text text for link - this is not automatically html encoded
     * @param array $attrs additional attributes for the A element
     * @access public
     */
    public function __construct($url, $text, array $attrs = array())
    {
        $this->url = $url;
        $this->text = $text;
        $this->attrs = $attrs;
    }

    /**
     * Generate a link for the given page and query parameters
     * @return string html <a> element
     * @access public
     */
    public function __toString()
    {
        $string = '';
        $this->attrs['href'] = $this->url;

        foreach ($this->attrs as $k => $v) {
            $string .= sprintf(' %s="%s"', $k, htmlspecialchars($v));
        }
        return sprintf('<a%s>%s</a>', $string, $this->text);
    }
}
