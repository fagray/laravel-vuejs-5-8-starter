<?php 

namespace Bio;

class Repository {

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function enumerate($query = [])
    {
        return $this->model->where($query)->first();
    }

    public function create(array $resource)
    {
        return $this->model->create($resource);
    }

}