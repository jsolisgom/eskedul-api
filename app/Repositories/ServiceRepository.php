<?php

namespace App\Repositories;

use App\Models\Service;
use Illuminate\Contracts\Pagination\Paginator;

class ServiceRepository {

    /**
     * Get All Services.
     *
     * @return collections Array of Service Collection
     */
    public function getAll(): Paginator 
    {
        return Service::orderBy('id', 'desc')
        ->with('category')
        ->paginate(10);
    }

    /**
     * Create New Service.
     *
     * @param array $data
     * @return object Service Object
     */
    public function create(array $data): Service
    {
        return Service::create($data);
    }

}