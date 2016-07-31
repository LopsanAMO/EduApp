<?php

$app->get('/hello/{name}', function ( $request, $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");
    return $response;
});


$app->any('/alumno/[{id}]',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\AlumnoController::$method($request,$response);
  return $response;
});

$app->any('/oldalumno/[{id}]',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\oldAlumnoController::$method($request,$response);
  return $response;
});

$app->any('/curso/{id}',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\CursoController::$method($request,$response);
  return $response;
});

$app->any('/profesor/{id}',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\ProfesorController::$method($request,$response);
  return $response;
});

$app->any('/puntos/{idAlumno}',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\PuntosController::$method($request,$response);
  return $response;
});

$app->any('/escuela/{idEscuela}',function($request, $response){
  $method = $request->getMethod();
  $response = \App\Controllers\EscuelaController::$method($request,$response);
  return $response;
});
