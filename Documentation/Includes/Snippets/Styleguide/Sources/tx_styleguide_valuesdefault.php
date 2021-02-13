<?php // Example from extension "styleguide", table "tx_styleguide_palette"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - default values new records',
      'label' => 'uid',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'delete' => 'deleted',
      'sortby' => 'sorting',
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
      'versioningWS' => true,
      'origUid' => 't3_origuid',
      'languageField' => 'sys_language_uid',
      'transOrigPointerField' => 'l10n_parent',
      'transOrigDiffSourceField' => 'l10n_diffsource',
      'translationSource' => 'l10n_source',
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
   ],
   // [end ctrl]
   // [start columns]
   'columns' => [ 
      // [start hidden]
      'hidden' => [ 
         'exclude' => 1,
         'config' => [ 
            'type' => 'check',
            'items' => [ 
               '1' => [ 
                  '0' => 'Disable',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end hidden]
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => 1,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                  '1' => -1,
               ],
               '1' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                  '1' => 0,
               ],
            ],
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end sys_language_uid]
      // [start l10n_parent]
      'l10n_parent' => [ 
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation parent',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_valuesdefault',
            'foreign_table_where' => 'AND {#tx_styleguide_valuesdefault}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_valuesdefault}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end l10n_parent]
      // [start l10n_source]
      'l10n_source' => [ 
         'exclude' => true,
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation source',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_valuesdefault',
            'foreign_table_where' => 'AND {#tx_styleguide_valuesdefault}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_valuesdefault}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end l10n_diffsource]
      // [start input_1]
      'input_1' => [ 
         'exclude' => 1,
         'label' => 'input_1 default=Default value"',
         'config' => [ 
            'type' => 'input',
            'default' => 'Default value',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end input_1]
      // [start input_2]
      'input_2' => [ 
         'exclude' => 1,
         'label' => 'input_26 default=0, eval=datetime, readonly=1',
         'config' => [ 
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => 1,
            'eval' => 'datetime',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end input_2]
      // [start input_3]
      'input_3' => [ 
         'exclude' => 1,
         'label' => 'input_27 default=3, eval=int, range lower=2, range upper=7',
         'config' => [ 
            'type' => 'input',
            'eval' => 'int',
            'range' => [ 
               'lower' => 2,
               'upper' => 7,
            ],
            'default' => 3,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end input_3]
      // [start text_1]
      'text_1' => [ 
         'exclude' => 1,
         'label' => 'text_12 default="text_12"',
         'config' => [ 
            'type' => 'text',
            'default' => 'text_12',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end text_1]
      // [start checkbox_1]
      'checkbox_1' => [ 
         'exclude' => 1,
         'label' => 'checkbox_1 default=1',
         'config' => [ 
            'type' => 'check',
            'default' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end checkbox_1]
      // [start checkbox_2]
      'checkbox_2' => [ 
         'exclude' => 1,
         'label' => 'checkbox_2 default=1, one checkbox with label',
         'config' => [ 
            'type' => 'check',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo',
                  '1' => '',
               ],
            ],
            'default' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end checkbox_2]
      // [start checkbox_3]
      'checkbox_3' => [ 
         'exclude' => 1,
         'label' => 'checkbox_3 default=5, four checkboxes, 1 and 3 pre-selected',
         'config' => [ 
            'type' => 'check',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo1',
                  '1' => '',
               ],
               '1' => [ 
                  '0' => 'foo2',
                  '1' => '',
               ],
               '2' => [ 
                  '0' => 'foo3',
                  '1' => '',
               ],
               '3' => [ 
                  '0' => 'foo4',
                  '1' => '',
               ],
            ],
            'default' => 5,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end checkbox_3]
      // [start checkbox_16]
      'checkbox_16' => [ 
         'exclude' => 1,
         'label' => 'checkbox_16 cols=inline',
         'config' => [ 
            'type' => 'check',
            'items' => [ 
               '0' => [ 
                  '0' => 'Mo',
                  '1' => '',
               ],
               '1' => [ 
                  '0' => 'Tu',
                  '1' => '',
               ],
               '2' => [ 
                  '0' => 'We',
                  '1' => '',
               ],
               '3' => [ 
                  '0' => 'Th',
                  '1' => '',
               ],
               '4' => [ 
                  '0' => 'Fr',
                  '1' => '',
               ],
               '5' => [ 
                  '0' => 'Sa',
                  '1' => '',
               ],
               '6' => [ 
                  '0' => 'Su',
                  '1' => '',
               ],
            ],
            'cols' => 'inline',
            'default' => 5,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end checkbox_16]
      // [start radio_1]
      'radio_1' => [ 
         'exclude' => 1,
         'label' => 'radio_1 default=2, three options, second pre-selected',
         'config' => [ 
            'type' => 'radio',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo3',
                  '1' => 3,
               ],
            ],
            'default' => 2,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end radio_1]
      // [start select_1]
      'select_1' => [ 
         'exclude' => 1,
         'label' => 'select_1 default=2, renderType=selectSingle, three items, second pre-selected',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo3',
                  '1' => 4,
               ],
            ],
            'default' => 2,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end select_1]
      // [start select_2]
      'select_2' => [ 
         'exclude' => 1,
         'label' => 'select_2 default=1,3 renderType=selectCheckBox',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '3' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
            ],
            'default' => '1,3',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_valuesdefault"
      // [end select_2]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;basic,
                    input_1, input_2, input_3,
                    text_1,
                    checkbox_1, checkbox_2, checkbox_3, checkbox_16,
                    radio_1,
                --div--;select,
                    select_1,select_2,
            ',
      ],
   ],
   // [end types]
];