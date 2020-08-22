<?php


namespace App\Contracts;


use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;

interface FeedbackControllerInterface
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
     * @param CreateFeedbackRequest $request
     * @return mixed
     */
    public function store(CreateFeedbackRequest $request);

    /**
     * @param UpdateFeedbackRequest $request
     * @param $id
     * @return mixed
     */
    public function update(UpdateFeedbackRequest $request,$id);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
