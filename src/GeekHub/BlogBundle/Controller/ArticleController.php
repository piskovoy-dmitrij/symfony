<?php

namespace GeekHub\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ArticleController extends Controller
{

    /**
     * @Template()
     */
    public function indexAction()
    {
        return array("articles" => array());
    }

}
