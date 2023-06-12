<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Option;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            [
                'title' => 'Votre adresse mail ?',
                'type' => 'B',
                'options' => null,
            ],
            [
                'title' => 'Votre âge ?',
                'type' => 'B',
                'options' => null,
            ],
            [
                'title' => 'Votre sexe ?',
                'type' => 'A',
                'options' => ['Homme', 'Femme', 'Préfère ne pas répondre'],
            ],
            [
                'title' => 'Nombre de personnes dans votre foyer (adulte & enfants – répondant inclus) ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Votre profession ?',
                'type' => 'B',
                'options' => null,
            ],
            [
                'title' => 'Quelle marque de casque VR utilisez-vous ?',
                'type' => 'A',
                'options' => ['Oculus Quest', 'Oculus Rift/s', 'HTC Vive', 'Windows Mixed Reality', 'Valve Index'],
            ],
            [
                'title' => 'Sur quel magasin d’application achetez-vous des contenus VR ?',
                'type' => 'A',
                'options' => ['SteamVR', 'Oculus Store', 'Viveport', 'Windows Store'],
            ],
            [
                'title' => 'Quel casque envisagez-vous d’acheter dans un futur proche ?',
                'type' => 'A',
                'options' => ['Oculus Quest', 'Oculus Go', 'HTC Vive Pro', 'PSVR', 'Autre', 'Aucun'],
            ],
            [
                'title' => 'Au sein de votre foyer, combien de personnes utilisent votre casque VR pour regarder Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Vous utilisez principalement Bigscreen pour ….. ?',
                'type' => 'A',
                'options' => ['Regarder la TV en direct', 'Regarder des films', 'Travailler', 'Jouer en solo', 'Jouer en équipe'],
            ],
            [
                'title' => 'Combien de points (de 1 à 5) donnez-vous à la qualité de l’image sur Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Combien de points (de 1 à 5) donnez-vous au confort d’utilisation de l’interface Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Combien de points (de 1 à 5) donnez-vous à la connexion réseau de Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Combien de points (de 1 à 5) donnez-vous à la qualité des graphismes 3D dans Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Combien de points (de 1 à 5) donnez-vous à la qualité audio dans Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Aimeriez-vous avoir des notifications plus précises au cours de vos sessions Bigscreen ?',
                'type' => 'A',
                'options' => ['Oui', 'Non'],
            ],
            [
                'title' => 'Aimeriez-vous pouvoir inviter un ami à rejoindre votre session via son smartphone ?',
                'type' => 'A',
                'options' => ['Oui', 'Non'],
            ],
            [
                'title' => 'Aimeriez-vous pouvoir enregistrer des émissions TV pour pouvoir les regarder ultérieurement ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Aimeriez-vous jouer à des jeux exclusifs sur votre Bigscreen ?',
                'type' => 'C',
                'options' => null,
            ],
            [
                'title' => 'Selon vous, quelle nouvelle fonctionnalité devrait exister sur Bigscreen ?',
                'type' => 'B',
                'options' => null,
            ],
        ];

        foreach ($questions as $questionData) {
            $question = Question::create([
                'user_id' => 1, // Remplacez 1 par l'ID de l'utilisateur approprié
                'title' => $questionData['title'],
                'type' => $questionData['type'],
            ]);

            if ($questionData['options']) {
                foreach ($questionData['options'] as $optionValue) {
                    Option::create([
                        'question_id' => $question->id,
                        'value' => $optionValue,
                    ]);
                }
            }
        }
    }
}

