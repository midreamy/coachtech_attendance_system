<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <style>
    /* 要素サイズ確認用
    * {
      outline: 1px solid magenta;
    } */

    body {
      font-family: "sans-serif";
      color: #1a202c;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      width: 100%;
      height: 100%;
    }

    /* header */
    header {
      width: 100%;
      height: 15%;
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

    /* content */
    .content {
      width: 100%;
      height: 80%;
      background-color: #f7fafc;
    }

    /* for index.blade.php */
    .content__message {
      margin: 0 auto;
      padding: 1.5rem;
      width: 50%;
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
      height: 60%;
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

    /* for attendance.blade.php */
    .content__date {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content__date p {
      margin: 0 1.5em;
      font-weight: bold;
    }

    .content__date a {
      color: blue;
      text-decoration: none;
      padding: 0 5px;
      border: 1px solid blue;
    }

    .content__data {
      width: 90%;
      height: 25rem;
      margin: 2rem auto;
      border-collapse: collapse;
      table-layout: fixed;
    }

    .content__data tr {
      border-top: 1px gray solid;
    }

    .content__data th,
    td {
      text-align: left;
      vertical-align: middle;
    }

    /* paginateメソッドの矢印の大きさ調整のために追加 */
    svg.w-5.h-5 {
      width: 30px;
      height: 30px;
    }

    /* footer */
    footer {
      height: 5%;
      width: 100%;
      display: flex;
      justify-content: center;
      position: absolute;
      /*←絶対位置*/
      bottom: 0;
      /*下に固定*/
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