<?php
    if(isset($_GET["cid"])){
        enrollCourse($_GET["cid"]);
    }

    $result = getCourses();
    renderView('courses_get',['courses' => $result]);