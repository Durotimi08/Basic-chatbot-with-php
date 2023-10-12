<?php 
    session_start();
    include_once "config.php";
    $input = mysqli_real_escape_string($conn, $_POST['input']);
    $in = explode(" ", $input);
    $sq = mysqli_query($conn, 'SELECT * FROM users order by user_id');
    $size = mysqli_num_rows($sq);
    $item = array();
    for($i = 0; $i < sizeof($in); $i++) {
       $inp = $in[$i];
       for($x = 0; $x < $size; $x++){
            $sd = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '{$x}'");
            if(mysqli_num_rows($sd) > 0){
            $sty = mysqli_fetch_assoc($sd);
            $rty = $sty['username'];
            $sky = explode(" ", $rty);
            $sfy = sizeof($sky);
            for($y = 0; $y < $sfy; $y++) {
                $inptt = $sky[$y];
                if($inp === $inptt){
                   $item[] = $sty['user_id'];
                }
            }
        }else{
        }
       }
    }
    $arr_freq = array_count_values($item);
    arsort($arr_freq);
    $new_arr = array_keys($arr_freq);
         if(sizeof($item) > 0){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '{$new_arr[0]}'");
            $row = mysqli_fetch_assoc($sql);
            $output = $row['email'];
            echo "$output";
         }else{
            echo "Oops! i cant reply that.";
         }
  ?>