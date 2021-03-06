<?php
namespace CnabPHP\Resources\Generico\Remessa\Cnab400;
use CnabPHP\RegistroRemessaAbstract;
use CnabPHP\RemessaAbstract;
use Exception;

class Generico2 extends RegistroRemessaAbstract
{
    protected function set_numero_registro($value)
    {
        $lote  = RemessaAbstract::getLote(0);
        $this->data['numero_registro'] = $lote->get_counter();
    }

    protected function set_numero_inscricao_empresa($value)
    {
        $this->data['numero_inscricao_empresa'] = str_ireplace(array('.','/','-'),array(''), $value);
    }
}
