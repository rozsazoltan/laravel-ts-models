<?php

namespace Datarose\TypeScript\Commands;

use Datarose\TypeScript\TypeScriptGenerator;
use Illuminate\Console\Command;

class TypeScriptGenerateCommand extends Command
{
  public $signature = 'typescript:laravel-models';

  public $description = 'Generate TypeScript definitions from Laravel Models';

  public function handle()
  {
    $generator = new TypeScriptGenerator(
      generators: config('typescript.generators', []),
      paths: config('typescript.paths', []),
      output: config('typescript.output', resource_path('js/models.d.ts')),
      autoloadDev: config('typescript.autoloadDev', false),
    );

    $generator->execute();

    $this->comment('TypeScript definitions generated successfully');
  }
}
