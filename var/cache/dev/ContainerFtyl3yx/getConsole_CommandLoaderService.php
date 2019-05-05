<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('console.command.about' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\AboutCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.about']) ? $this->services['console.command.about'] : $this->load(__DIR__.'/getConsole_Command_AboutService.php')) && false ?: '_'});
}, 'console.command.assets_install' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.assets_install']) ? $this->services['console.command.assets_install'] : $this->load(__DIR__.'/getConsole_Command_AssetsInstallService.php')) && false ?: '_'});
}, 'console.command.cache_clear' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_clear']) ? $this->services['console.command.cache_clear'] : $this->load(__DIR__.'/getConsole_Command_CacheClearService.php')) && false ?: '_'});
}, 'console.command.cache_pool_clear' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_pool_clear']) ? $this->services['console.command.cache_pool_clear'] : $this->load(__DIR__.'/getConsole_Command_CachePoolClearService.php')) && false ?: '_'});
}, 'console.command.cache_pool_prune' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_pool_prune']) ? $this->services['console.command.cache_pool_prune'] : $this->load(__DIR__.'/getConsole_Command_CachePoolPruneService.php')) && false ?: '_'});
}, 'console.command.cache_warmup' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.cache_warmup']) ? $this->services['console.command.cache_warmup'] : $this->load(__DIR__.'/getConsole_Command_CacheWarmupService.php')) && false ?: '_'});
}, 'console.command.config_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.config_debug']) ? $this->services['console.command.config_debug'] : $this->load(__DIR__.'/getConsole_Command_ConfigDebugService.php')) && false ?: '_'});
}, 'console.command.config_dump_reference' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.config_dump_reference']) ? $this->services['console.command.config_dump_reference'] : $this->load(__DIR__.'/getConsole_Command_ConfigDumpReferenceService.php')) && false ?: '_'});
}, 'console.command.container_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.container_debug']) ? $this->services['console.command.container_debug'] : $this->load(__DIR__.'/getConsole_Command_ContainerDebugService.php')) && false ?: '_'});
}, 'console.command.debug_autowiring' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.debug_autowiring']) ? $this->services['console.command.debug_autowiring'] : $this->load(__DIR__.'/getConsole_Command_DebugAutowiringService.php')) && false ?: '_'});
}, 'console.command.event_dispatcher_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.event_dispatcher_debug']) ? $this->services['console.command.event_dispatcher_debug'] : $this->load(__DIR__.'/getConsole_Command_EventDispatcherDebugService.php')) && false ?: '_'});
}, 'console.command.form_debug' => function () {
    $f = function (\Symfony\Component\Form\Command\DebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.form_debug']) ? $this->services['console.command.form_debug'] : $this->load(__DIR__.'/getConsole_Command_FormDebugService.php')) && false ?: '_'});
}, 'console.command.router_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.router_debug']) ? $this->services['console.command.router_debug'] : $this->load(__DIR__.'/getConsole_Command_RouterDebugService.php')) && false ?: '_'});
}, 'console.command.router_match' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.router_match']) ? $this->services['console.command.router_match'] : $this->load(__DIR__.'/getConsole_Command_RouterMatchService.php')) && false ?: '_'});
}, 'console.command.translation_debug' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.translation_debug']) ? $this->services['console.command.translation_debug'] : $this->load(__DIR__.'/getConsole_Command_TranslationDebugService.php')) && false ?: '_'});
}, 'console.command.translation_update' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.translation_update']) ? $this->services['console.command.translation_update'] : $this->load(__DIR__.'/getConsole_Command_TranslationUpdateService.php')) && false ?: '_'});
}, 'console.command.xliff_lint' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.xliff_lint']) ? $this->services['console.command.xliff_lint'] : $this->load(__DIR__.'/getConsole_Command_XliffLintService.php')) && false ?: '_'});
}, 'console.command.yaml_lint' => function () {
    $f = function (\Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['console.command.yaml_lint']) ? $this->services['console.command.yaml_lint'] : $this->load(__DIR__.'/getConsole_Command_YamlLintService.php')) && false ?: '_'});
}, 'doctrine.cache_clear_metadata_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.cache_clear_metadata_command']) ? $this->services['doctrine.cache_clear_metadata_command'] : $this->load(__DIR__.'/getDoctrine_CacheClearMetadataCommandService.php')) && false ?: '_'});
}, 'doctrine.cache_clear_query_cache_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.cache_clear_query_cache_command']) ? $this->services['doctrine.cache_clear_query_cache_command'] : $this->load(__DIR__.'/getDoctrine_CacheClearQueryCacheCommandService.php')) && false ?: '_'});
}, 'doctrine.cache_clear_result_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.cache_clear_result_command']) ? $this->services['doctrine.cache_clear_result_command'] : $this->load(__DIR__.'/getDoctrine_CacheClearResultCommandService.php')) && false ?: '_'});
}, 'doctrine.cache_collection_region_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.cache_collection_region_command']) ? $this->services['doctrine.cache_collection_region_command'] : $this->load(__DIR__.'/getDoctrine_CacheCollectionRegionCommandService.php')) && false ?: '_'});
}, 'doctrine.clear_entity_region_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.clear_entity_region_command']) ? $this->services['doctrine.clear_entity_region_command'] : $this->load(__DIR__.'/getDoctrine_ClearEntityRegionCommandService.php')) && false ?: '_'});
}, 'doctrine.clear_query_region_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.clear_query_region_command']) ? $this->services['doctrine.clear_query_region_command'] : $this->load(__DIR__.'/getDoctrine_ClearQueryRegionCommandService.php')) && false ?: '_'});
}, 'doctrine.database_create_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.database_create_command']) ? $this->services['doctrine.database_create_command'] : $this->load(__DIR__.'/getDoctrine_DatabaseCreateCommandService.php')) && false ?: '_'});
}, 'doctrine.database_drop_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.database_drop_command']) ? $this->services['doctrine.database_drop_command'] : $this->load(__DIR__.'/getDoctrine_DatabaseDropCommandService.php')) && false ?: '_'});
}, 'doctrine.database_import_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.database_import_command']) ? $this->services['doctrine.database_import_command'] : $this->load(__DIR__.'/getDoctrine_DatabaseImportCommandService.php')) && false ?: '_'});
}, 'doctrine.ensure_production_settings_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.ensure_production_settings_command']) ? $this->services['doctrine.ensure_production_settings_command'] : $this->load(__DIR__.'/getDoctrine_EnsureProductionSettingsCommandService.php')) && false ?: '_'});
}, 'doctrine.fixtures_load_command' => function () {
    $f = function (\Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.fixtures_load_command']) ? $this->services['doctrine.fixtures_load_command'] : $this->load(__DIR__.'/getDoctrine_FixturesLoadCommandService.php')) && false ?: '_'});
}, 'doctrine.generate_entities_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.generate_entities_command']) ? $this->services['doctrine.generate_entities_command'] : $this->load(__DIR__.'/getDoctrine_GenerateEntitiesCommandService.php')) && false ?: '_'});
}, 'doctrine.mapping_convert_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.mapping_convert_command']) ? $this->services['doctrine.mapping_convert_command'] : $this->load(__DIR__.'/getDoctrine_MappingConvertCommandService.php')) && false ?: '_'});
}, 'doctrine.mapping_import_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.mapping_import_command']) ? $this->services['doctrine.mapping_import_command'] : $this->load(__DIR__.'/getDoctrine_MappingImportCommandService.php')) && false ?: '_'});
}, 'doctrine.mapping_info_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.mapping_info_command']) ? $this->services['doctrine.mapping_info_command'] : $this->load(__DIR__.'/getDoctrine_MappingInfoCommandService.php')) && false ?: '_'});
}, 'doctrine.query_dql_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.query_dql_command']) ? $this->services['doctrine.query_dql_command'] : $this->load(__DIR__.'/getDoctrine_QueryDqlCommandService.php')) && false ?: '_'});
}, 'doctrine.query_sql_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.query_sql_command']) ? $this->services['doctrine.query_sql_command'] : $this->load(__DIR__.'/getDoctrine_QuerySqlCommandService.php')) && false ?: '_'});
}, 'doctrine.schema_create_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.schema_create_command']) ? $this->services['doctrine.schema_create_command'] : $this->load(__DIR__.'/getDoctrine_SchemaCreateCommandService.php')) && false ?: '_'});
}, 'doctrine.schema_drop_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.schema_drop_command']) ? $this->services['doctrine.schema_drop_command'] : $this->load(__DIR__.'/getDoctrine_SchemaDropCommandService.php')) && false ?: '_'});
}, 'doctrine.schema_update_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.schema_update_command']) ? $this->services['doctrine.schema_update_command'] : $this->load(__DIR__.'/getDoctrine_SchemaUpdateCommandService.php')) && false ?: '_'});
}, 'doctrine.schema_validate_command' => function () {
    $f = function (\Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand $v) { return $v; }; return $f(${($_ = isset($this->services['doctrine.schema_validate_command']) ? $this->services['doctrine.schema_validate_command'] : $this->load(__DIR__.'/getDoctrine_SchemaValidateCommandService.php')) && false ?: '_'});
}, 'fos_user.command.activate_user' => function () {
    $f = function (\FOS\UserBundle\Command\ActivateUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.activate_user']) ? $this->services['fos_user.command.activate_user'] : $this->load(__DIR__.'/getFosUser_Command_ActivateUserService.php')) && false ?: '_'});
}, 'fos_user.command.change_password' => function () {
    $f = function (\FOS\UserBundle\Command\ChangePasswordCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.change_password']) ? $this->services['fos_user.command.change_password'] : $this->load(__DIR__.'/getFosUser_Command_ChangePasswordService.php')) && false ?: '_'});
}, 'fos_user.command.create_user' => function () {
    $f = function (\FOS\UserBundle\Command\CreateUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.create_user']) ? $this->services['fos_user.command.create_user'] : $this->load(__DIR__.'/getFosUser_Command_CreateUserService.php')) && false ?: '_'});
}, 'fos_user.command.deactivate_user' => function () {
    $f = function (\FOS\UserBundle\Command\DeactivateUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.deactivate_user']) ? $this->services['fos_user.command.deactivate_user'] : $this->load(__DIR__.'/getFosUser_Command_DeactivateUserService.php')) && false ?: '_'});
}, 'fos_user.command.demote_user' => function () {
    $f = function (\FOS\UserBundle\Command\DemoteUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.demote_user']) ? $this->services['fos_user.command.demote_user'] : $this->load(__DIR__.'/getFosUser_Command_DemoteUserService.php')) && false ?: '_'});
}, 'fos_user.command.promote_user' => function () {
    $f = function (\FOS\UserBundle\Command\PromoteUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['fos_user.command.promote_user']) ? $this->services['fos_user.command.promote_user'] : $this->load(__DIR__.'/getFosUser_Command_PromoteUserService.php')) && false ?: '_'});
}, 'maker.auto_command.make_auth' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_auth']) ? $this->services['maker.auto_command.make_auth'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeAuthService.php')) && false ?: '_'});
}, 'maker.auto_command.make_command' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_command']) ? $this->services['maker.auto_command.make_command'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeCommandService.php')) && false ?: '_'});
}, 'maker.auto_command.make_controller' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_controller']) ? $this->services['maker.auto_command.make_controller'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeControllerService.php')) && false ?: '_'});
}, 'maker.auto_command.make_crud' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_crud']) ? $this->services['maker.auto_command.make_crud'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeCrudService.php')) && false ?: '_'});
}, 'maker.auto_command.make_entity' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_entity']) ? $this->services['maker.auto_command.make_entity'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeEntityService.php')) && false ?: '_'});
}, 'maker.auto_command.make_fixtures' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_fixtures']) ? $this->services['maker.auto_command.make_fixtures'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeFixturesService.php')) && false ?: '_'});
}, 'maker.auto_command.make_form' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_form']) ? $this->services['maker.auto_command.make_form'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeFormService.php')) && false ?: '_'});
}, 'maker.auto_command.make_functional_test' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_functional_test']) ? $this->services['maker.auto_command.make_functional_test'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeFunctionalTestService.php')) && false ?: '_'});
}, 'maker.auto_command.make_migration' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_migration']) ? $this->services['maker.auto_command.make_migration'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeMigrationService.php')) && false ?: '_'});
}, 'maker.auto_command.make_serializer_encoder' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_serializer_encoder']) ? $this->services['maker.auto_command.make_serializer_encoder'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeSerializerEncoderService.php')) && false ?: '_'});
}, 'maker.auto_command.make_subscriber' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_subscriber']) ? $this->services['maker.auto_command.make_subscriber'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeSubscriberService.php')) && false ?: '_'});
}, 'maker.auto_command.make_twig_extension' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_twig_extension']) ? $this->services['maker.auto_command.make_twig_extension'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeTwigExtensionService.php')) && false ?: '_'});
}, 'maker.auto_command.make_unit_test' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_unit_test']) ? $this->services['maker.auto_command.make_unit_test'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeUnitTestService.php')) && false ?: '_'});
}, 'maker.auto_command.make_user' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_user']) ? $this->services['maker.auto_command.make_user'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeUserService.php')) && false ?: '_'});
}, 'maker.auto_command.make_validator' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_validator']) ? $this->services['maker.auto_command.make_validator'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeValidatorService.php')) && false ?: '_'});
}, 'maker.auto_command.make_voter' => function () {
    $f = function (\Symfony\Bundle\MakerBundle\Command\MakerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['maker.auto_command.make_voter']) ? $this->services['maker.auto_command.make_voter'] : $this->load(__DIR__.'/getMaker_AutoCommand_MakeVoterService.php')) && false ?: '_'});
}, 'security.command.user_password_encoder' => function () {
    $f = function (\Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand $v) { return $v; }; return $f(${($_ = isset($this->services['security.command.user_password_encoder']) ? $this->services['security.command.user_password_encoder'] : $this->load(__DIR__.'/getSecurity_Command_UserPasswordEncoderService.php')) && false ?: '_'});
}, 'sensio_distribution.security_checker.command' => function () {
    $f = function (\SensioLabs\Security\Command\SecurityCheckerCommand $v) { return $v; }; return $f(${($_ = isset($this->services['sensio_distribution.security_checker.command']) ? $this->services['sensio_distribution.security_checker.command'] : $this->load(__DIR__.'/getSensioDistribution_SecurityChecker_CommandService.php')) && false ?: '_'});
}, 'twig.command.debug' => function () {
    $f = function (\Symfony\Bridge\Twig\Command\DebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['twig.command.debug']) ? $this->services['twig.command.debug'] : $this->load(__DIR__.'/getTwig_Command_DebugService.php')) && false ?: '_'});
}, 'twig.command.lint' => function () {
    $f = function (\Symfony\Bundle\TwigBundle\Command\LintCommand $v) { return $v; }; return $f(${($_ = isset($this->services['twig.command.lint']) ? $this->services['twig.command.lint'] : $this->load(__DIR__.'/getTwig_Command_LintService.php')) && false ?: '_'});
}, 'web_server.command.server_log' => function () {
    $f = function (\Symfony\Bundle\WebServerBundle\Command\ServerLogCommand $v) { return $v; }; return $f(${($_ = isset($this->services['web_server.command.server_log']) ? $this->services['web_server.command.server_log'] : $this->load(__DIR__.'/getWebServer_Command_ServerLogService.php')) && false ?: '_'});
}, 'web_server.command.server_run' => function () {
    $f = function (\Symfony\Bundle\WebServerBundle\Command\ServerRunCommand $v) { return $v; }; return $f(${($_ = isset($this->services['web_server.command.server_run']) ? $this->services['web_server.command.server_run'] : $this->load(__DIR__.'/getWebServer_Command_ServerRunService.php')) && false ?: '_'});
}, 'web_server.command.server_start' => function () {
    $f = function (\Symfony\Bundle\WebServerBundle\Command\ServerStartCommand $v) { return $v; }; return $f(${($_ = isset($this->services['web_server.command.server_start']) ? $this->services['web_server.command.server_start'] : $this->load(__DIR__.'/getWebServer_Command_ServerStartService.php')) && false ?: '_'});
}, 'web_server.command.server_status' => function () {
    $f = function (\Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand $v) { return $v; }; return $f(${($_ = isset($this->services['web_server.command.server_status']) ? $this->services['web_server.command.server_status'] : $this->load(__DIR__.'/getWebServer_Command_ServerStatusService.php')) && false ?: '_'});
}, 'web_server.command.server_stop' => function () {
    $f = function (\Symfony\Bundle\WebServerBundle\Command\ServerStopCommand $v) { return $v; }; return $f(${($_ = isset($this->services['web_server.command.server_stop']) ? $this->services['web_server.command.server_stop'] : $this->load(__DIR__.'/getWebServer_Command_ServerStopService.php')) && false ?: '_'});
})), array('about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'security:encode-password' => 'security.command.user_password_encoder', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'fos:user:activate' => 'fos_user.command.activate_user', 'fos:user:change-password' => 'fos_user.command.change_password', 'fos:user:create' => 'fos_user.command.create_user', 'fos:user:deactivate' => 'fos_user.command.deactivate_user', 'fos:user:demote' => 'fos_user.command.demote_user', 'fos:user:promote' => 'fos_user.command.promote_user', 'security:check' => 'sensio_distribution.security_checker.command', 'doctrine:fixtures:load' => 'doctrine.fixtures_load_command', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration'));