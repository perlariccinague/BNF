<?php
return array(
    'label' => array('Team-Mitglied', 'Meine Beschreibung...'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'name' => array(
            'label' => array('Name', 'Beschreibung...'),
            'inputType' => 'text'
        ),
        'photo' => array(
            'label' => array('Foto', 'Beschreibung...'),
            'eval' => array('filesOnly' => true),
            'inputType' => 'fileTree'
        ),
        'position' => array(
            'label' => array('Position', 'Beschreibung...'),
            'inputType' => 'text'
        ),
        'email' => array(
            'label' => array('E-Mail', 'Beschreibung...'),
            'inputType' => 'text'
        ),
        'phone' => array(
            'label' => array('Telefon', 'Beschreibung...'),
            'inputType' => 'text'
        )
    )
);
