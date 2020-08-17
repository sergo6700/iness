<?php


namespace App\Services;
use App\Contracts\CategoryControllerInterface;
use App\Contracts\TemplateInterface;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;



class TemplateService implements TemplateInterface
{
    /*
     *
     */
    private $template;

    /*
     *
     */
    public function __construct()
    {
        $this->template = new Template();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function getTemplateNames()
    {
        return $this->template->select('id', 'name')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @param $name
     * @return Application|Factory|View
     */
    public function getTemplateName($name)
    {
        return $this->template->select('name')->where('name', $name)->first();
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getTemplateFields($name)
    {

        $json = $this->template->select('fields','name')->where('name',$name)->first();
        return json_decode($json->fields);
    }
    /**
     * @param $name
     * @return mixed
     */
    public function checkTemplateName($name)
    {
        $template = $this->template->where('name', $name)->first();
        if (!$template)
            abort(404);
        return true;
    }
}
