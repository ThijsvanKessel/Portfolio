<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/" type="image/x-icon">
    <title>WBS</title>
</head>
<body>
    <header id="main-header">
        <h2>WBS Monitor</h2>
    </header>
    <datalist id="MoSCoW">
        <option value="Must">
        <option value="Should">
        <option value="Could">
    </datalist>
    <div class="tablecontainer2">
        <table class="table2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Predecessor</th>
                    <th>Task Owner</th>
                    <th>MoSCoW</th>
                    <th>Plan (min)</th>
                    <th>Do (min)</th>
                    <th>Check</th>
                    <th>Act</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" placeholder="Task Name"></td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><input type="text" placeholder="Task Owner"></td>
                    <td><input list="MoSCoW" name="MoSCoW" placeholder="Must"></td>
                    <td><input type="number" placeholder="0"></td>
                    <td><input type="time" placeholder="00:00"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><button class="greenbutton">Start</button></td>
                    <td><button class="orangebutton">Delete Task</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" placeholder="Task Name"></td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><input type="text" placeholder="Task Owner"></td>
                    <td><input list="MoSCoW" name="MoSCoW" placeholder="Must"></td>
                    <td><input type="number" placeholder="0"></td>
                    <td><input type="time" placeholder="00:00"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><button class="greenbutton">Start</button></td>
                    <td><button class="orangebutton">Delete Task</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" placeholder="Task Name"></td>
                    <td><input type="number" min="0" placeholder="0"></td>
                    <td><input type="text" placeholder="Task Owner"></td>
                    <td><input list="MoSCoW" name="MoSCoW" placeholder="Must"></td>
                    <td><input type="number" placeholder="0"></td>
                    <td><input type="time" placeholder="00:00"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><button class="greenbutton">Start</button></td>
                    <td><button class="orangebutton">Delete Task</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="greenbutton">Save Project</button>
    <button class="bluebutton">Add Task</button>