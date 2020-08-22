<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\FeedbackControllerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class FeedbackController extends Controller
{

    /**
     * @var FeedbackControllerInterface
     */
    private $feedbackRepo;

    /**
     * FeedbackController constructor.
     * @param FeedbackControllerInterface $feedback
     */
    public function __construct(
        FeedbackControllerInterface $feedback
    )
    {
        $this->feedbackRepo = $feedback;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $feedback = $this->feedbackRepo->index();
        return view('admin/feedback/index', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateFeedbackRequest $request
     * @return RedirectResponse
     */
    public function store(CreateFeedbackRequest $request)
    {
        $this->feedbackRepo->store($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFeedbackRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateFeedbackRequest $request, $id)
    {
        $this->feedbackRepo->update($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->feedbackRepo->destroy($id);
        return 'success';
    }
}
