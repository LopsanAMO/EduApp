<?php

namespace App\Controllers;

class oldAlumnoController {

  public function index ($request){
    return "Si funciona";
  }
  public function post ($request){

}
  public function get ($request){
    $datos= $this->db->table('old_Alumnos')->distinct()->get();
    return json_encode($datos);
  }
  public function put ($request){
    $name = $request->getAttribute('id');
    return "update";
  }
  public function delete ($request){
    $name = $request->getAttribute('id');
    return "delete";
  }
}
