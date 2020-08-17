<?php


namespace App\Contracts;


use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

interface CategoryControllerInterface
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
     * @param CreateCategoryRequest $request
     * @return mixed
     */
    public function store(CreateCategoryRequest $request);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param UpdateCategoryRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UpdateCategoryRequest $request, $id);

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
