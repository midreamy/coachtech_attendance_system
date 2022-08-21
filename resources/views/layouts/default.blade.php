<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <style>
    body {
      font-family: "sans-serif";
      color: #1a202c;
      height: 100%;
    }

    header {
      width: 100%;
      height: 4rem;
      background-color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    h1 {
      font-size: 1.875rem;
      margin-left: 2em;
      font-weight: bold;
    }

    nav {
      font-size: 0.875rem;
      margin-right: 2em;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      margin-left: 3em;
    }

    nav ul li a {
      text-decoration: none;
    }

    nav ul li button {
      cursor: pointer;
      border: none;
      background: none;
      color: #0033cc;
      text-align: left;
    }

    nav ul li button:hover {
      text-decoration: underline;
      color: #002080;
    }

    .content {
      width: 100%;
      background-color: #f7fafc;
      padding: 2em;
    }

    .content__message {
      display: flex;
      justify-content: center;
    }

    .content__message p {
      font-weight: bold;
      font-size: 1.25rem;
    }

    .content__stamps {
      margin: auto;
      width: 70%;
      height: 30rem;
    }

    td {
      text-align: center;
      vertical-align: middle;
    }

    .content__stamp button {
      width: 80%;
      height: 12rem;
      background-color: white;
      border: none;
    }


    footer {
      height: 2rem;
      display: flex;
      justify-content: center;
      background-color: white;
    }

    footer p {
      font-size: 0.75rem;
    }
  </style>
</head>

<body>
  @yield('content')
</body>

</html>