<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
  /**
   * @Route("/lucky/number")
   */
    public function numberAction()
    {
      $number = rand(0, 4);
      $name = "Goi";
      $kekka = $this->omikuji($number);
      //$kekka = $number;

      /*
      return new Response(
        '<html><body>Lucky number: '.$name.'の今日の運勢は・・・'.$kekka.'</body></html>'
      );
       */
      return $this->render(
        'lucky/number.html.twig',
          array('omikuji_result' => $kekka)
      );
    }

    public function omikuji($logic_number)
    {
      $result = "";
      if ($logic_number == 0) {
        $result = "大吉";
      } elseif ($logic_number == 1) {
        $result = "吉";
      } elseif ($logic_number == 2) {
        $result = "凶";
      } elseif ($logic_number == 3) {
        $result = "大凶";
      } else {
        $result = "最強";
      }
        return $result;
    }

}
?>
