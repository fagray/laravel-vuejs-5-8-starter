<?php 

namespace Bio;

use Illuminate\Database\Eloquent\Collection;

class Repository {

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Retrieve all the resource
     *
     * @return Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Find a specified resource
     *
     * @param int $id
     * @return Collection
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Get a resource by enumerating attributes
     *
     * @param array $query
     * @return Collection
     */
    public function enumerate($query = [])
    {
        return $this->model->where($query)->first();
    }

    /**
     * Create a certain resource
     *
     * @param array $resource
     * @return Collection
     */
    public function create(array $resource)
    {
        return $this->model->create($resource);
    }

}