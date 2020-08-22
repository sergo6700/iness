<?php


namespace App\Services;


use App\Contracts\ClientControllerInterface;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientControllerService implements ClientControllerInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * ClientControllerService constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @return mixed|void
     */
    public function index()
    {
        return $this->client->get();
    }

    /**
     * @param CreateClientRequest $request
     * @return mixed|void
     */
    public function store(CreateClientRequest $request)
    {
        $data = [];
        if($request->hasFile('logo')){
            if($file = $request->file('logo')){
                $name = time() . "_" . $file->getClientOriginalName();
                $file->move('image/'.$request->client,$name);
                $data['logo'] = 'image/'.$request->client .'/' .$name;
            }
        }
        $data['client'] = $request->client;
        $data['link']   = $request->link;
        $this->client->create($data);
        toast('Client has been added!','success');
    }

    /**
     * @param UpdateClientRequest $request
     * @param $id
     * @return mixed|void
     */
    public function update(UpdateClientRequest $request, $id)
    {
        $client = $this->client->findOrFail($id);
        $data = [];
        if($request->hasFile('logo')){
            if($file = $request->file('logo')){
                $name = time() . "_" . $file->getClientOriginalName();
                $file->move('image/'.$request->client,$name);
                $data['logo'] = 'image/'.$request->client .'/' .$name;
            }
        }
        $data['client'] = $request->client;
        $data['link']   = $request->link;
        $client->update($request->all());
        toast('Client has been Updated!','success');
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function destroy($id)
    {
        $client = $this->client->findOrFail($id);
        $client->delete($id);
    }
}
