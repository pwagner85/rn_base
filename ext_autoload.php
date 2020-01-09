<?php

// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2016-07-01 20:00

if (class_exists('TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility', true)) {
    $extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('rn_base');
} else {
    $extensionPath = t3lib_extMgm::extPath('rn_base');
}
$extensionClassesPath = $extensionPath.'Classes/';

return [
    'tx_rnbase' => $extensionPath.'class.tx_rnbase.php',
    'tx_rnbase_action_base' => $extensionPath.'action/class.tx_rnbase_action_Base.php',
    'tx_rnbase_action_baseioc' => $extensionPath.'action/class.tx_rnbase_action_BaseIOC.php',
    'tx_rnbase_action_cachehandlerdefault' => $extensionPath.'action/class.tx_rnbase_action_CacheHandlerDefault.php',
    'tx_rnbase_action_cachehandleruser' => $extensionPath.'action/class.tx_rnbase_action_CacheHandlerUser.php',
    'tx_rnbase_action_icachehandler' => $extensionPath.'action/class.tx_rnbase_action_ICacheHandler.php',
    'tx_rnbase_backend_abstractfunctionmodule' => $extensionClassesPath.'Backend/AbstractFunctionModule.php',
    'tx_rnbase_backend_decorator_basedecorator' => $extensionClassesPath.'Backend/Decorator/BaseDecorator.php',
    'tx_rnbase_backend_decorator_interfacedecorator' => $extensionClassesPath.'Backend/Decorator/InterfaceDecorator.php',
    'tx_rnbase_backend_form_element_inputtext' => $extensionClassesPath.'Backend/Form/Element/InputText.php',
    'tx_rnbase_backend_form_formbuilder' => $extensionClassesPath.'Backend/Form/FormBuilder.php',
    'tx_rnbase_backend_form_toolbox' => $extensionClassesPath.'Backend/Form/ToolBox.php',
    'tx_rnbase_backend_module_base' => $extensionClassesPath.'Backend/Module/Base.php',
    'tx_rnbase_backend_modulerunner' => $extensionClassesPath.'Backend/ModuleRunner.php',
    'tx_rnbase_backend_utility' => $extensionClassesPath.'Backend/Utility.php',
    'tx_rnbase_backend_utility_icons' => $extensionClassesPath.'Backend/Utility/Icons.php',
    'tx_rnbase_backend_utility_iconsfortest' => $extensionPath.'tests/Classes/Backend/Utility/IconsTest.php',
    'tx_rnbase_backend_utility_iconstest' => $extensionPath.'tests/Classes/Backend/Utility/IconsTest.php',
    'tx_rnbase_backend_utility_logger' => $extensionPath.'Classes/Utility/Logger.php',
    'tx_rnbase_backend_utility_tables' => $extensionPath.'Classes/Backend/Utility/Tables.php',
    'tx_rnbase_backend_utilityfortests' => $extensionPath.'tests/Classes/Backend/UtilityTest.php',
    'tx_rnbase_backend_utilitytest' => $extensionPath.'tests/Classes/Backend/UtilityTest.php',
    'tx_rnbase_cache_icache' => $extensionPath.'cache/class.tx_rnbase_cache_ICache.php',
    'tx_rnbase_cache_manager' => $extensionPath.'cache/class.tx_rnbase_cache_Manager.php',
    'tx_rnbase_cache_typo3cache' => $extensionPath.'cache/class.tx_rnbase_cache_TYPO3Cache.php',
    'tx_rnbase_cache_typo3cache46' => $extensionPath.'cache/class.tx_rnbase_cache_TYPO3Cache46.php',
    'tx_rnbase_cache_typo3cache60' => $extensionPath.'cache/class.tx_rnbase_cache_TYPO3Cache60.php',
    'tx_rnbase_cache_typo3cache62' => $extensionPath.'cache/class.tx_rnbase_cache_TYPO3Cache62.php',
    'tx_rnbase_commandline_controller' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_configurations' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_configuration_processor' => $extensionPath.'Classes/Configuration/Processor.php',
    'tx_rnbase_controller' => $extensionPath.'class.tx_rnbase_controller.php',
    'tx_rnbase_database_connection' => $extensionClassesPath.'Database/Connection.php',
    'tx_rnbase_database_connectionmock' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_DB_testcase.php',
    'tx_rnbase_database_connectiontest' => $extensionPath.'tests/Classes/Database/ConnectionTest.php',
    'tx_rnbase_domain_model_base' => $extensionClassesPath.'Domain/Model/Base.php',
    'tx_rnbase_domain_model_basetest' => $extensionPath.'tests/Classes/Domain/Model/BaseTest.php',
    'tx_rnbase_domain_model_data' => $extensionClassesPath.'Domain/Model/Data.php',
    'tx_rnbase_domain_model_datainterface' => $extensionClassesPath.'Domain/Model/DataInterface.php',
    'tx_rnbase_domain_model_datatest' => $extensionPath.'tests/Classes/Domain/Model/DataTest.php',
    'tx_rnbase_domain_model_domaininterface' => $extensionClassesPath.'Domain/Model/DomainInterface.php',
    'tx_rnbase_domain_model_dynamictableinterface' => $extensionClassesPath.'Domain/Model/DynamicTableInterface.php',
    'tx_rnbase_domain_model_recordinterface' => $extensionClassesPath.'Domain/Model/RecordInterface.php',
    'tx_rnbase_domain_repository_abstractrepository' => $extensionClassesPath.'Domain/Repository/AbstractRepository.php',
    'tx_rnbase_domain_repository_abstractrepositorytest' => $extensionPath.'tests/Classes/Domain/Repository/AbstractRepositoryTest.php',
    'tx_rnbase_domain_repository_interfacepersistence' => $extensionClassesPath.'Domain/Repository/InterfacePersistence.php',
    'tx_rnbase_domain_repository_interfacesearch' => $extensionClassesPath.'Domain/Repository/InterfaceSearch.php',
    'tx_rnbase_domain_repository_persistencerepository' => $extensionClassesPath.'Domain/Repository/PersistenceRepository.php',
    'tx_rnbase_domain_repository_persistencerepositorytest' => $extensionPath.'tests/Classes/Domain/Repository/PersistenceRepositoryTest.php',
    'tx_rnbase_dummycontroller' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_dummymisc' => $extensionPath.'tests/class.tx_rnbase_tests_misc_testcase.php',
    'tx_rnbase_error_errorhandler' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_error_exception' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_error_productionexceptionhandler' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_exception_base' => $extensionClassesPath.'Exception/Base.php',
    'tx_rnbase_exception_customhandler' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_exception_handler' => $extensionPath.'exception/class.tx_rnbase_exception_Handler.php',
    'tx_rnbase_exception_handlerwithoutcorrectinterface' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_exception_ihandler' => $extensionPath.'exception/class.tx_rnbase_exception_IHandler.php',
    'tx_rnbase_exception_itemnotfound404' => $extensionPath.'exception/class.tx_rnbase_exception_ItemNotFound404.php',
    'tx_rnbase_exception_skip' => $extensionPath.'exception/class.tx_rnbase_exception_Skip.php',
    'tx_rnbase_filter_basefilter' => $extensionPath.'filter/class.tx_rnbase_filter_BaseFilter.php',
    'tx_rnbase_filter_filteritem' => $extensionPath.'filter/class.tx_rnbase_filter_FilterItem.php',
    'tx_rnbase_filter_filteritemmarker' => $extensionPath.'filter/class.tx_rnbase_filter_FilterItemMarker.php',
    'tx_rnbase_frontend_controller_typoscriptfrontendcontroller' => $extensionClassesPath.'Frontend/Controller/TypoScriptFrontendController.php',
    'tx_rnbase_frontend_marker_basemarker' => $extensionClassesPath.'Frontend/Marker/BaseMarker.php',
    'tx_rnbase_frontend_marker_utility' => $extensionClassesPath.'Frontend/Marker/Utility.php',
    'tx_rnbase_frontend_plugin' => $extensionClassesPath.'Frontend/Plugin.php',
    'tx_rnbase_ifilter' => $extensionPath.'filter/class.tx_rnbase_filter_BaseFilter.php',
    'tx_rnbase_ifilteritem' => $extensionPath.'filter/class.tx_rnbase_filter_FilterItem.php',
    'tx_rnbase_ifiltermarker' => $extensionPath.'filter/class.tx_rnbase_filter_BaseFilter.php',
    'tx_rnbase_imodel' => $extensionClassesPath.'Domain/Model/RecordInterface.php',
    'tx_rnbase_interface_singleton' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_iparameters' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_json_error' => $extensionPath.'util/class.tx_rnbase_util_Json.php',
    'tx_rnbase_maps_basemap' => $extensionPath.'maps/class.tx_rnbase_maps_BaseMap.php',
    'tx_rnbase_maps_coord' => $extensionPath.'maps/class.tx_rnbase_maps_Coord.php',
    'tx_rnbase_maps_defaultmarker' => $extensionPath.'maps/class.tx_rnbase_maps_DefaultMarker.php',
    'tx_rnbase_maps_factory' => $extensionPath.'maps/class.tx_rnbase_maps_Factory.php',
    'tx_rnbase_maps_google_control' => $extensionPath.'maps/google/class.tx_rnbase_maps_google_Control.php',
    'tx_rnbase_maps_google_icon' => $extensionPath.'maps/google/class.tx_rnbase_maps_google_Icon.php',
    'tx_rnbase_maps_google_map' => $extensionPath.'maps/google/class.tx_rnbase_maps_google_Map.php',
    'tx_rnbase_maps_google_util' => $extensionPath.'maps/google/class.tx_rnbase_maps_google_Util.php',
    'tx_rnbase_maps_icontrol' => $extensionPath.'maps/class.tx_rnbase_maps_IControl.php',
    'tx_rnbase_maps_icoord' => $extensionPath.'maps/class.tx_rnbase_maps_ICoord.php',
    'tx_rnbase_maps_iicon' => $extensionPath.'maps/class.tx_rnbase_maps_IIcon.php',
    'tx_rnbase_maps_ilocation' => $extensionPath.'maps/class.tx_rnbase_maps_ILocation.php',
    'tx_rnbase_maps_imap' => $extensionPath.'maps/class.tx_rnbase_maps_IMap.php',
    'tx_rnbase_maps_imarker' => $extensionPath.'maps/class.tx_rnbase_maps_IMarker.php',
    'tx_rnbase_maps_poi' => $extensionPath.'maps/class.tx_rnbase_maps_POI.php',
    'tx_rnbase_maps_typeregistry' => $extensionPath.'maps/class.tx_rnbase_maps_TypeRegistry.php',
    'tx_rnbase_maps_util' => $extensionPath.'maps/class.tx_rnbase_maps_Util.php',
    'tx_rnbase_misc_evaldate' => $extensionPath.'misc/class.tx_rnbase_misc_EvalDate.php',
    'tx_rnbase_mod_base_lister' => $extensionPath.'mod/base/class.tx_rnbase_mod_base_Lister.php',
    'tx_rnbase_mod_basemodfunc' => $extensionPath.'mod/class.tx_rnbase_mod_BaseModFunc.php',
    'tx_rnbase_mod_basemodule' => $extensionPath.'mod/class.tx_rnbase_mod_BaseModule.php',
    'tx_rnbase_mod_extendedmodfunc' => $extensionPath.'mod/class.tx_rnbase_mod_ExtendedModFunc.php',
    'tx_rnbase_mod_idecorator' => $extensionPath.'mod/class.tx_rnbase_mod_IDecorator.php',
    'tx_rnbase_mod_imodfunc' => $extensionPath.'mod/class.tx_rnbase_mod_IModFunc.php',
    'tx_rnbase_mod_imodhandler' => $extensionPath.'mod/class.tx_rnbase_mod_IModHandler.php',
    'tx_rnbase_mod_imodule' => $extensionPath.'mod/class.tx_rnbase_mod_IModule.php',
    'tx_rnbase_mod_linker_linkerinterface' => $extensionPath.'mod/linker/class.tx_rnbase_mod_linker_LinkerInterface.php',
    'tx_rnbase_mod_linker_showdetails' => $extensionPath.'mod/linker/class.tx_rnbase_mod_linker_ShowDetails.php',
    'tx_rnbase_mod_tables' => $extensionPath.'mod/class.tx_rnbase_mod_Tables.php',
    'tx_rnbase_mod_util' => $extensionPath.'mod/class.tx_rnbase_mod_Util.php',
    'tx_rnbase_model_base' => $extensionPath.'model/class.tx_rnbase_model_base.php',
    'tx_rnbase_model_data' => $extensionPath.'model/class.tx_rnbase_model_data.php',
    'tx_rnbase_model_media' => $extensionPath.'model/class.tx_rnbase_model_media.php',
    'tx_rnbase_parameters' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_plot_builder' => $extensionPath.'plot/class.tx_rnbase_plot_Builder.php',
    'tx_rnbase_plot_dataprovider' => $extensionPath.'plot/class.tx_rnbase_plot_DataProvider.php',
    'tx_rnbase_plot_dataproviderts' => $extensionPath.'plot/class.tx_rnbase_plot_DataProviderTS.php',
    'tx_rnbase_plot_idataprovider' => $extensionPath.'plot/class.tx_rnbase_plot_IDataProvider.php',
    'tx_rnbase_repository_abstractrepository' => $extensionClassesPath.'Domain/Repository/AbstractRepository.php',
    'tx_rnbase_scheduler_fieldprovider' => $extensionClassesPath.'Scheduler/FieldProvider.php',
    'tx_rnbase_scheduler_fieldproviderbase' => $extensionClassesPath.'Scheduler/FieldProviderBase.php',
    'tx_rnbase_scheduler_task' => $extensionClassesPath.'Scheduler/Task.php',
    'tx_rnbase_service_authentication' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_service_base' => $extensionPath.'Legacy/classes.php',
    'tx_rnbase_sv1_base' => $extensionPath.'sv1/class.tx_rnbase_sv1_Base.php',
    'tx_rnbase_sv1_mediaplayer' => $extensionPath.'sv1/class.tx_rnbase_sv1_MediaPlayer.php',
    'tx_rnbase_templatedummy' => $extensionPath.'tests/class.tx_rnbase_tests_configurations_testcase.php',
    'tx_rnbase_tests_action_cachehandlerdefault_testcase' => $extensionPath.'tests/action/class.tx_rnbase_tests_action_CacheHandlerDefault_testcase.php',
    'tx_rnbase_tests_action_throwitemnotfound404exception' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_tests_action_throwpagenotfoundexception' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_tests_basemarker_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_basemarker_testcase.php',
    'tx_rnbase_tests_basetestcase' => $extensionPath.'tests/class.tx_rnbase_tests_BaseTestCase.php',
    'tx_rnbase_tests_cache_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_cache_testcase.php',
    'tx_rnbase_tests_calendar_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_calendar_testcase.php',
    'tx_rnbase_tests_configurations_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_configurations_testcase.php',
    'tx_rnbase_tests_controller_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_controller_testcase.php',
    'tx_rnbase_tests_fixtures_classes_decorator' => $extensionPath.'tests/fixtures/classes/class.tx_rnbase_tests_fixtures_classes_Decorator.php',
    'tx_rnbase_tests_fixtures_classes_mod' => $extensionPath.'tests/fixtures/classes/class.tx_rnbase_tests_fixtures_classes_Mod.php',
    'tx_rnbase_tests_fixtures_classes_searcher' => $extensionPath.'tests/fixtures/classes/class.tx_rnbase_tests_fixtures_classes_Searcher.php',
    'tx_rnbase_tests_listbuilder_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_listbuilder_testcase.php',
    'tx_rnbase_tests_logger_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_Logger_testcase.php',
    'tx_rnbase_tests_misc_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_misc_testcase.php',
    'tx_rnbase_tests_mod_linker_showdetails_testcase' => $extensionPath.'tests/mod/linker/class.tx_rnbase_tests_mod_linker_ShowDetails_testcase.php',
    'tx_rnbase_tests_mod_tables_testcase' => $extensionPath.'tests/mod/class.tx_rnbase_tests_mod_Tables_testcase.php',
    'tx_rnbase_tests_model_base_testcase' => $extensionPath.'tests/model/class.tx_rnbase_tests_model_Base_testcase.php',
    'tx_rnbase_tests_model_data_testcase' => $extensionPath.'tests/model/class.tx_rnbase_tests_model_Data_testcase.php',
    'tx_rnbase_tests_model_media_testcase' => $extensionPath.'tests/model/class.tx_rnbase_tests_model_Media_testcase.php',
    'tx_rnbase_tests_parameters_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_parameters_testcase.php',
    'tx_rnbase_tests_rnbase_testcase' => $extensionPath.'tests/class.tx_rnbase_tests_rnbase_testcase.php',
    'tx_rnbase_tests_util_dates_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Dates_testcase.php',
    'tx_rnbase_tests_util_db_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_DB_testcase.php',
    'tx_rnbase_tests_util_extensions_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Extensions_testcase.php',
    'tx_rnbase_tests_util_files_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Files_testcase.php',
    'tx_rnbase_tests_util_formtool_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_FormTool_testcase.php',
    'tx_rnbase_tests_util_link_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Link_testcase.php',
    'tx_rnbase_tests_util_lock_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Lock_testcase.php',
    'tx_rnbase_tests_util_network_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Network_testcase.php',
    'tx_rnbase_tests_util_pagebrowser_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_PageBrowser_testcase.php',
    'tx_rnbase_tests_util_searchbase_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_SearchBase_testcase.php',
    'tx_rnbase_tests_util_simplemarker_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_SimpleMarker_testcase.php',
    'tx_rnbase_tests_util_strings_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Strings_testcase.php',
    'tx_rnbase_tests_util_tca_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_TCA_testcase.php',
    'tx_rnbase_tests_util_templates_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Templates_testcase.php',
    'tx_rnbase_tests_util_typo3_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_TYPO3_testcase.php',
    'tx_rnbase_tests_util_xmlelement_testcase' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_XmlElement_testcase.php',
    'tx_rnbase_tsfedummy' => $extensionPath.'tests/class.tx_rnbase_tests_configurations_testcase.php',
    'tx_rnbase_util_arrays' => $extensionPath.'util/class.tx_rnbase_util_Arrays.php',
    'tx_rnbase_util_basemarker' => $extensionPath.'util/class.tx_rnbase_util_BaseMarker.php',
    'tx_rnbase_util_bepager' => $extensionPath.'util/class.tx_rnbase_util_BEPager.php',
    'tx_rnbase_util_calendar' => $extensionPath.'util/class.tx_rnbase_util_Calendar.php',
    'tx_rnbase_util_dates' => $extensionPath.'util/class.tx_rnbase_util_Dates.php',
    'tx_rnbase_util_db' => $extensionPath.'util/class.tx_rnbase_util_DB.php',
    'tx_rnbase_util_db_Builder' => $extensionPath.'util/db/class.tx_rnbase_util_db_Builder.php',
    'tx_rnbase_util_db_exception' => $extensionPath.'util/db/class.tx_rnbase_util_db_Exception.php',
    'tx_rnbase_util_db_idatabase' => $extensionPath.'util/db/class.tx_rnbase_util_db_IDatabase.php',
    'tx_rnbase_util_db_IDatabaseT3' => $extensionPath.'util/db/class.tx_rnbase_util_db_IDatabaseT3.php',
    'tx_rnbase_util_db_mssql' => $extensionPath.'util/db/class.tx_rnbase_util_db_MsSQL.php',
    'tx_rnbase_util_db_mysql' => $extensionPath.'util/db/class.tx_rnbase_util_db_MySQL.php',
    'tx_rnbase_util_db_typo3' => $extensionPath.'util/db/class.tx_rnbase_util_db_TYPO3.php',
    'tx_rnbase_util_db_TYPO3DBAL' => $extensionPath.'util/db/class.tx_rnbase_util_db_TYPO3DBAL.php',
    'tx_rnbase_util_debug' => $extensionPath.'util/class.tx_rnbase_util_Debug.php',
    'tx_rnbase_util_exception' => $extensionPath.'util/class.tx_rnbase_util_Exception.php',
    'tx_rnbase_util_extensions' => $extensionPath.'util/class.tx_rnbase_util_Extensions.php',
    'tx_rnbase_util_extensionsfortests' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_Extensions_testcase.php',
    'tx_rnbase_util_files' => $extensionPath.'util/class.tx_rnbase_util_Files.php',
    'tx_rnbase_util_formatutil' => $extensionPath.'util/class.tx_rnbase_util_FormatUtil.php',
    'tx_rnbase_util_formtool' => $extensionPath.'util/class.tx_rnbase_util_FormTool.php',
    'tx_rnbase_util_formutil' => $extensionPath.'util/class.tx_rnbase_util_FormUtil.php',
    'tx_rnbase_util_ilistprovider' => $extensionPath.'util/class.tx_rnbase_util_IListProvider.php',
    'tx_rnbase_util_json' => $extensionPath.'util/class.tx_rnbase_util_Json.php',
    'tx_rnbase_util_lang' => $extensionPath.'util/class.tx_rnbase_util_Lang.php',
    'tx_rnbase_util_link' => $extensionPath.'util/class.tx_rnbase_util_Link.php',
    'tx_rnbase_util_listbuilder' => $extensionPath.'util/class.tx_rnbase_util_ListBuilder.php',
    'tx_rnbase_util_listbuilderinfo' => $extensionPath.'util/class.tx_rnbase_util_ListBuilderInfo.php',
    'tx_rnbase_util_listmarker' => $extensionPath.'util/class.tx_rnbase_util_ListMarker.php',
    'tx_rnbase_util_listmarkerinfo' => $extensionPath.'util/class.tx_rnbase_util_ListMarkerInfo.php',
    'tx_rnbase_util_listprovider' => $extensionPath.'util/class.tx_rnbase_util_ListProvider.php',
    'tx_rnbase_util_lock' => $extensionPath.'util/class.tx_rnbase_util_Lock.php',
    'tx_rnbase_util_logger' => $extensionPath.'util/class.tx_rnbase_util_Logger.php',
    'tx_rnbase_util_mail' => $extensionPath.'util/class.tx_rnbase_util_Mail.php',
    'tx_rnbase_util_math' => $extensionPath.'util/class.tx_rnbase_util_Math.php',
    'tx_rnbase_util_mediamarker' => $extensionPath.'util/class.tx_rnbase_util_MediaMarker.php',
    'tx_rnbase_util_misc' => $extensionPath.'util/class.tx_rnbase_util_Misc.php',
    'tx_rnbase_util_network' => $extensionPath.'util/class.tx_rnbase_util_Network.php',
    'tx_rnbase_util_pagebrowser' => $extensionPath.'util/class.tx_rnbase_util_PageBrowser.php',
    'tx_rnbase_util_pagebrowsermarker' => $extensionPath.'util/class.tx_rnbase_util_PageBrowserMarker.php',
    'tx_rnbase_util_queue' => $extensionPath.'util/class.tx_rnbase_util_Queue.php',
    'tx_rnbase_util_searchbase' => $extensionPath.'util/class.tx_rnbase_util_SearchBase.php',
    'tx_rnbase_util_searchgeneric' => $extensionPath.'util/class.tx_rnbase_util_SearchGeneric.php',
    'tx_rnbase_util_simplemarker' => $extensionPath.'util/class.tx_rnbase_util_SimpleMarker.php',
    'tx_rnbase_util_simplemarkertests' => $extensionPath.'tests/util/class.tx_rnbase_tests_util_SimpleMarker_testcase.php',
    'tx_rnbase_util_spyc' => $extensionPath.'util/class.tx_rnbase_util_Spyc.php',
    'tx_rnbase_util_strings' => $extensionPath.'util/class.tx_rnbase_util_Strings.php',
    'tx_rnbase_util_tca' => $extensionPath.'util/class.tx_rnbase_util_TCA.php',
    'tx_rnbase_util_tcatool' => $extensionClassesPath.'Utility/TcaTool.php',
    'tx_rnbase_util_templates' => $extensionPath.'util/class.tx_rnbase_util_Templates.php',
    'tx_rnbase_util_ts' => $extensionPath.'util/class.tx_rnbase_util_TS.php',
    'tx_rnbase_util_tsdam' => $extensionPath.'util/class.tx_rnbase_util_TSDAM.php',
    'tx_rnbase_util_tsfal' => $extensionPath.'util/class.tx_rnbase_util_TSFAL.php',
    'tx_rnbase_util_typo3' => $extensionPath.'util/class.tx_rnbase_util_TYPO3.php',
    'tx_rnbase_util_typo3classes' => $extensionPath.'util/class.tx_rnbase_util_Typo3Classes.php',
    'tx_rnbase_util_wizicon' => $extensionPath.'util/class.tx_rnbase_util_Wizicon.php',
    'tx_rnbase_util_xmlelement' => $extensionPath.'util/class.tx_rnbase_util_XmlElement.php',
    'tx_rnbase_utility_crypt' => $extensionClassesPath.'Utility/Crypt.php',
    'tx_rnbase_utility_crypttest' => $extensionPath.'tests/Classes/Utility/CryptTest.php',
    'tx_rnbase_utility_mail' => $extensionClassesPath.'Utility/Mail.php',
    'tx_rnbase_utility_mailtest' => $extensionPath.'tests/Classes/Utility/MailTest.php',
    'tx_rnbase_utility_strings' => $extensionClassesPath.'Utility/Strings.php',
    'tx_rnbase_utility_t3general' => $extensionClassesPath.'Utility/T3General.php',
    'tx_rnbase_utility_tcatool' => $extensionClassesPath.'Utility/TcaTool.php',
    'tx_rnbase_utility_tcatooltest' => $extensionPath.'tests/Classes/Utility/TcaToolTest.php',
    'tx_rnbase_view_base' => $extensionPath.'view/class.tx_rnbase_view_Base.php',
    'tx_rnbase_view_list' => $extensionPath.'view/class.tx_rnbase_view_List.php',
    'tx_rnbase_view_phptemplateengine' => $extensionPath.'view/class.tx_rnbase_view_phpTemplateEngine.php',
    'tx_rnbase_view_single' => $extensionPath.'view/class.tx_rnbase_view_Single.php',
];
