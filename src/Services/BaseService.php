<?php

namespace Solverao\Gentools\Services;

use Solverao\Gentools\Repositories\BaseRepository;

abstract class BaseService
{
    /**
     * @var BaseRepository
     */
    protected $repository;

    /**
    * Service Constructor
    * @param BaseRepository $repository
    */
     public function __construct(BaseRepository $repository)
     {
         $this->repository = $repository;
     }
}
