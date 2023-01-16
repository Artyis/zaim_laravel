<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class ModuleMake extends Command
{
    private $files;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name} {--all}
                                                  {--migration}
                                                  {--vue}
                                                  {--view}
                                                  {--controller}
                                                  {--model}
                                                  {--api}
                                                  ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->files=$filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        if ($this->option('all')) {
          $optn = array('migration','vue','view','controller','model','api' );
          foreach ($optn as $key) {
            $this->input->setOption($key, true);
          }
        }
        if ($this->option('migration')) {
          $this->createMigration();
        }
        if ($this->option('vue')) {
          $this->createVueComponent();
        }
        if ($this->option('view')) {
          $this->createView();
        }
        if ($this->option('controller')) {
          $this->createController();
        }
        if ($this->option('model')) {
          $this->createModel();
        }
        if ($this->option('api')) {
          $this->createApiController();
        }

    }
    private function createMigration (){
      $table=Str::plural (Str::snake (class_basename($this->argument('name'))));
      try {
        $this->call('make:migration',[
          'name'=>"create_{$table}_table",
          '--create'=>$table,
          '--path'=>"App\\Modules\\".trim($this->argument('name'))."\\Migrations"
        ]);
      } catch (\Exception $e) {
        $this->error ($e->getMessage());
      }

    }
    private function createVueComponent (){
      $path = $this->getVueComponentPath($this->argument('name'));

        $component = Str::studly(class_basename($this->argument('name')));

        if ($this->alredyExsist($path)) {
            $this->error('Vue Component already exists!');
        } else {
            $this->makeDirectory($path);

            $stub = $this->files->get(base_path('resources/stubs/vue.component.stub'));

            $stub = str_replace(
                [
                    'DummyClass',
                ],
                [
                    $component
                ],
                $stub
            );

            $this->files->put($path, $stub);
            $this->info('Vue Component created successfully.');
        }
    }
    protected function getVueComponentPath($name)
  {
      return base_path('resources/js/components/'.str_replace('\\', '/', $name).".vue");
  }


    private function createView (){
      $paths = $this->getViewPath($this->argument('name'));

        foreach ($paths as $path) {
            $view = Str::studly(class_basename($this->argument('name')));

            if ($this->alredyExsist($path)) {
                $this->error('View already exists!');
            } else {
                $this->makeDirectory($path);

                $stub = $this->files->get(base_path('resources/stubs/view.stub'));

                $stub = str_replace(
                    [

                    ],
                    [

                    ],
                    $stub
                );

                $this->files->put($path, $stub);
                $this->info('View created successfully.');
            }
        }
    }
    protected function getViewPath($name)
      {

          $arrFiles = collect([
              'create',
              'edit',
              'index',
              'show',
          ]);

          //str_replace('\\', '/', $name)
          $paths = $arrFiles->map(function($item) use ($name){
              return base_path('resources/views/'.str_replace('\\', '/', $name).'/'.$item.".blade.php");
          });

          return $paths;
      }
    private function createController (){
      $controller =Str::studly (class_basename($this->argument('name')));
      $modelName =Str::singular (Str::studly (class_basename($this->argument('name'))));

      $path=$this->getControllerPath($this->argument('name'));

      if($this->alredyExsist($path)){
        $this->error ("Controller already exist!");
      }else{
        $this->makeDirectory($path);
        $stub= $this->files->get(base_path('resources/stubs/controller.model.api.stub'));
        $stub= str_replace(
          [
            'DummyNamespace',
            'DummyRootNamespace',
            'DummyClass',
            'DummyFullModelClass',
            'DummyModelClass',
            'DummyModelVariable'
          ],
          [
            "App\\Modules\\".trim(str_replace('/', '\\',$this->argument('name')))."\\Controllers",
            $this->laravel->getNamespace(),
            $controller.'Controller',
            "App\\Modules\\".trim(str_replace('/', '\\',$this->argument('name')))."\\Models\\{$modelName}",
            $modelName,
            lcfirst(($modelName))
          ],
          $stub
        );
        $this->files->put($path, $stub);
        $this->info('Controller created succesfully!');
        //$this->updateModularConfig();
      }
      $this->createRoutes($controller,$modelName);
    }
    private function createModel (){
      $model =Str::singular (Str::studly (class_basename($this->argument('name'))));
      $this->call('make:model',[
        'name'=>"App\\Modules\\".trim($this->argument('name'))."\\Models\\".$model
      ]);

    }
    private function createApiController (){
      $controller =Str::studly (class_basename($this->argument('name')));
      $modelName =Str::singular (Str::studly (class_basename($this->argument('name'))));

      $path=$this->getApiControllerPath($this->argument('name'));

      if($this->alredyExsist($path)){
        $this->error ("Controller already exist!");
      }else{
        $this->makeDirectory($path);
        $stub= $this->files->get(base_path('resources/stubs/controller.model.api.stub'));
        $stub= str_replace(
          [
            'DummyNamespace',
            'DummyRootNamespace',
            'DummyClass',
            'DummyFullModelClass',
            'DummyModelClass',
            'DummyModelVariable'
          ],
          [
            "App\\Modules\\".trim(str_replace('/', '\\',$this->argument('name')))."\\Controllers\Api",
            $this->laravel->getNamespace(),
            $controller.'ApiController',
            "App\\Modules\\".trim(str_replace('/', '\\',$this->argument('name')))."\\Models\\{$modelName}",
            $modelName,
            lcfirst(($modelName))
          ],
          $stub
        );
        $this->files->put($path, $stub);
        $this->info('Controller created succesfully!');
        //$this->updateModularConfig();
      }
      $this->createApiRoutes($controller,$modelName);
    }
    private function getControllerPath ($arg){
      $controller =Str::studly (class_basename($arg));
      return $this->laravel['path'].'/Modules/'.str_replace('\\', '/',$arg)."/Controllers/"."{$controller}Controller.php";
    }
    private function getApiControllerPath ($arg){
      $controller =Str::studly (class_basename($arg));
      return $this->laravel['path'].'/Modules/'.str_replace('\\', '/',$arg)."/Controllers/Api/"."{$controller}ApiController.php";
    }
    private function makeDirectory ($path){
      if(!$this->files->isDirectory(dirname($path))){
        $this->files->makeDirectory(dirname($path), 0777 ,true, true);
      }
      return $path;
    }
    private function createRoutes (String $controller, String $modelName){
      $routePath=$this->getRoutePath($this->argument('name'));
      if($this->alredyExsist($routePath)){
        $this->error ("Routes already exist!");
      }else{
        $this->makeDirectory($routePath);
        $stub= $this->files->get(base_path('resources/stubs/routes.web.stub'));
        $stub= str_replace(
          [
            'DummyClass',
            'DummyRoutePrefix',
            'DummyModelVariable'
          ],
          [
            $controller.'Controller',
            Str::plural(Str::snake(lcfirst($modelName), '-')),
            lcfirst($modelName)
          ],
          $stub
        );
        $this->files->put($routePath, $stub);
        $this->info('Routes created succesfully!');

      }
    }
    private function createApiRoutes (String $controller, String $modelName){
      $routePath=$this->getApiRoutePath($this->argument('name'));
      if($this->alredyExsist($routePath)){
        $this->error ("Routes already exist!");
      }else{
        $this->makeDirectory($routePath);
        $stub= $this->files->get(base_path('resources/stubs/routes.api.stub'));
        $stub= str_replace(
          [
            'DummyClass',
            'DummyRoutePrefix',
            'DummyModelVariable'

          ],
          [
            'Api\\'.$controller.'ApiController',
            Str::plural(Str::snake(lcfirst($modelName), '-')),
            lcfirst($modelName)
          ],
          $stub
        );
        $this->files->put($routePath, $stub);
        $this->info('Routes created succesfully!');

      }
    }
    private function getApiRoutePath ($name){
      return $this->laravel['path'].'/Modules/'.str_replace('\\', '/',$name)."/Routes/api.php";
    }
    private function getRoutePath ($name){
      return $this->laravel['path'].'/Modules/'.str_replace('\\', '/',$name)."/Routes/web.php";
    }
    private function alredyExsist ($path) {
      return $this->files->exists($path);
    }
    /*private function updateModularConfig() {
        $group = explode('\\', $this->argument('name'))[0];
        $module = Str::studly(class_basename($this->argument('name')));

        $modular = $this->files->get(base_path('config/modular.php'));

        $matches = [];

        preg_match("/'modules' => \[.*?'{$group}' => \[(.*?)\]/s", $modular, $matches);

        if(count($matches) == 2) {
            if(!preg_match("/'{$module}'/", $matches[1])) {
                $parts = preg_split("/('modules' => \[.*?'{$group}' => \[)/s", $modular, 2, PREG_SPLIT_DELIM_CAPTURE);
                if(count($parts) == 3) {
                    $configStr = $parts[0].$parts[1]."\n            '$module',".$parts[2];
                    $this->files->put(base_path('config/modular.php'), $configStr);
                }
            }
        }

    }*/
}
