Composer install
Run php artisan key:generate
Run php artisan migrate

List API for category:
GET|HEAD  / ............................................................................................................................................... MainController@index
  POST      _ignition/execute-solution ............................................................. ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  GET|HEAD  _ignition/health-check ......................................................................... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST      _ignition/update-config ...................................................................... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  GET|HEAD  api/category ................................................................................................................................ CategoryController@index
  POST      api/category ................................................................................................................................ CategoryController@store
  DELETE    api/category/{id} ......................................................................................................................... CategoryController@destroy
  GET|HEAD  api/category/{id} ............................................................................................................................ CategoryController@show
  PUT       api/category/{id} .......................................................................................................................... CategoryController@update
  GET|HEAD  api/user ............................................................................................................................................................. 
  GET|HEAD  sanctum/csrf-cookie ................................................................................ sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show