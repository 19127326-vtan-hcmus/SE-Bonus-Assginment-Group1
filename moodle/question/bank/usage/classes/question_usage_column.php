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

namespace qbank_usage;

use core_question\local\bank\column_base;

/**
 * A column type for the name of the question type.
 *
 * @package    qbank_usage
 * @copyright  2021 Catalyst IT Australia Pty Ltd
 * @author     Safat Shahin <safatshahin@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class question_usage_column extends column_base {

    public function get_name(): string {
        return 'questionusage';
    }

    protected function get_title(): string {
        return get_string('questionusage', 'qbank_usage');
    }

    protected function display_content($question, $rowclasses): void {
        global $PAGE;
        $usagecount = helper::get_question_entry_usage_count($question);
        $attributes = [];
        if (question_has_capability_on($question, 'view')) {
            $target = 'questionusagepreview_' . $question->id;
            $datatarget = '[data-target="' . $target . '"]';
            $PAGE->requires->js_call_amd('qbank_usage/usage', 'init', [$datatarget, $question->contextid]);
            $attributes = [
                'data-target' => $target,
                'data-questionid' => $question->id,
                'data-courseid' => $this->qbank->course->id,
                'class' => 'link-primary comment-pointer'
            ];
        }
        echo \html_writer::tag('a', $usagecount, $attributes);
    }

}
