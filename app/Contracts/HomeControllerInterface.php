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

    /**
     * @return mixed
     */
    public function getLatestPosts();

    /**
     * @return mixed
     */
    public function getAllPosts();

    /**
     * @return mixed
     */
    public function getAllCategories();

    /**
     * @param $id
     * @return mixed
     */
    public function getPostById($id);

}
