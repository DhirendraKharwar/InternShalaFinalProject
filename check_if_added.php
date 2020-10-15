<?php 
    require("common.php");
    
    
    function check_if_added_to_cart($item_id)
    {
        global $con;
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id'";
    $query_result = mysqli_query($con, $query);
    echo $query_result;
    $num = mysqli_num_rows($query_result);
    if($num>=1){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
?>
