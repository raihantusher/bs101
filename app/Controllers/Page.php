<?php

namespace App\Controllers;

use App\Libraries\Candle\CandleAuth as Auth;
#load propel models
use Propel\Propel\Page as PropelPage;
use Propel\Propel\PageQuery;

/**
 * @class Pages
 * @constructor
 * @extends CandleController
 *
 */
class Page extends CandleController
{
    private $resource = null;

    private $topics    = null;

 

    public function __construct()
    {
        parent::__construct();
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////   
    public function index()
    {
        $page = $this->request->getVar("p");
        
        if (!isset($page)) {
            $page = 1;
        }

        $pages = PageQuery::create()
        //$categories->where();
        ->paginate($page, $maxPerPage = 2);
        // print_r($categories);
        $links = $pages->getLinks(5);

        $view = $this->getTwigViewName(__FUNCTION__);
        echo $this->twig->render($view, compact('categories', 'links', 'pages'));
    }
///////////////////////////////////////////////////////////////////////////////////////////////////

    public function create()
    {
        $pages = PageQuery::create()->find();
        $view = $this->getTwigViewName(__FUNCTION__);
        return $this->twig->render($view, compact('pages'));
    }
//////////////////////////////////////////////////////////////////////////////////////////////////

    public function store()
    {
        $page = new PropelPage();
        $page->setTitle($this->request->getPost("title"));
        $page->setArticle($this->request->getPost("article"));
        $page->save();

        return redirect()
                ->to(base_url('page'))
                ->with("success", "New page is created!! ");
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////
    public function edit($id = null)
    {
        $page = PageQuery::create()->findPk($id);
        $view = $this->getTwigViewName("create");
        return $this->twig->render($view, compact('page'));
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////
 
    public function update($id = null)
    {
        if ($this->request->getMethod() == "post") {
            $page = PageQuery::create()->findPk($id);
            $page->setTitle($this->request->getPost("title"));
            $page->setArticle($this->request->getPost("article"));
            $page->save();

            return redirect()
                ->to(base_url('page'))
                ->with("success", "Page is updated successfully!! ");
        }
        return redirect()->back();
    }
//////////////////////////////////////////////////////////////////////////////////////////////////
    public function delete($id = null)
    {
        if ($this->request->getMethod() == "post") {
            $page = PageQuery::create()->findPk($id);
            $page->delete();
        }
        
        return redirect()
            ->to(base_url('page'))
            ->with("success", "Page is deleted successfully!! ");
    }
}
