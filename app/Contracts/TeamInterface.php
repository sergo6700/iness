<?php


namespace App\Contracts;


use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

interface TeamInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @return mixed
     */
    public function create();

    /**
     * @param CreateTeamRequest $request
     * @return mixed
     */
    public function store(CreateTeamRequest $request);

    /**
     * @param UpdateTeamRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UpdateTeamRequest $request,$id);

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
