<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
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
        // Obtener el número de documento de la solicitud GET
        $numero_documento = $request->input('numero_documento');

        // Buscar la empresa en la base de datos
        $empresas = Company::where('number_doc', $numero_documento)->first();

        // Retornar la vista index.blade.php con la empresa encontrada
        return view('companies.index', ['empresas' => $empresas]);
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
    public function show(Company $company)
    {
        // Recibe los datos del formulario de búsqueda
        $tipo_documento = $company->input('document_types_id');
        $numero_documento = $company->input('number_doc');

        // Realiza la búsqueda en la base de datos según los criterios
        $empresas = Company::where('document_types_id', $tipo_documento)
                            ->where('number_doc', $numero_documento)
                            ->get();

        // Retorna la vista show con los resultados de la búsqueda
        return view('companies.show', ['companies' => $empresas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
                // Buscar la empresa por su ID
        $company = Company::findOrFail($id);

        // Retornar la vista para editar la empresa
        return view('companies.edit', compact('company'));
    }


    public function update(Request $request, $id)
        {
            // Validar los datos del formulario
            $validatedData = $request->validate([
                'name_company' => 'required|string|max:255',
                'number_doc' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'platforms' => 'required|string|max:255',
                'Phone' => 'required|string|max:20',
                'email' => 'required|email',
            ]);
    
            // Buscar la empresa por su ID
            $company = Company::findOrFail($id);
    
            // Actualizar los datos de la empresa con los datos validados del formulario
            $company->update($validatedData);
    
            // Redirigir a alguna vista o ruta después de la actualización
            return redirect()->route('documenttypes.index')->with('success', 'La empresa se ha actualizado correctamente.');
        }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
