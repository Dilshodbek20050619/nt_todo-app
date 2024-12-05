<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {

            background-image: url("https://images.ctfassets.net/lzny33ho1g45/best-android-to-do-list-apps-p-img/7497b11477c27e9134b97a5d72e319ac/best-android-to-do.jpg?w=1520&fm=jpg&q=31&fit=thumb&h=760");

        }

        .todo-body h1, p {
            color: #ffffff;
        }

        .todo-body {
            background-color: gray;
            max-width: 700px;
            box-shadow: 0 0 3px 3px snow;
            border-radius: 2px;
        }

        .todo-text {
            font-weight: bold;
        }

        .completed {
            text-decoration: line-through;
            color: green;
        }

        .in_progress {
            text-decoration: underline;
            color: orange;
        }

        .edit-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-actions {
            display: flex;
            justify-content: space-between;
        }
        .enter {
            border: 1px solid black;
            text-decoration:none;
            width: 200px;
            height: 100px;


        }
        .link {
            margin-top: 285px;
            margin-left: 300px;
            justify-content: center;
            width: 700px;
            height: 200px;
            border: 1px black;
            border-radius: 10px;
            background-color: gray;
        }
        .button {
            margin-top: 70px;
            background-color: darkslateblue;
            border-radius: 10px;
            width: 200px;
            height: 50px;
            color: white;
            box-shadow: 0 0 5px 5px black;


        }
        .button:hover{
            color: brown;
            background-color: aqua;
        }
        .h1 {
            margin-top: 10px;
            margin-left: 40px;
            width: 600px;
            background-color: darkslateblue;
            border-radius: 10px;
            box-shadow: 0 0 5px 5px black;
        }
        .h1 h1{
            color: white;
        }
    </style>
</head>
<body>