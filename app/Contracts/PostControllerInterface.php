<?php


namespace App\Contracts;


use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\PostCategoryRequest;
use App\Http\Requests\TemplateRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;

interface PostControllerInterface
{
    /**
     * @return mixed
     */
    public function index();

    /**
     * @param TemplateRequest $request
     * @return mixed
     */
    public function create(TemplateRequest $request);

    /**
     * @param CreatePostRequest $request
     * @return mixed
     */
    public function store(CreatePostRequest $request);

    /**
     * @param $id
     * @return mixed
     */
    public function show($id);

    /**
     * @param UpdatePostRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UpdatePostRequest $request, $id);

    /**
     * @param $name
     * @param $id
     * @return mixed
     */
    public function edit($name,$id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);


}
