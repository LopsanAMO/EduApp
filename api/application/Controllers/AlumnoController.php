<?php

namespace App\Controllers;

class AlumnoController {

  public function index ($request){
    return "Si funciona";
  }
  public function post ($request){

}
  public function get ($request){
    $name = $request->getAttribute('id');
    $datos= $this->db->table('usuarios')->where('idusuarios','2')->first();
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
