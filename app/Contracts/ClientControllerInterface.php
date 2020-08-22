<?php


namespace App\Contracts;



use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;

interface ClientControllerInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param CreateClientRequest $request
     * @return mixed
     */
    public function store(CreateClientRequest $request);

    /**
     * @param UpdateClientRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UpdateClientRequest $request,$id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
