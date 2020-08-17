<?php


namespace App\Services;
use App\Contracts\PostControllerInterface;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\TemplateRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;



class PostControllerService implements PostControllerInterface
{
    /*
     *
     */
    private $post;

    /*
     *
     */
    public function __construct()
    {
        $this->post = new Posts();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return $this->post->select('id','template_name', 'project_title','data')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param TemplateRequest $request
     * @return void
     */
    public function create(TemplateRequest $request)
    {
        $templateName = $request->all()->name;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @return false|string
     */
    public function store(CreatePostRequest $request)
    {
        $inputData = $request->input();
        $files = $request->allFiles();
        foreach ($files as $key => $val){
            if($fil = $request->file($key)){
                foreach($fil as $file){
                    $name = $file->getClientOriginalName();
                    $file->move('image/'.$request->project_title,$name);
                    $inputData[$key][] = $name;
                }
            }
        }
        $data['category_id'] = $request->category_id;
        $data['template_name'] = $request->template_name;
        $data['project_title'] = $request->project_title;
        $data['project_image'] = $request->project_image;
        $data['project_description'] = $request->project_description;
        unset($inputData['_token']);
        unset($inputData['category_id']);
        unset($inputData['template_name']);
        unset($inputData['project_title']);
        unset($inputData['project_image']);
        unset($inputData['project_description']);
        $data[
            'data'
        ] = json_encode($inputData);
        $this->post->create($data);
        toast('Your Post has been created!','success');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $name
     * @param int $id
     * @return array
     */
    public function edit($name,$id)
    {
        $post = $this->post->where('template_name',$name)->where('id',$id)->first();
        if(!$post)
            abort(404);
        return [
            'id'            => $post->id,
            'data'          => json_decode($post->data),
            'category_id'   => $post->category_id,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param int $id
     * @return void
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $oldData = $this->post->select('data','template_name')->where('id',$id)->first();
        if (!$oldData)
            abort(404);
        $old = json_decode($oldData->data);

        $new = $request->input();

        $files = $request->allFiles();

        foreach ($files as $key => $val){
            if($fil = $request->file($key)){
                foreach($fil as $file){
                    $name = $file->getClientOriginalName();
                    $file->move('image/'.$request->project_title,$name);
                    $new[$key][] = $name;
                }
            }
        }
        foreach ($old as $key => $val){
            foreach ($new as $keyNew => $valNew){
                if (array_key_exists($keyNew,$old)){
                    $new[$keyNew] = $valNew;
                }
                else{
                    $new[$key] = $val;
                }
            }
        }

        $data['category_id']            = $request->category_id;
        $data['template_name']          = $oldData->template_name;
        $data['project_title']          = $oldData->project_title;
        $data['project_image']          = $oldData->project_image;
        $data['project_description']    = $oldData->project_description;
        unset($new['_token']);
        unset($new['category_id']);
        unset($new['template_name']);
        unset($new['project_title']);
        unset($new['project_image']);
        unset($new['project_description']);

        $data[
            'data'
        ] = json_encode($new);

        $post = $this->post->findOrFail($id);
        $post->update($data);
        toast('Your Post has been updated!','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $post = $this->post->findOrFail($id);
        $post->delete();
    }



}
