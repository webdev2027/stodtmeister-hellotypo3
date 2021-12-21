<?php
// https://docs.typo3.org/typo3cms/TSconfigReference/UsingSetting/Index.html#setting-default-user-tsconfig

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addUserTSConfig('
    options {
      pageTree {
        showPageIdWithTitle = 1
        backgroundColor {
          3 = rgba(63, 165, 53, 0.5)
        }
      }
      clearCache.system = 1
    }
');

ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:hellotypo3/Configuration/PageTs/TCEFORM.tsconfig'"
);
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:hellotypo3/Configuration/PageTs/TCAdefaults.tsconfig'"
);
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:hellotypo3/Configuration/PageTs/EXTENSIONS.tsconfig'"
);
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:hellotypo3/Configuration/PageTs/Mod/web_layout.tsconfig'"
);
// ckEditor RTE
ExtensionManagementUtility::addPageTSConfig(
    "@import 'EXT:hellotypo3/Configuration/PageTs/Rte/CKEDITOR.tsconfig'"
);
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:hellotypo3/Configuration/RTE/hellotypo3_ckeditor.yaml';