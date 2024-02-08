<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Blog Title</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        article {
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>Your Blog Title</h1>
    </header>
    @if($blogs->count() > 0)
    <main>
        <article>
           
    @foreach($blogs as $post)
        <div>
        <img src="{{ asset('blog_images/'.$post->image) }}" alt="Blog Image">
            <h2>Title : {{ $post->title }}</h2>
            <p>Author : {{ $post->author }}</p>
            <p>Content : {{ $post->content }}</p>
            <p>Date : {{ $post->publication_date }}</p>
            <a href="{{ route('about.blog', $post->id) }}" class="btn btn-primary">
                                                About of blog
                                                </a><br>
        </div>
    @endforeach
        </article>
    </main>

    @else
    <p>No blog found.</p>
    @endif

    <footer>
        &copy; 2024 Your Blog Name. All rights reserved.
    </footer>

    

</body>
</html>