<?php 

session_start();
include "db.php";

if (isset($_POST["submit"])) {

    function check_input($dt)
    {
        $data = trim($dt);
        $data = stripslashes($dt);
        $data = htmlspecialchars($dt);
        return $data;
    }

    $user_login = check_input($_POST['user_login']);
    $password = check_input($_POST['password']);
    $errors = array();
    $response = array();

    if (empty($_POST['user_login']) || empty($_POST['password'])) {

        if (empty($_POST['user_login'])) {
            $errors["username"] = "* needed";
        }

        if (empty($_POST['password'])) {
            $errors["password"] = "* needed";
        }

        $response["errors"] = $errors;

        $response["success"] = false;
        echo json_encode($response);
    }
    if (!empty($_POST['user_login']) && !empty($_POST['password'])) {

        $sql1 = "SELECT * FROM users WHERE email = '$user_login'";
        $query1 = mysqli_query($con, $sql1);
        if (mysqli_num_rows($query1) > 0) {
            while ($row = mysqli_fetch_array($query1)) {
                $username = $row["email"];
                $pass_word = $row["pass_word"];
                    $_SESSION['uid'] = $username;
                    $response["success"] = true;
                
            }
        } elseif (mysqli_num_rows($query1) < 1) {

            $response["email"] = "* Doesnt exists";
            $response["invaliduser"] = true;
        }

        echo json_encode($response);
    }
}






if(isset($_POST["category"])){
	$category_query = "SELECT * FROM movies";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["id"];
            $cat_name = $row["movie_name"];
            $cat_file = $row["movie_file"];
            $cat_image = $row["movie_image"];
            $cat_size = $row["size"];
            $cat_desc = $row["description"];
            $cat_time = $row["time"];

            echo "
            


            <div class='col-md-3 resent-grid recommended-grid movie-video-grid'>
            <div class='resent-grid-img recommended-grid-img'>
                <a href='single.html'><img src='$cat_image'alt='' /></a>
                <div class='time small-time show-time movie-time'>
                    <p>$cat_time</p>
                </div>
                <div class='clck movie-clock'>
                    <span class='glyphicon glyphicon-time' aria-hidden='true'></span>
                </div>
            </div>
            <div class='resent-grid-info recommended-grid-info recommended-grid-movie-info'>
                <h5><a href='single.html' class='title'>$cat_name</a></h5>
                <h5><a href='single.html' class='title'>$cat_desc</a></h5>
                <br>
                <ul>
                    <li>
                        <p class='author-info'><a href='$cat_file' class='author'>Download Now !</a></p>
                    </li>
                    <li class='right-list'>
                        <p class='views views-info'>$cat_size</p>
                    </li>
                </ul>
            </div>
        </div>

           
            ";
		}
	}
}










?>