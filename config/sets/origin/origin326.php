<?php
/**
 * OriginPHP Framework
 * Copyright 2021 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
declare(strict_types=1);

use Origin\Model\Model;
use Origin\Process\Process;
use Origin\TestSuite\OriginTestCase;
use Origin\Process\BackgroundProcess;
use Rector\Renaming\ValueObject\MethodCallRename;

use Symplify\SymfonyPhpConfig\ValueObjectInliner;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    # Must be in ASENDING ORDER to be future proof

    # VERSION: 3.26.0
    $services->set(RenameMethodRector::class)
        ->call('configure', [[RenameMethodRector::METHOD_CALL_RENAMES => ValueObjectInliner::inline([
            # Background Process
            new MethodCallRename(BackgroundProcess::class, 'exitCode', 'getExitCode'),
            new MethodCallRename(BackgroundProcess::class, 'output', 'getOutput'),
            new MethodCallRename(BackgroundProcess::class, 'error', 'getErrorOutput'),
            new MethodCallRename(BackgroundProcess::class, 'success', 'isSuccess'),
            new MethodCallRename(BackgroundProcess::class, 'pid', 'getPid'),

            # Process
            new MethodCallRename(Process::class, 'output', 'getOutput'),
            new MethodCallRename(Process::class, 'error', 'getErrorOutput'),
            new MethodCallRename(Process::class, 'exitCode', 'getExitCode'),

            # Console
            # These methods come from the trait, not sure if this is the best way
            new MethodCallRename(OriginTestCase::class, 'output', 'getOutput'),
            new MethodCallRename(OriginTestCase::class, 'error', 'getErrorOutput'),

            # Model
            new MethodCallRename(Model::class, 'begin', 'beginTransaction'),
            new MethodCallRename(Model::class, 'commit', 'commitTransaction'),
            new MethodCallRename(Model::class, 'rollback', 'rollbackTransaction'),
        ]),
    ]]);
};
