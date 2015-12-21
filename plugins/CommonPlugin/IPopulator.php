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
 */

/**
 * This is an interface for classes that can populate a WebblerListing instance
 * 
 */
interface CommonPlugin_IPopulator
{
    public function populate(WebblerListing $w, $start, $limit);
    public function total();
}