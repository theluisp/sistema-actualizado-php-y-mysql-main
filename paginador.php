<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paginador
 *
 * @author elmer
 */
class paginador {

    function pagination($totalRegs, $pagActual, $funcion, $criterio, $numReg = NUM_REGISTROS, $cantPag = 5) {
        $html = '';

        $cantPag = ($cantPag == 0 ? 5 : $cantPag);
        $numReg = ($numReg == 0 ? 10 : $numReg);

        if ($totalRegs > 0) {

            $params = "'" . $criterio . "'";

            $html = '<div class="row">
                    <div class="col-md-6">
                        <div>
                            <input type="hidden" id="pphpagact" value="' . $pagActual . '">
';
            $onclick = $funcion . '(' . $params . ',1,this.value);';
            $html .= '         <select style="width:58px;" name="cboNumReg" id="cboNumReg" onchange="' . $onclick . '">
                                                <option value="10" ' . ($numReg == 10 ? 'selected' : '') . '>10</option>
                                                <option value="20" ' . ($numReg == 20 ? 'selected' : '') . '>20</option>
                                                <option value="30" ' . ($numReg == 30 ? 'selected' : '') . '>30</option>
                                                <option value="50" ' . ($numReg == 50 ? 'selected' : '') . '>50</option>
                                                <option value="100" ' . ($numReg == 100 ? 'selected' : '') . '>100</option>
                                            </select>

                                    &nbsp;de un total de <span class="text-primary">' . $totalRegs . '</span>
                                        registros / Pag. <span class="txt-color-darken">' . $pagActual . '</span> de <span class="txt-color-darken">' . ceil($totalRegs / $numReg) . '</span>
                                 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <nav class="float-right" aria-label="Page navigation example">
                            <ul class="pagination">';

            $paginas = ceil($totalRegs / $numReg); #determinando el numero de paginas

            $mediaPag = ceil($cantPag / 2);
            $pagInicio = ($pagActual - $mediaPag);
            $pagInicio = ($pagInicio <= 0 ? 1 : $pagInicio);
            $pagFinal = ($pagInicio + ($cantPag - 1));

            if ($pagActual > 1) {
                $onclick = $funcion . '(' . $params . ',1,' . $numReg . ');';
                $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">Pri.</a></li>';

                $onclick = $funcion . '(' . $params . ',' . ($pagActual - 1) . ', ' . $numReg . ');';
                $html .= '<li class="page-item"><a class="page-link"  href="javascript:void(0);" onclick="' . $onclick . '"><span aria-hidden="true">&laquo;</span></a></li>';
            } else {
                $html .= '<li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Pri.</a></li>';
                $html .= '<li class="page-item disabled"><a class="page-link" href="javascript:void(0);"><span aria-hidden="true">&laquo;</span></a></li>';
            }

            $sw = true;
            for ($i = $pagInicio; $i <= $pagFinal; $i++) {
                if ($i <= $paginas) {
                    $onclick = $funcion . '(' . $params . ',' . $i . ', ' . $numReg . ');';
                    $a = '<a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">' . $i . '</a>';

                    $css = '';
                    if ($i == $pagActual) {
                        $a = '<a class="page-link" href="javascript:void(0);">' . $i . '</a>';
                        $css = ' class ="page-item active" ';
                    }

                    $html .= '<li ' . $css . '>' . $a . '</li>';
                } else {
                    $sw = false;
                    break;
                    //$html .= '<li class="disabled"><a href="#" style="text-decoration:none;cursor:auto">' . $i . '</a></li>';
                }
            }

            if ($paginas > 1 && $pagActual != $paginas) {

                $onclick = $funcion . '(' . $params . ',' . ($pagActual + 1) . ', ' . $numReg . ');';
                $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '"><span aria-hidden="true">&raquo;</span></a></li>';

                $onclick = $funcion . '(' . $params . ',' . $paginas . ', ' . $numReg . ');';
                $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="' . $onclick . '">Ult.</a></li>';
            } else {
                $html .= '<li class="page-item disabled"><a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto"><span aria-hidden="true">&raquo;</span></li>';
                $html .= '<li class="page-item disabled"><a class="page-link" href="javascript:void(0);" style="text-decoration:none;cursor:auto">Ult.</a></li>';
            }

            $html .= '</ul>
            </div>
        </div>            
    </div>';
        }
        return $html;
    }

}
