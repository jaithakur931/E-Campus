<?php
include('../assets/includes/config.php');
if(isset($_POST['type'])&&$_POST['type'] == 'student' && isset($_POST['email']) && !empty($_POST['email']))
{   
    $name = isset($_POST['name'])?$_POST['name']:'';
    $dob = isset($_POST['dob'])?$_POST['dob']:'';
    $mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
    $email = isset($_POST['email'])?$_POST['email']:'';
    $address = isset($_POST['address'])?$_POST['address']:'';
    $country = isset($_POST['country'])?$_POST['country']:'';
    $state = isset($_POST['state'])?$_POST['state']:'';
    $zip = isset($_POST['zip'])?$_POST['zip']:'';
    $password = date('dmY',strtotime($dob));
    $md_password = md5($password);

    $father_name = isset($_POST['father_name'])?$_POST['father_name']:'';
    $father_mobile = isset($_POST['father_mobile'])?$_POST['father_mobile']:'';
    $mother_name = isset($_POST['mother_name'])?$_POST['mother_name']:'';
    $mother_mobile = isset($_POST['mother_mobile'])?$_POST['mother_mobile']:'';
    $parents_address = isset($_POST['parents_address'])?$_POST['parents_address']:'';
    $parents_country = isset($_POST['parents_country'])?$_POST['parents_country']:'';
    $parents_state = isset($_POST['parents_state'])?$_POST['parents_state']:'';
    $parents_zip = isset($_POST['parents_zip'])?$_POST['parents_zip']:'';

    $school_name = isset($_POST['school_name'])?$_POST['school_name']:'';
    $previous_class = isset($_POST['previous_class'])?$_POST['previous_class']:'';
    $status = isset($_POST['status'])?$_POST['status']:'';
    $total_marks = isset($_POST['total_marks'])?$_POST['total_marks']:'';
    $obtain_marks = isset($_POST['obtain_marks'])?$_POST['obtain_marks']:'';
    $previous_percentage = isset($_POST['previous_percentage'])?$_POST['previous_percentage']:'';

    $class = isset($_POST['class'])?$_POST['class']:'';
    $section = isset($_POST['section'])?$_POST['section']:'';
    $subject_stream = isset($_POST['subject_stream'])?$_POST['subject_stream']:'';
    $doa = isset($_POST['doa'])?$_POST['doa']:'';
    $type = isset($_POST['type'])?$_POST['type']:'';
    $date_add = date('Y-m-d');

    $check_query = mysqli_query($db_conn, "SELECT * FROM useraccounts WHERE email ='$email' ");
    if(mysqli_num_rows($check_query) > 0){
        // $error = 'Email already exists';
        echo 'Email already exists';die;
    }
    else
    {
    $query = mysqli_query($db_conn, "INSERT INTO useraccounts (`name`,`email`,`password`,`type`) VALUE ('$name','$email','$md_password','$type')") or die(mysqli_error($db_conn));
    if($query)
    {
        $user_id = mysqli_insert_id($db_conn);
    }

    }

    $usermeta = array{
        'dob' => $dob,
        'mobile'=>$mobile;
    };

    foreach ($usermeta as $key => $value) {
        mysqli_query($db_conn, "INSERT INTO usermeta (`user_id`,`meta_key`,`meta_value`) VALUE ('$user_id','$key','$value')") or die(mysqli_error($db_conn));
    }
    echo json_encode($_POST);die;
}
?>
