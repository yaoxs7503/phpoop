<div class="container-fluid">
<?php 
require("init.php");
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            管理页面
                            <small>主页面</small>
                        </h1>
<?php
// if($database->connection){
//     echo "连接成功";
// }
// $sql="SELECT * FROM users WHERE id=1";
// $result=$database->query($sql);

// $user=new User();
// $result=User::find_all_users();
// while($row=mysqli_fetch_array($result)){
// echo $row['username'];
// }
// $database->confirm_query($user_found);

// $found_user=User::find_user_by_id($database->escape_string(1));
// var_dump($found_user);
// $user->username;
// echo $found_user['username'];
// $user=User::instantiation($found_user);


// echo $user->username;
// $result_set=User::find_all_users();
// while($row=mysqli_fetch_array($result_set)){
    // echo $row['username'] ."<br/>";
// }
// echo "<br>";

// $users=User::find_all_users();
// foreach ($users as $user) {
//     echo $user->id;
// }

$found_user=User::find_user_by_id(35);
// $picture=new Picture();
// echo $found_user->username;
?>




                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
