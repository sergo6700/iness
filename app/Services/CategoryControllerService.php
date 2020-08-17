<?php


namespace App\Services;
use App\Contracts\CategoryControllerInterface;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;



class CategoryControllerService implements CategoryControllerInterface
{
    /*
     *
     */
    private $category;

    /*
     *
     */
    public function __construct()
    {
        $this->category = new Category();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return $this->category->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateCategoryRequest $request
     * @return void
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->category->create($request->all());
        toast('Your Category has been created!','success');
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
     * @param UpdateCategoryRequest $request
     * @param int $id
     * @return void
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $category = $this->category->findOrFail($id);
        $category->update($request->all());
        toast('Your Category has been updated!','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->category->findOrFail($id);
        $category->delete();
    }
}
