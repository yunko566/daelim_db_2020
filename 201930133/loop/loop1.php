<?php
$i = 0;
for ($j = 1, $k = "a"; $i < 5; $i++, $j++) 
{ // 초기값 생략

    // 숫자의 표시를 $j로 사용하지만,
    // 실제 반복은 $i 로 동작한다. (조건값 이용)
    echo $k++;
    echo $j . " ";
    echo "hello" . "<br>";
}

// echo "안녕하세요"."<br>";
// echo "안녕하세요"."<br>";
// echo "안녕하세요"."<br>";
// echo "안녕하세요"."<br>";