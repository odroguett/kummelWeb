<?php 

namespace App\Repositorio;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;   
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Repositorio extends Model  implements IRepositorio
{

    use HasFactory;
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function todos()
    {
        return $this->model->all();
    }

    public function crear(array $data)
    {
        return $this->model->create($data);
    }

    public function Insertar(array $oInsertar)
    {
        return $this->model->save($oInsertar);
    }

    public function actualizar(array $data, $id)
    {
        return $this->model->where('id', $id)
            ->update($data);
    }

    public function eliminar($id)
    {
        return $this->model->destroy($id);
    }

    public function buscar($id)
    {
       return $this->model->find($id);
    }

   
}

?>