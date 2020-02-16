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
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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

            .mt-md {

            }
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <table class="mt-md">
                    <thead>
                        <th>ID</th>
                        <th>number</th>
                        <th>year made</th>
                        <th>model</th>
                        <th>Segment</th>
                        <th>User</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach($carsInfo as $carInfo)
                        <tr>
                            <td>{{$carInfo->id}}</td>
                            <td>{{$carInfo->car->number}}</td>
                            <td>{{$carInfo->car->year_made}}</td>
                            <td>{{$carInfo->car->model}}</td>
                            <td>{{$carInfo->segment->name}}</td>
                            <td>{{$carInfo->user->name}}</td>
                            <td>{{$carInfo->status->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </body>
</html>
