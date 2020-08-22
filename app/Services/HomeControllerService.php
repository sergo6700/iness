<?php


namespace App\Services;


use App\Contracts\HomeControllerInterface;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Query\Builder;

class HomeControllerService implements HomeControllerInterface
{


    /**
     * @var Posts
     */
    private $posts;
    /**
     * @var Category
     */
    private $category;

    /**
     * HomeControllerService constructor.
     */
    public function __construct()
    {
        $this->posts = new Posts();
        $this->category = new Category();
    }

    /**
     * @return mixed
     */
    public function getAllPosts()
    {
        return $this->posts->get();
    }

    public function getAllCategories()
    {
        return $this->category->get();
    }

    /**
     * @return array|mixed
     */
    public function getPostsForSlider()
    {
        $categories = $this->category->get();
        $sliderPosts = [];
        foreach ($categories as $category) {
            $sliderPosts[] = $category
                ->posts()
                ->select(
                    'id',
                    'project_title',
                    'project_image',
                    'project_description',
                    'category_id'
                )
                ->with('category')
                ->orderBy('id','desc')
                ->take(1)->first();
        }
        return $sliderPosts;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getRandomPosts()
    {
        return $this->posts->with('category')->inRandomOrder()->limit(10)->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getLatestPosts()
    {
        return $this->posts->with('category')->orderBy('id','desc')->limit(4)->get();
    }

    /**
     * @param $id
     * @return
     */
    public function getPostById($id)
    {
        $post = $this->posts->where('id',$id)->first();
        if (!$post)
            abort(404);
        return $post;
    }

}
