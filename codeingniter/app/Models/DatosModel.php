<?
namespace App\Models:
use CodeIgniter\Model:

class Datos Model extends Model{
    public function listar(){
        $m = $this->db->query("SELECT * from persona"):
        return $m->getResult():
    } 
}
