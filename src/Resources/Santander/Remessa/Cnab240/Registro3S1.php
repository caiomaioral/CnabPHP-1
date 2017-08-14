<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace CnabPHP\Resources\Santander\Remessa\Cnab240;
use CnabPHP\Resources\Generico\Remessa\Cnab240\Generico3;
use Exception;

class Registro3S1 extends Generico3
{
	protected $meta = [
        'codigo_banco'=> [
            'tamanho'=>3,
            'default'=>'033',
            'tipo'=>'int',
            'required'=>true
        ],
        'codigo_lote'=> [
            'tamanho'=>4,
            'default'=>1,
            'tipo'=>'int',
            'required'=>true
        ],
        'tipo_registro'=> [
            'tamanho'=>1,
            'default'=>'3',
            'tipo'=>'int',
            'required'=>true
        ],
        'numero_registro'=> [
            'tamanho'=>5,
            'default'=>'1',
            'tipo'=>'int',
            'required'=>true
        ],
        'seguimento'=> [
            'tamanho'=>1,
            'default'=>'S',
            'tipo'=>'alfa',
            'required'=>true
        ],
        'filler1'=> [
            'tamanho'=>1,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true
        ],
        'codigo_movimento'=> [
            'tamanho'=>2,
            'default'=>'01', // entrada de titulo
            'tipo'=>'int',
            'required'=>true
        ],

			// - ------------------ até aqui é igual para todo registro tipo 3

		'tipo_impressao' => [
			'tamanho'=>1,
			'default'=>'1',
			'tipo'=>'int',
			'required'=>true
        ],
		'numero_linha'=> [
			'tamanho'=>2,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true
        ],
		'tipo_mensagem'=> [
			'tamanho'=>1,
			'default'=>'4',
			'tipo'=>'alfa',
			'required'=>true
        ],
        'mensagem_100'=> [
            'tamanho'=>100,
            'default'=>' ',
            'tipo'=>'alfa',
            'required'=>true
        ],
		'filler2'=> [
			'tamanho'=>119,
			'default'=>' ',
			'tipo'=>'alfa',
			'required'=>true,
        ]
	];
}

?>
