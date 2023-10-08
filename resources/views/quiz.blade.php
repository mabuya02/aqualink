<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-top: 20px;
            text-align: center; /* Align the question title to the left */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            margin: 0 auto;
        }

        .question {
            margin: 10px 0; /* Reduced margin for questions */
            text-align: left; /* Align each question to the left */
        }

        .question p {
            font-size: 18px;
        }

        .answers {
            margin-top: 10px;
        }

        .answers label {
            display: block;
            margin-bottom: 10px;
            text-align: left; /* Align the answer options to the left */
        }

        .choices {
            display: inline-block;
            width: 30px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 16px;
            padding: 5px 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .choices:hover {
            background-color: #007bff;
            color: #fff;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .correct-answer {
            color: green;
            font-weight: bold;
        }

        .wrong-answer {
            color: red;
            font-weight: bold;
        }
        a.back-to-dashboard {
        display: inline-block;
        margin-top: 20px; /* Adjust the margin as needed */
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        margin-left: 20px;
    }

    a.back-to-dashboard:hover {
        background-color: #0056b3;
    }
       

    </style>
</head>
<body>
    <h1>Quiz Questions</h1>


    <form action="{{ route('quiz.submit') }}" method="post">
        @csrf
        @foreach ($questions as $key => $question)
            <div class="question">
                <p>
                    {{ $question['text'] }}
                </p>
                <div class="answers">
                    <label>
                        <span class="choices">A</span> {{ $question['A'] }}
                        <input type="checkbox" name="answers[{{ $key }}][]" value="A">
                       
                    </label>
                    <label>
                        <span class="choices">B</span> {{ $question['B'] }}
                        <input type="checkbox" name="answers[{{ $key }}]" value="B">
                        
                    </label>
                    <label>
                        <span class="choices">C</span> {{ $question['C'] }}
                        <input type="checkbox" name="answers[{{ $key }}]" value="C">
                        
                    </label>
                    <label>
                    <span class="choices">D</span> {{ $question['D'] }}
                        <input type="checkbox" name="answers[{{ $key }}]" value="D">
                        
                    </label>
                </div>
                @if(isset($results[$key]) && $results[$key]['correct'])
                    <p class="correct-answer">Correct</p>
                @elseif(isset($results[$key]) && !$results[$key]['correct'])
                    <p class="wrong-answer">Wrong. Correct Answer: {{ $question['Answer'] }}</p>
                @endif
            </div>
        @endforeach

        
    <button type="submit">Finish</button> 
    <a href="{{ route('dashboard.view') }}" class="back-to-dashboard">Back to Dashboard</a>


    </form>
    
</body>
</html>
