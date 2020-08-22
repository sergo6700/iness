<?php


namespace App\Services;


use App\Contracts\TeamInterface;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamControllerService implements TeamInterface
{
    /**
     * @var Team
     */
    private $team;

    /**
     * TeamControllerService constructor.
     */
    public function __construct()
    {
        $this->team = new Team();
    }

    /**
     * @return mixed|void
     */
    public function index()
    {
        return $this->team->get();
    }

    /**
     * @return mixed|void
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param CreateTeamRequest $request
     * @return mixed|void
     */
    public function store(CreateTeamRequest $request)
    {
        $data = [];
        if($request->hasFile('image')){

            if($file = $request->file('image')){
                $name = time() . "_" . $file->getClientOriginalName();
                $file->move('image/'.$request->name,$name);
                $data['image'] = 'image/'.$request->name.'/'.$name;
            }
        }
        $data['name']       = $request->name;
        $data['profession'] = $request->profession;
        $this->team->create($data);
        toast('Team member has been added!','success');
    }

    /**
     * @param UpdateTeamRequest $request
     * @param $id
     * @return mixed|void
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $member = $this->team->findOrFail($id);
        $data = [];
        if($request->hasFile('image')){

            if($file = $request->file('image')){
                $name = time() . "_" . $file->getClientOriginalName();
                $file->move('image/'.$request->name,$name);
                $data['image'] = 'image/'.$request->name.'/'.$name;
            }
        }
        $data['name']       = $request->name;
        $data['profession'] = $request->profession;
        $member->update($data);
        toast('Team member has been Updated!','success');
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
        $member = $this->team->findOrFail($id);
        $member->delete($id);
    }
}
