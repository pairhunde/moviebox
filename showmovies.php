<?php 
session_start();
include "db.php";

$Username = $_SESSION["id"];
$ticket = 'ticket';

$sql = "SELECT * FROM movieusers WHERE email = '$Username'";
$run_query = mysqli_query($con,$sql);
$count = mysqli_num_rows($run_query);
if($count){

  if(isset($_POST["t_table"])){
        $sql2 = "SELECT * FROM movies WHERE ticket = '$ticket'";
        $run_query2 = mysqli_query($con,$sql2);
        $count = mysqli_num_rows($run_query2);
        if($count){
            while($row = mysqli_fetch_array($run_query2)){
                $movien = $row['movie_name'];
                $movied = $row['movie_des'];
                $moviet = $row['movie_time'];
                $moviei = $row['movie_img'];
                $movies = $row['movie_size'];
                $moviel = $row['movie_locate'];

                echo "
                <div class='resent-grid-img recommended-grid-img'>
                                <img src='$moviei' alt='' />
                                <div class='time small-time show-time movie-time'>
                                    <p>9:34</p>
                                </div>
                                <div class='clck movie-clock'>
                                    <span class='glyphicon glyphicon-time' aria-hidden='true'></span>
                                </div>
                            </div>
                            <div class=.resent-grid-info recommended-grid-info recommended-grid-movie-info'>
                                <h2>$movien</h2>
                                <h5>$movied</h5>
                                <ul>
                                    <li>
                                        <p class='author author-info'><a href='$moviel'>Download Now</a></p>
                                    </li>
                                    <li class='right-list'>
                                        <p class='views views-info'>$moviet</p>
                                    </li>
                                </ul>
                            </div>
                ";

            
            }  
        }
      }
    }

?>