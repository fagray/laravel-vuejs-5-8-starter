<?php 

namespace Bio\Link;

use Bio\Repository;
use Bio\Link\Link;
use Illuminate\Database\Eloquent\Collection;

class LinkRepository extends Repository {

    private $model;

    /**
     * Class constructor
     *
     * @param Link $model
     */
    public function __construct(Link $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }


}