<?php
session_start();

include 'inc/database.php';

$sqlI = "SELECT * FROM projects";
$i = connectWithDatabase($sqlI);

?>

<html>
<head>
    <title>Jquery memory</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/stylesheet.css">

</head>
<body>


<div class="jumbotron">
    <h1 class="display-4">WorkBreakDownStructure</h1>
    <hr class="my-4">
</div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($i as $Iitem) {
//            die();
            $sqlO = "SELECT SUM(Time), SUM(actualTime) FROM tasks WHERE projectID = " . $Iitem['id'];
            $o = connectWithDatabase($sqlO)[0];
            ?>
            <div class="card col-4 mb-4 " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $Iitem['Title'] ?></h5>
                    <p class="card-text"><?php echo $Iitem['Description'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Estimated time (min): <?php echo $o["SUM(Time)"] ?></li>
                    <li class="list-group-item">Actual time (min): <?php echo $o["SUM(actualTime)"] ?></li>
                </ul>
                <div class="card-body">
                    <a class="btn btn-info" href="taskPage.php?projectId=<?php echo $Iitem['id'] ?>">View Project <i
                                class="fas fa-folder-open"></i></a>
                    <a class="btn btn-danger" onclick="return deleteItem()"
                       href="deleteProject.php?projectId=<?php echo $Iitem['id'] ?>">Delete <i
                                class="fas fa-minus-circle"></i></a>
                </div>
            </div>
            <?php
        } ?>

        <div class="card col-4 mb-4" style="width: 4rem; ;">
            <div class="card-body">
                <h5 class="card-title">Add project</h5>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProjects">Create
                    projects
                </button>

            </div>
        </div>
    </div>
    <div class="modal fade" id="createProjects" tabindex="-1" role="dialog" aria-labelledby="createProjects"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="createProject.php">
                        <div class="form-group">
                            <label>Project Name</label>
                            <input name="ProjectName" type="text" class="form-control" placeholder="Project Name">
                            <small id="emailHelp" class="form-text text-muted">Enter a clear name for the project
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="Description" type="text" class="form-control" placeholder="Description">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="JS/app/jquery.js"></script>
<script src="JS/app/timer.jquery.min.js"></script>
<script src="JS/main.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"
        integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>

</body>
</html>


<!-- out commented -->

<!-- 
		<div id="button"></div>
		<div id="main-container">HELLO WORLD</div>

		<form>
			<input type="text" id="input-name">
			<input type="button" id="input-button" value="submit">
		</form> -->
<!-- <img src="img/xmen.jpg" alt="" id="photo">
 -->

<?php
    include("inc/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Character set   -->
	<meta charset="utf-8">

    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

	<title>WBSMonitor</title>
</head>
<body>
    <div class="main-container">
        <h1>Projects</h1>
    <h2>Latest Projects</h2>
    <div class="tablecontainer1">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Project Name</th>
                    <th>Estimated Time (minutes)</th>
                    <th>Actual Time (minutes)</th>
                    <th>View</th>
                    <th>Add Task</th>
                    <th>Delete Project</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $getProjects = "SELECT * FROM `wbsprojects`";
                    $result = mysqli_query($con, $getProjects);
                    while($row = mysqli_fetch_assoc($result))
                    {   
                ?>

                <tr>
                    <td>
                        <a><?php echo $row['ProjectID']; ?></a>
                    </td>
                    <td>
                        <a><?php echo $row['ProjectName']; ?></a>
                    </td>
                    <td>
                        <a><?php echo $row['ProjectTime']; ?></a>
                    </td>
                    <td>
                        <a></a>
                    </td>
                    <td>
                        <button class="bluebutton">View Project</button>
                    </td>
                    <td>
                        <button class="greenbutton">Add Task</button>
                    </td>
                    <td>
                        <button class="redbutton">Delete</button>
                    </td>
                </tr>

                <?php }  ?>
            </tbody>
        </table> 
        <button class="greenbutton">add a project button</button>   
        </div>
    </div>

	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Custom js  -->
    <script src="js/main.js"></script>
</body>

    