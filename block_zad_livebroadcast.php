<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Block displaying Zad TV Live Broadcast Schedule
 *
 * @package    block_zad_livebroadcast
 * @copyright  2018 zadgroup.net
 * @author     Tareq Nassry <tareq@zadgroup.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_zad_livebroadcast extends block_base {
    /**
     * block initializations
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_zad_livebroadcast');
    }

    /**
     * Block content management
     */
    public function get_content()
    {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;

        // Get content from config
        $config_content = get_config('block_zad_livebroadcast', 'content');

        if ($config_content)
        {
            $this->content->text = $config_content;
        }
        else
        {
            $this->content->text = "<h4>No Content</h4><p>Coming Soon<p>";
        }

        return $this->content;
    }

    /**
     * Important to show settings link in blocks management and any where else
     */
    function has_config()
    {
        return true;
    }
}