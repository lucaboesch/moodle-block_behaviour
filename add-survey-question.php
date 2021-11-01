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
 * This script is called to add a survey to the DB.
 *
 * @package block_behaviour
 * @author Ted Krahn
 * @copyright 2021 Athabasca University
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__.'/../../config.php');
require_once("$CFG->dirroot/blocks/behaviour/locallib.php");

defined('MOODLE_INTERNAL') || die();

$data = required_param('data', PARAM_RAW);
require_sesskey();

$data = (array) json_decode($data);
$course = get_course(intval($data['courseid']));

require_login($course);
$context = context_course::instance($course->id);
require_capability('block/behaviour:view', $context);

// Was script called with course id where plugin is not installed?
if (!block_behaviour_is_installed($course->id)) {

    redirect(new moodle_url('/course/view.php', array('id' => $course->id)));
    die();
}

$params = array(
    'survey' => intval($data['surveyid']),
    'qtype' => $data['qtype'],
    'qtext' => $data['qtext'],
    'ordering' => intval($data['qorder']),
);
if (isset($data['questionid'])) {
    $params['id'] = intval($data['questionid']);
    $DB->update_record('block_behaviour_survey_qs', $params);
    $DB->delete_records('block_behaviour_survey_opts', array('question' => $params['id']));
    $id = $params['id'];
} else {
    $id = $DB->insert_record('block_behaviour_survey_qs', $params);
}

$out = [];
if ($data['qtype'] != 'likert') {
    foreach ($data['labels'] as $k => $v) {
        $out[] = (object) [
            'question' => $id,
            'ordering' => $k,
            'text' => $v
        ];
    }
}
$DB->insert_records('block_behaviour_survey_opts', $out);
die((string) $id);
