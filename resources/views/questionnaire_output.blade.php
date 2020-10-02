<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .marginBottom {
            margin-bottom: 1em;
        }

        .invalid-feedback {
            color: red;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="container">
        <h1>Questionnaire: {{ $questionnaire->name }}</h1>
        <form action="{{ route('questionnaire.submit', compact('questionnaire')) }}" method="post">
            @csrf
            @foreach($questionnaire->hasQuestions as $question)
                <div class="marginBottom">
                    <label for="question-{{ $loop->index }}">{{ $loop->index + 1 }}) {{ $question->question }}</label>
                    <input type="text" name="form[{{ $question->id }}]" value="{{ old('form')[$question->id] ?? null }}"
                           id="question-{{ $loop->index }}"/>
                    <div class="invalid-feedback">
                        @error('form.' . $question->id)
                        {{ 'This field is required.' }}
                        @enderror
                    </div>
                </div>
            @endforeach
            <button>Submit!</button>
        </form>
    </div>
</div>
</body>
</html>
