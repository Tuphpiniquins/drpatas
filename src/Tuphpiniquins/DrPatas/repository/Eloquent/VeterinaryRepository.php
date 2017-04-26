<?php
declare(strict_types = 1);


namespace Tuphpiniquins\Drpatas\Repository;

use Tuphpiniquins\Drpatas\Model\Contract\Repository\IVeterinaryRepository;
use Illuminate\Database\Eloquent\Model;

class VeterinaryRepository extends Model implements IVeterinaryRepository
{
    private $veterinary;
    protected $table = 'veterinary';

    public function __construct(Veterinary $veterinary)
    {
        $this->veterinary = $veterinary;
    }

    public function create(Veterinary $veterinary) : Veterinary
    {
        throw new \NotImplementedException();
    }

    public function update(Veterinary $veterinary) : Veterinary
    {
        throw new \NotImplementedException();
    }

    public function delete(int $id) : bool
    {
        throw new \NotImplementedException();
    }

    public function findById(int $id)
    {
        return $this->find($id);
    }

    public function getList(int $take = 20, int $page = 1)
    {
        return $this->all();
    }
}
