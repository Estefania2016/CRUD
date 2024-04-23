<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function __invoke()
    {
        //return view('Welcome');
        return view('home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener todos los tipos de documento
        $documentos = DocumentType::all();

        // Inicializar el resultado de la búsqueda
        $resultado = null;

        // Verificar si se ha enviado una solicitud de búsqueda
        if ($request->has('numero_documento')) {
            // Validar el número de documento ingresado
            $request->validate([
                'numero_documento' => 'required|numeric', // Agrega cualquier regla de validación adicional según tus necesidades
            ]);

            // Obtener el número de documento de la solicitud
            $numero_documento = $request->input('numero_documento');

            // Realizar la búsqueda en el modelo Company por el número de documento
            $resultado = Company::where('number_doc', $numero_documento);

            // Si no se encuentra ningún resultado, redirigir de nuevo a la vista con un mensaje de error
            if (!$resultado) {
                return redirect()->route('documenttypes.index')->with('error', 'No se encontraron resultados para el número de documento proporcionado.');
            }
        }

        // Pasar los tipos de documento y el resultado de la búsqueda a la vista
        return view('documenttypes.show', compact('documentos', 'resultado'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentType $documentType)
    {
        
       

        
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentType $documentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocumentType $documentType)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentType $documentType)
    {
        //
    }
}
