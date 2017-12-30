<?php
require_once('resources/libs/SMTemplate.php');
//$content = "";
//$page =(isset($_GET['page'])) ? $_GET['page']: '';
////echo $page;
//
//switch ($page){
//    case 'index':
////        require_once('includes/stack.php');
////        $content = getContent();
//        break;
//    default:
//        // Pagina di errore.
//}

class templateInit
{

    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new SMTemplate();
        }
        return $inst;
    }
}


//$tpl->render($page);