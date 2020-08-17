<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\CategoryControllerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CategoryController extends Controller
{

    /**
     * @var CategoryControllerInterface
     */
    private $categoryRepo;

    /**
     * CategoryController constructor.
     * @param CategoryControllerInterface $categoryRepo
     */
    public function __construct(
        CategoryControllerInterface $categoryRepo
    )
    {
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $category = $this->categoryRepo->index();
        return view('admin/category/category', compact('category'));

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
     * @param CreateCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->categoryRepo->store($request);
        return redirect()->back();

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
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $this->categoryRepo->update($request,$id);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $this->categoryRepo->destroy($id);
        return 'success';
    }
}
