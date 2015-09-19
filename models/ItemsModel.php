<?php
/* Clase modelo que cubre las necesidades funcionales del desarrollo mediante una clase. Usamos PDO (esta vez a través de SPDO) para el acceso a datos.
*/
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM variables');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
