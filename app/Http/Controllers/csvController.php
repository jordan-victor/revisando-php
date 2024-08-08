<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csvController extends Controller
{
    //EXIBIR O TOTAL DE NOTIFICAÇÕES NA TELA
    public function showForm(){
        return view('csv-form');
    }




    //PROCESSAR O ARQUIVO .CSV PARA PEGAR E CONTAR O TOTAL DE LINHAS
    public function processCsv(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $filePath = $file->getRealPath();

        // Abrir o arquivo CSV
        $file = fopen($filePath, 'r');
        $lineCount = 0;

        // Contar o número de linhas
        while (fgets($file) !== false) {
            $lineCount++;
        }

        fclose($file);

        return view('csv-result', ['lineCount' => $lineCount]);
    }
}
