<?php

function getCourses(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'select * from courses order by course_id';
    $result = $conn->query($sql);
    return $result;
}
