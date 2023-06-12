<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::all();

        if ($questions->count() > 0) {
            $questionsData = [];

            foreach ($questions as $question) {
                $data = [
                    'title' => $question->title,
                    'type' => $question->type,
                ];

                if ($question->type === 'A') {
                    // Récupérer les value des options
                    $data['options'] = $question->options->pluck('value');
                }

                $questionsData[] = $data;
            }

            return response()->json([
                'status' => 200,
                'questions' => $questionsData
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Pas de questions trouvées'
            ], 404);
        }
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
        $reponses = Response::all();
        // Récupérer les réponses du formulaire
        $reponses = $request->input('reponses');

        // Stocker les réponses dans la session de l'utilisateur
        Session::put('reponses', $reponses);

        // Rediriger ou effectuer toute autre action nécessaire
        // return redirect()->back()->with('success', 'Vos réponses ont été enregistrées.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
