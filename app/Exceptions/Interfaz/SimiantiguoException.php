<?php

namespace App\Exceptions\Interfaz;

use Exception;

class SimiantiguoException extends Exception
{

    public $dataxxxx;

    public function __construct($dataxxxx)
    {
        $this->dataxxxx = $dataxxxx;
    }
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->view(
            $this->dataxxxx['vistaxxx'],
            $this->dataxxxx['dataxxxx']
        );
    }
}