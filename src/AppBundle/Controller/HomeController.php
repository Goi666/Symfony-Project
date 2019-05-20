<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class HomeController extends Controller {
  /**
   * @Route("/", name = "home")
   */

  public function homeAction() {
    $greeting = "ようこそPHPerの花園へ";

    return $this->render(
      "home/top.html.twig",
      array("greeting_ja" => $greeting)
    );
  } 
}
?>
