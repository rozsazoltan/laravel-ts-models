<?php

namespace Datarose\TypeScript;

use Datarose\TypeScript\Commands\TypeScriptGenerateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TypeScriptServiceProvider extends PackageServiceProvider
{
  public function configurePackage(Package $package): void
  {
    $package
      ->name('laravel-ts-models')
      ->hasConfigFile('typescript')
      ->hasCommand(TypeScriptGenerateCommand::class);
  }
}
