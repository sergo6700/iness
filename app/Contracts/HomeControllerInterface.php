<?php


namespace App\Contracts;


interface HomeControllerInterface
{

    /**
     * @return mixed
     */
    public function getPostsForSlider();

    /**
     * @return mixed
     */
    public function getRandomPosts();
}
