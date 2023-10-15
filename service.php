<?php 
include 'db.php'; //이걸로 jdbc클래스 로딩됨

$sql = "SELECT * FROM TEST";
$stmt = $conn->prepare($sql);
$stmt -> excute();
// FETCH_ASSOC 필드명 기준으로 가져옴, Default는 FETCH_BOTH
$rs = $stmt->fetchAll(PDO::FETCH_ASSOC); // 가져오는 데이터에를 보여지는 방식 설정가능. FETCH_NUM

echo "<table bolder='1'>";
foreach($rs as $list){
    echo "<tr>
        <td>".$list['firstname']."</td>
    </tr>";
}
echo "</table >";

//print_r($rs); 그냥 찍어보는 코드
?>