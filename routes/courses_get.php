<?php
    if(isset($_GET["cid"]) && isset($_GET['cname'])){
        enrollCourse($_GET["cid"], $_GET['cname']);
    }

    $result = getCourses();
    renderView('courses_get',['courses' => $result]);