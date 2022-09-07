<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
class MailController extends Controller
{
    //
    public function sendMail(Request $request){
        try {

            $data['correo'] = $request->correo;
            $data['cliente'] = $request->cliente;
            $data['empresa'] = $request->empresa;
            $data['telefono'] = $request->telefono;
            /*$data['email'] = 'soporte@grupopalermo.pe';*/
            $data['email'] = 'idham.sdmc@icloud.com';
            Mail::send('mail.template', $data, function($message) use($data)
            {
                $message->to($data['email'], $data['email'])->subject($data['cliente'].' INFORMACION');
            });

            $response = json_encode([
                'ok' => true,
                'msg' => 'Correo enviado!!!'
            ]);
            return Response($response);
            /*return Response::json([
                'ok' => true,
                'msg' => 'Correo enviado!!!'
            ], 200);*/

        } catch (\Throwable $th) {
            //throw $th;
            $error = json_encode([
                'ok' => false,
                'msg' => $th->getMessage(),
                'error' => $th->getTrace()
            ]);
            return Response($error);
        }
    }

    public function trabajo(Request $request)
    {
        try {

            $data['correo'] = $request->correo;
            $data['cliente'] = $request->cliente;
            $data['empresa'] = $request->empresa;
            $data['telefono'] = $request->telefono;
            /*$data['email'] = 'soporte@grupopalermo.pe';*/
            $data['email'] = 'idham.sdmc@icloud.com';
            $pdf = $request->cvitae;
            print_r("$request");exit();
            Mail::send('mail.template', $data, function($message) use($pdf, $data)
            {
                $message->to($data['email'], $data['email'])->subject($data['cliente'].' INFORMACION')
                    ->attachData($pdf, $data['cliente'].".pdf");
            });

            $response = json_encode([
                'ok' => true,
                'msg' => 'Correo enviado!!!'
            ]);
            return Response($response);
            /*return Response::json([
                'ok' => true,
                'msg' => 'Correo enviado!!!'
            ], 200);*/

        } catch (\Throwable $th) {
            //throw $th;
            $error = json_encode([
                'ok' => false,
                'msg' => $th->getMessage(),
                'error' => $th->getTrace()
            ]);
            return Response($error);
        }
    }
}
