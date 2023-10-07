<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $questions = [
        [
            'text' => 'What is the name of the largest coral reef system in the world, which is home to more than 1,500 species of fish and 600 species of coral?',
            'A' => 'The Great Barrier Reef',
            'B' => 'The Coral Triangle',
            'C' => 'The Mesoamerican Reef',
            'D' => 'The Red Sea Coral Reef',
            'Answer' => 'A'
        ],
        [
            'text' => 'What is the name of the largest coral reef system in the world, which is home to more than 1,500 species of fish and 600 species of coral?',
            'A' => 'The Great Barrier Reef',
            'B' => 'The Coral Triangle',
            'C' => 'The Mesoamerican Reef',
            'D' => 'The Red Sea Coral Reef',
            'Answer' => 'A',
        ],
        [
            'text' => 'What is the main cause of coral bleaching, which is a phenomenon that makes corals lose their color and become more vulnerable to disease and death?',
            'A' => 'Ocean acidification',
            'B' => 'Overfishing',
            'C' => 'Sea level rise',
            'D' => 'Rising sea temperatures',
            'Answer' => 'D',
        ],
        [
            'text' => 'What is the name of the endangered freshwater dolphin that lives in the Yangtze River in China, and is also known as the “Goddess of the Yangtze”?',
            'A' => 'The Irrawaddy dolphin',
            'B' => 'The Baiji dolphin',
            'C' => 'The Amazon river dolphin',
            'D' => 'The Ganges river dolphin',
            'Answer' => 'B',
        ],
        [
            'text' => 'What are some of the benefits of swimming in natural water bodies, such as lakes, rivers, or oceans?',
            'A' => 'It improves your cardiovascular health and immune system',
            'B' => 'It reduces stress and anxiety and boosts your mood',
            'C' => 'It enhances your skin health and hydration',
            'D' => 'All of the above',
            'Answer' => 'D',
        ],
        [
            'text' => 'What are some of the best practices to follow when swimming in natural water bodies, to protect yourself and the environment?',
            'A' => 'Avoid swimming in water that is cloudy, discolored, or has a bad smell',
            'B' => 'Do not touch or disturb any plants or animals that live in the water',
            'C' => 'Do not litter or leave any waste in or near the water',
            'D' => 'All of the above',
            'Answer' => 'D',
        ],
        ];

        public function index()
        {
            return view('quiz', ['questions' => $this->questions]);
        }

        public function submit(Request $request)
        {
            $answers = $request->input('answers');
            $results = [];
        
            // Check if $answers is not null and is an array
            if (is_array($answers)) {
                foreach ($answers as $key => $answer) {
                    $correct = ($answer === $this->questions[$key]['Answer']);
                    $results[] = ['correct' => $correct];
                }
            } else {
                // Handle the case where $answers is null or not an array
                // For example, you can set a default response or redirect back with a message
                return redirect()->back()->with('error', 'Answers were not provided or are invalid.');
            }
        
            return view('quiz', ['questions' => $this->questions, 'results' => $results]);
        }
    //
}


