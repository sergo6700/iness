<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryControllerInterface;
use App\Contracts\PostControllerInterface;
use App\Contracts\TemplateInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\TemplateRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Services\CategoryControllerService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{

    /**
     * @var PostControllerInterface
     */
    private $postRepo;

    private $templateRepo;
    /**
     * @var CategoryControllerInterface
     */
    private $categoryRepo;

    /**
     * PostController constructor.
     * @param TemplateInterface $templateRepo
     * @param PostControllerInterface $postRepo
     * @param CategoryControllerInterface $categoryRepo
     */
    public function __construct(
        TemplateInterface $templateRepo,
        PostControllerInterface $postRepo,
        CategoryControllerInterface $categoryRepo
    )
    {
        $this->postRepo     = $postRepo;
        $this->templateRepo = $templateRepo;
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $templates = $this->templateRepo->getTemplateNames();
        $posts     = $this->postRepo->index();
        return view('admin/post/index', compact('templates','posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $name
     * @return Application|Factory|View
     */
    public function create($name)
    {
        $this->templateRepo->checkTemplateName($name);
        $template = $this->templateRepo->getTemplateFields($name);
        $templateName = $this->templateRepo->getTemplateName($name);
        $category  = $this->categoryRepo->index();

        return view('admin/post/create', compact('template', 'category', 'templateName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreatePostRequest $request)
    {
         $this->postRepo->store($request);
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
     * @return Application|Factory|View
     */
    public function edit($name,$id)
    {
        $template = $this->templateRepo->getTemplateFields($name);
        $category  = $this->categoryRepo->index();
        $post = $this->postRepo->edit($name,$id);
        return view('admin/post/edit', compact('post','template','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $this->postRepo->update($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        $this->postRepo->destroy($id);
    }
}
