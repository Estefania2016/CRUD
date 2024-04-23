<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Incidence;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{


    /**
     * Mostrar el formulario para crear un nuevo ticket.
     */public function create($number_doc)
    {
    // Buscar la empresa usando el número de documento
        $empresas = Company::where('number_doc', $number_doc)->first();
        
        // Verificar si la empresa existe
        if (!$empresas) {
            return redirect()->back()->with('error', 'No se encontró la empresa');
        }

        // Obtener todas las incidencias
        $incidencias = Incidence::all();

        // Pasar la empresa y las incidencias a la vista de creación de tickets
        return view('tickets.create', compact('empresas', 'incidencias'));
    }

    /**
     * Almacenar un nuevo ticket en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'incidences_id' => 'required',
            'observations' => 'required|string|max:255',
            'state' => 'boolean',
            'phone_solution' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo objeto Ticket con los datos validados del formulario
        $ticket = new Ticket();
        $ticket->incidences_id = $validatedData['incidences_id'];
        $ticket->companies_id = $request->empresa_id; // Ajusta según tu lógica
        $ticket->observations = $validatedData['observations'];
        $ticket->state = $validatedData['state'] ; 
        $ticket->phone_solution = $validatedData['phone_solution']?? false;// Si el checkbox no está marcado, asigna false por defecto

        // Guardar el objeto Ticket en la base de datos
        $ticket->save();

        // Redirigir a la ruta deseada después de guardar el ticket
        return redirect()->route('documenttypes.index')->with('success', 'El ticket se ha guardado correctamente.');
    }

    // Resto de métodos del controlador...
    
    public function consult()
    {
        // Puedes cargar aquí cualquier dato que necesites para la consulta

        return view('tickets.consult');
    }   

    public function doConsult(Request $request)
    {
        // Realiza la consulta por el ID de ticket
        $ticketId = $request->input('ticket_id');
        $ticket = Ticket::find($ticketId);
    
        // Retorna la vista de resultados de la consulta, pasando la variable $ticket
        return view('tickets.results', ['ticket' => $ticket]);
    }
}
