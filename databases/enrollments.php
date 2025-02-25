<?php

function getStudentEnrollmentByStudentId(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'SELECT
    c.course_id,
    c.course_name,
    c.course_code,
    c.instructor,
    e.enrollment_id,
    e.enrollment_date,
    s.student_id
    FROM
    enrollment.courses c
    INNER JOIN enrollment.enrollment e ON
    c.course_id = e.course_id
    INNER JOIN enrollment.students s ON
    e.student_id = s.student_id where s.student_id = ?
    order by c.course_id';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_SESSION['student_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}


function withdrawnCourse($course_id)
{
    $conn = getConnection();
    $sql = 'DELETE FROM enrollment
            WHERE   student_id =    ?
            AND     course_id  = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $_SESSION['student_id'], $course_id);
    $stmt->execute();
}

function enrollCourse($course_id)
{
    $conn = getConnection();
    $sql = 'SELECT  count(course_id) as count
            from    enrollment
            where   student_id  = ?
            AND     course_id   = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $_SESSION['student_id'], $course_id);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row['count'] <= 0) {
        $sql = 'INSERT INTO enrollment(student_id, course_id, enrollment_date)
                VALUES  (?, ?, ?)';
        $nowDate = date('Y-m-d');
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iis', $_SESSION['student_id'], $course_id, $nowDate);
        $stmt->execute(); 
        $_SESSION['success'] = 'ลงทะเบียนสำเร็จ';
    }else{
        $_SESSION['error'] = 'ไม่สามารถลงทะเบียนได้';
    }
}

function isEnrolled($cid)
{
    $conn = getConnection();
    $sql = 'SELECT  count(course_id) as count
            from    enrollment
            where   student_id  = ?
            AND     course_id   = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ii', $_SESSION['student_id'], $cid);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}