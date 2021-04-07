<?php

namespace core\class;

use Exception;

class Gestao
{
    public static function Layouts($structs) {
        if (!is_array($structs)) {
            throw new Exception("Estrutura nao eh um array", 1);
        }

        foreach($structs as $structs) {
            include("../core/views/$structs.php");
        }
    }
    
    // =====================================================
    public static function redicionamento($rota='inicio') {
        header("Location:". Base_URL. "?a=". $rota);
    }
}
