<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <div class="quiz-container">
        <h1 class="quiz-title">Quiz Time!</h1>
        <p>Category ID: {{ $categoryId }}</p>
        <p>Get ready for the {{ $categories[$categoryId - 1]['name'] ?? 'Unknown' }} quiz!</p>
        <!-- Placeholder for quiz content -->
        <div class="quiz-content">
            <p>Questions will go here soon...</p>
        </div>
    </div>

    @livewireScripts

    <style>
        .quiz-container {
            text-align: center;
            padding: 40px;
        }
        .quiz-title {
            font-family: 'Comic Sans MS', cursive;
            font-size: 48px;
            color: #e6ccff;
            text-shadow: 3px 3px #000;
        }
        .quiz-content {
            margin-top: 20px;
            font-size: 20px;
            color: #ffd700;
        }
    </style>
</body>
</html>