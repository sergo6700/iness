<?php


namespace App\Services;


use App\Contracts\FeedbackControllerInterface;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;
use App\Models\Team;

class FeedbackControllerService implements FeedbackControllerInterface
{
    /**
     * @var Team
     */
    private $feedback;

    /**
     * TeamControllerService constructor.
     */
    public function __construct()
    {
        $this->feedback = new Feedback();
    }

    /**
     * @return mixed|void
     */
    public function index()
    {
        return $this->feedback->get();
    }

    /**
     * @return mixed|void
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param CreateFeedbackRequest $request
     * @return mixed|void
     */
    public function store(CreateFeedbackRequest $request)
    {
        $this->feedback->create($request->all());
        toast('Feedback has been added!','success');
    }

    /**
     * @param UpdateFeedbackRequest $request
     * @param $id
     * @return mixed|void
     */
    public function update(UpdateFeedbackRequest $request, $id)
    {
        $member = $this->feedback->findOrFail($id);
        $member->update($request->all());
        toast('Feedback has been Updated!','success');
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function edit($id)
    {

    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function destroy($id)
    {
        $member = $this->feedback->findOrFail($id);
        $member->delete($id);
    }
}
