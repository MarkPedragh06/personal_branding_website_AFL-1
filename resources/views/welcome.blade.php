<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1.25rem;
            margin: 0;
            padding: 2rem;
            background: radial-gradient(circle at top, #e8f0e8, #faf8f3 45rem);
            color: #28332d;
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            text-align: center;
        }

        h1 {
            max-width: 20ch;
            margin: 0;
            font-size: clamp(2.5rem, 7vw, 4.5rem);
            letter-spacing: -0.05em;
            line-height: 1.05;
        }

        p {
            max-width: 34rem;
            margin: 0;
            color: #667269;
            font-size: 1.125rem;
            line-height: 1.75;
        }

        .btn {
            display: inline-flex;
            min-height: 3rem;
            align-items: center;
            justify-content: center;
            margin-top: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            background: #234236;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 150ms ease, transform 150ms ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            background: #355b4c;
        }

        .btn:focus-visible {
            outline: 3px solid #a96545;
            outline-offset: 4px;
        }

        @media (prefers-reduced-motion: reduce) {
            .btn {
                transition: none;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome To My Website</h1>
    <p>This is the welcome page of my personal branding website.</p>
    
    <a href="{{ route('home') }}" class="btn">Continue</a>
</body>
</html>