<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Game;
use AppBundle\Request\GameRequest;
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
      $gameRequest = new GameRequest();
      $gameRequest->exchangeHttpRequest($request);
    // replace this example code with whatever you need
    $gameRepo = $this->getGameRepository();
    $data = $gameRepo->findAllWithTagsByRequest($gameRequest);
    //dump($this->prepare($data,$this));
    //var_dump($this->getParameter('swf.path'));

      $converter = $this->getGameConverter();

    return $this->response(
      json_encode($converter->convertGames($data), JSON_PRETTY_PRINT)
    );
  }

    /**
     * @return \AppBundle\Repository\GameRepository|object
     */
    private function getGameRepository()
    {
        return $this->get('app.repository.game_repository');
    }

    /**
     * @return \AppBundle\Service\GameConverterService|object
     */
    private function getGameConverter()
    {
        return $this->get('app.service.game_converter_service');
    }
}
