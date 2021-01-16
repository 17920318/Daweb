<?php

class RolesView  {

    public function agregar(){
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_agregar.html"); 
        $html = Template($str)->render();
        print Template('Agregar clasificacion')->show($html);
    }

    public function listar($list=array()) {
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_listar.html"); 
        $html = Template($str)->render_regex('LISTADO_ROLES', $list);
        print Template('Listado de Roles')->show($html);
    }

    public function editar($list=[], $clasificacion){
        $str = file_get_contents(
            STATIC_DIR . "html/artesanias/roles_editar.html"); 
        $html = Template($str)->render_regex('LISTADO_ROLES', $list);
        $html = Template($html)->render($clasificacion);
        print Template('Agregar Roles')->show($html);
    } 
    
}

?>