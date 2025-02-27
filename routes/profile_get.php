<?php

    if(isset($_GET["cid"]) && isset($_GET["cname"])){
        withdrawnCourse($_GET['cid'], $_GET["cname"]);
    }
    $result = getStudentById();
    $enrollment = getStudentEnrollmentByStudentId();
    renderView('profile_get',['data' => $result, 'enrollments' => $enrollment]);