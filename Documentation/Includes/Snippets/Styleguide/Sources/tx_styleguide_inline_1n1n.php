<?php // Example from extension "styleguide", table "tx_styleguide_inline_1n"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - inline 1:n 1:n',
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
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
      // [end hidden]
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                  '1' => -1,
                  '2' => 'flags-multiple',
               ],
            ],
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
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
            'foreign_table' => 'tx_styleguide_inline_1n1n',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_1n1n}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_1n1n}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
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
            'foreign_table' => 'tx_styleguide_inline_1n1n',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_1n1n}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_1n1n}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
      // [end l10n_diffsource]
      // [start inline_1]
      'inline_1' => [ 
         'exclude' => 1,
         'label' => 'inline_1',
         'config' => [ 
            'type' => 'inline',
            'foreign_table' => 'tx_styleguide_inline_1n1n_child',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_1n1n"
      // [end inline_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                inline_1,
                --div--;meta,
                    disable, sys_language_uid, l10n_parent, l10n_source,
            ',
      ],
   ],
   // [end types]
];