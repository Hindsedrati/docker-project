<!doctype html>
<html lang="fr" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>TODO LIST</title>
</head>
<body class="max-w-[1200px] mx-auto flex items-center justify-center h-screen">

<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th></th>
            <th>title</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <th>{{$task->id}}</th>
                <td>{{$task->title}}</td>
                <td>
                    @if($task->done)
                        <div class="badge badge-success gap-2">
                            Fait
                        </div>
                    @else
                        <div class="badge badge-error gap-2">
                            Pas fait
                        </div>
                    @endif
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
