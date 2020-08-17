<?php


namespace App\Services;


use App\Models\Posts;

class HomeControllerService
{


    /**
     * @var Posts
     */
    private $post;

    /**
     * HomeControllerService constructor.
     */
    public function __construct()
    {
        $this->post = new Posts();
    }

    /**
     *
     */
    public function getPostsForSlider()
    {

    }

    /*
     *
     */
    public function getRandomPosts()
    {

    }


}
