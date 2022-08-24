<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <style>
    /* 要素サイズ確認用 */
    /* * {
      outline: 1px solid magenta;
    } */

    html,body {
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
      height: 13%;
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

    /* login */
    .content__title{
      margin: 20px auto;
      display: flex;
      justify-content: center;
    }

    .content__title p{
      font-size: 20px;
      font-weight: bold;
    }

    .content__input{
      width: 30%;
      margin: 0 auto;
      display: flex;
      justify-content: center;
    }

    .content__input input{
      display: block;
      margin-top: 1rem;
      width: 100%;
      border-radius: 0.375rem;
      line-height: 1.5em;
      border: 1px solid #e2e8f0;;
      
    }

    .content__input button{
      margin-top: 1rem;
      width: 100%;
      background-color: #4299e1;
      color: white;
      border-radius: 0.375rem;
    }

    /* for index.blade.php */
    .content__message {
      width: 100%;
      height: 20%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content__message p {
      font-weight: bold;
      font-size: 1.25rem;
    }

    .content__stamps {
      display: flex;
      justify-content: center;
      width: 100%;
      height: 80%;
    }

    .content__stamps table{
      height: 70%;
      width: 70%;
    }

    .content__stamps td{
      text-align: center;
      height: 50%;
    }

    .content__stamp form{
      height: 100%;
    }

    .content__stamp button {
      width: 80%;
      height: 8rem;
      background-color: white;
      border: none;
      border-radius: 10px;
    }

    /* for attendance.blade.php */
    .content__date {
      padding: 1em 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content__date p {
      margin-right: 1em;
      margin-left: 1em;
      font-weight: bold;
      font-size: 20px;
    }

    .content__date a {
      color: blue;
      text-decoration: none;
      padding: 0 5px;
      border: 1px solid blue;
    }

    /* .content__data {
      width: 100%;
      height: 70%;
      display: flex;
      justify-content: center;
    } */

    .content__data table{
      margin: 30px auto;
      width: 80%;
      border-collapse: collapse;
    }

    .content__data tr {
      border-top: 1px gray solid;

    }

    .content__data th,
    td {
      text-align: left;
      vertical-align: middle;
      padding: 0 1.5rem;
      height: 3em;
    }

    /* paginateメソッドの矢印の大きさ調整のために追加 */
    svg.w-5.h-5 {
      width: 30px;
      height: 30px;
    }

    .content__pagination {
      width: 100%;
      height: 10%;
      margin-top: 30px;
      display: flex;
      justify-content: center;
      align-items: flex-end;
    }

    /* footer */
    footer {
      height: 7%;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
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