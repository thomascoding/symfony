<?php
/**
 * Created by PhpStorm.
 * User: yanak
 * Date: 22.01.17
 * Time: 16:50
 */

namespace AppBundle\Service;


use AppBundle\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class GameConverterService
{
    /**
     * @var Router
     */
    private $router;

    /**
     * @var string
     */
    private $swfPath;

    /**
     * GameConverterService constructor.
     * @param Router $router
     * @param string $swfPath
     */
    public function __construct(Router $router, $swfPath)
    {
        $this->router = $router;
        $this->swfPath = $swfPath;
    }


    /**
     * @param Game[] $data
     * @return array
     */
    public function convertGames(array $data){
        $res = array();
        foreach ($data as $game){
            $tmp = array();

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
                $tmp['swf_data'] = $this->swfPath.$game->getSwfData();
            }

            $tmp['swf_type'] = $game->getSwfType();
            $tmp['link'] = $this->generateUrl('game',array('id'=>$game->getId()));

            $res[] = $tmp;
        }
        return $res;
    }

    /**
     * Generates a URL from the given parameters.
     *
     * @param string $route         The name of the route
     * @param mixed  $parameters    An array of parameters
     *
     * @return string The generated URL
     *
     * @see UrlGeneratorInterface
     */
    private function generateUrl($route, $parameters = array())
    {
        return $this->router->generate($route, $parameters);
    }
}