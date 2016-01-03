<?php namespace App\Http\Controllers;
use App\Repo\Repositories\Navigation\NavigationInterface;
use App\Repo\Repositories\News\NewsInterface;
use App\Repo\Repositories\Slugs\SlugRepositories;
use App\Repo\Repositories\StudentMessage\StudentMessageInterface;
use App\Photo;
/*use App\Post;*/
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    /**
     * @var \App\Repositories\SlugRepositories
     */
    protected $slug;
    /**
     * @var \App\Repo\Repositories\News\NewsRepositories
     */
    protected $news;
    /**
     * @var
     */
    protected $pageid;
    /**
     * @param SlugRepositories $slug
     */
    public function __construct(SlugRepositories $slug,NewsInterface $news,NavigationInterface $navigation,StudentMessageInterface $student_message)
    {
        $this->slug = $slug;
        $this->news = $news;
        $this->navigation = $navigation;
        $this->student_message = $student_message;
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

    /**
     *
     */
    public function show($slug = 'home')
    {
        $page = $this->slug->getSlug($slug);
        $navigation = $this->navigation->getAscByPosition();
        $student_message = $this->student_message->getLatestPublishedMessage();
        $news = $this->news->getByPublishedDate();
        $photos = Photo::paginate(12);
        return view('pages.index',compact('navigation','page','student_message','news','photos'));
    }

}
