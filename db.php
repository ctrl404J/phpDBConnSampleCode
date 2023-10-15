<?php
//phpinfo();  //PDO익스텐션 설치여부 확인할 때
//exit;
// 데이터베이스 연결 설정
$host = "localhost"; // 데이터베이스 호스트
//$dbname = "test"; // 데이터베이스 이름
$username = "root"; // 데이터베이스 사용자 이름
$password = "abcd1234"; // 데이터베이스 비밀번호

//$conn = new mysqli($host, $username, $password); //객체지향 방식
//$conn = mysqli_connect($host, $username, $password); //절차지향 방식
//$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //PDO방식
// 하방의 try안에 위에 두가지중 대체해서 사용해도 된다.

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //PDO방식

    // PDO 예외를 활성화하여 오류 메시지를 표시합니다.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 연결이 성공했을 때 여기에 데이터베이스 작업을 수행할 수 있습니다.
} catch (PDOException $e) {
    die("데이터베이스 연결 실패: " . $e->getMessage());
}

// 연결 종료 (필요한 경우)
// $pdo = null;

// SELECT 쿼리 실행 예제
// $query = "SELECT * FROM phpmyadmin";
// $result = $mysqli->query($query);

// if ($result) {
//     while ($row = $result->fetch_assoc()) {
//         // 데이터를 사용하거나 출력
//         echo "ID: " . $row['id'] . " - 이름: " . $row['name'] . "<br>";
//     }
//     // 결과 세트 해제
//     $result->free();
// } else {
//     // 쿼리 실행 실패
//     echo "쿼리 실행 오류: " . $mysqli->error;
// }

// 연결 종료 (이전 코드 참조)
?>