<?php

    if(isset($_GET["cid"])){
        withdrawnCourse($_GET['cid']);
    }
    $result = getStudentById();
    $enrollment = getStudentEnrollmentByStudentId();
    renderView('profile_get',['data' => $result, 'enrollments' => $enrollment]);