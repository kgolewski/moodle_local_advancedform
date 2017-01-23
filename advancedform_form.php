<?php

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');
}

require_once('locallib.php');
require_once($CFG->libdir . "/formslib.php");


class advancedform_form extends moodleform {

    /**
     * Form definition.
     */
    protected function definition()
    {
        global $CFG, $DB;
        $mform =& $this->_form;

        $mform->addElement('text', 'autocompletion', 'Autocompletion', 'Autocomplete');
        $mform->addElement('text', 'validation', 'Validation', 'Validation');
        $mform->addElement('checkbox', 'animation', 'Animation', 'Do you want to see amazing animation?');
        $mform->addElement('button', 'ajax', 'Send me some ajax request');
        $this->add_action_buttons(false, 'Submit');

    }

    // Validation.
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);

        return $errors;
    }
}