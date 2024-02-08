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
            cursor: pointer;
            text-decoration: underline;
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

        /* Modal Styles */
        #blogPostModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 20px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Your Blog Title</h1>
    </header>
    <main>
    
    <img src="{{ asset('blog_images/'.$about->image) }}" alt="Blog Image">
            <h2>Title : {{ $about->title }}</h2>
            <p>Author : {{ $about->author }}</p>
            <p>Content : {{ $about->content }}</p>
            <p>Date : {{ $about->publication_date }}</p>
        </div>


    </main>


</body>
</html>
