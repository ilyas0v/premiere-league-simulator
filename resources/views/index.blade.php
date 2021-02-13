<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>TEAMS</h2>    
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Team name</th>
                <th>PTS</th>
                <th>P</th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>GD</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->points }}</td>
                    <td>{{ $team->played }}</td>
                    <td>{{ $team->wins }}</td>
                    <td>{{ $team->draw }}</td>
                    <td>{{ $team->loses }}</td>
                    <td>{{ $team->goal_drawn }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    </body>
</html>