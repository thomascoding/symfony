<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query;

class APIController extends Controller
{

  private function response ($content,$error=0) {
    $response =  new Response();
    $response->setContent($content);
    $response->setStatusCode(Response::HTTP_OK);
    $response->headers->set('Content-Type', 'text/json');
    return $response;
  }


  public function mainIndexAction(Request $request)
  {
    // replace this example code with whatever you need
    $game = $this->getDoctrine()->getManager()->getRepository('AppBundle:Game');
    $data = $game->findAll();
    //dump($this->prepare($data,$this));
    //var_dump($this->getParameter('swf.path'));

    return $this->response(
      json_encode($this->prepareGames($data),JSON_PRETTY_PRINT)
    );
  }

  // Service ?
  private function prepareGames(Array $data){
    $res = array();
    foreach ($data as $game){
      $tmp = array();
      /**
       * @var $game Game
       */

      $tmp['id']   = $game->getId();
      $tmp['name'] = $game->getName();
      $tmp['text'] = nl2br($game->getText());
      $tmp['swf_data'] = $game->getSwfData();
      $tmp['tags'] = array();
      foreach ($game->getTags() as $tag){
        $tmp['tags'] = array(
          'name'=>$tag->getTag(),
          'link'=>$this->generateUrl('tag',array('slug'=>$tag->getSlug()))
        );
      }

      if(strpos($game->getSwfData(), 'http')===false) {
        $tmp['swf_data'] = $this->getParameter('swf.path').$game->getSwfData();
      }

      $tmp['swf_type'] = $game->getSwfType();
      $tmp['link'] = $this->generateUrl('game',array('id'=>$game->getId()));

      $res[] = $tmp;
    }
    return $res;
  }

}
