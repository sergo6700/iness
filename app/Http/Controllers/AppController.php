<?php

namespace App\Http\Controllers;

use App\Contracts\ClientControllerInterface;
use App\Contracts\FeedbackControllerInterface;
use App\Contracts\HomeControllerInterface;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Team;
use App\Template;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{
    /**
     * @var HomeControllerInterface
     */
    private $homeRepo;
    /**
     * @var FeedbackControllerInterface
     */
    private $feedbackRepo;
    private $cientRepo;

    /**
     * AppController constructor.
     * @param HomeControllerInterface $homeRepo
     * @param FeedbackControllerInterface $feedbackRepo
     * @param ClientControllerInterface $clientRepo
     */
    public function __construct(
        HomeControllerInterface     $homeRepo,
        FeedbackControllerInterface $feedbackRepo,
        ClientControllerInterface   $clientRepo
    )
    {
        $this->homeRepo     = $homeRepo;
        $this->feedbackRepo = $feedbackRepo;
        $this->cientRepo    = $clientRepo;
    }

    /**
     * Home Page
     */
    public function home(){
        $sliderPosts = $this->homeRepo->getPostsForSlider();
        $randomPosts = $this->homeRepo->getRandomPosts();
        $feedback    = $this->feedbackRepo->index();
        $latestPosts = $this->homeRepo->getLatestPosts();
        $client      = $this->cientRepo->index();
        return view('frontend.home',compact('sliderPosts','randomPosts','latestPosts','feedback','client'));
    }

    /**
     * About Page
     */
    public function about(){
        $teams = Team::get();
        $feedback = Feedback::get();
        $clients = Client::get();
        return view('frontend.about', compact('teams','feedback','clients'));
    }

    /**
     * Contact Page
     */
    public function contact(){
        return view('frontend.contact');
    }

    /**
     * Work Page
     */
    public function work(){
        $works = $this->homeRepo->getAllPosts();
        $categories = $this->homeRepo->getAllCategories();
        return view('frontend.work', compact('works','categories'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function template($id)
    {
        $project = $this->homeRepo->getPostById($id);
        return view('frontend/templates/'.$project->template_name, compact('project'));
    }
}
