<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Productos;
use Egulias\EmailValidator\Result\Reason\DetailedReason;
use Illuminate\Http\Request;
use App\Models\Compras;

class VentasController extends Controller
{
    public function create()
    {
        return view('Facturas/generar');
    }
    public function estado($id){
        $modDet = Detalle::findOrFail($id);
        $pro = Productos::findOrFail($modDet->proid);
        ($modDet-> estpro == "Pendiente"){
         $modDet-> estpro = "Entregado";

            $cambio = new Adetalles();
            $cambio->usuario = auth()->user()->id;
            $cambio->recibo = $modDet->ventaid;
            $cambio->producto = $modDet->npro;
            $cambio->cambio = "Entregado";
            $cambio->save();

            $pro->cantidad = ((float)$pro->cantidad) - ((float)$modDet->canpro);
            $pro->save();

         $modDet->save();
        }

    }
}