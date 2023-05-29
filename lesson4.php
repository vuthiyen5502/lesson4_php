<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkEven($number) {
    if ($number % 2 == 0) {
        return "Số " . $number . " là số chẵn";
    } else {
        return "Số " . $number . " là số lẻ";
    }
}
$number = 7;
echo checkEven($number);
echo "<br>";
//Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
function calculateAverage($midtermScore, $finalScore) {
     $averageScore = ($midtermScore * 0.3) + ($finalScore * 0.7);
    return $averageScore;
}
$midtermScore = 6; //Điểm giữa kỳ
$finalScore = 7; //Điểm cuối kỳ
 $averageScore = calculateAverage($midtermScore, $finalScore);
if ($averageScore >= 9.0) {
    echo "Hạng: Xuất sắc";
} else if ($averageScore >= 7.0) {
    echo  "Hạng: Giỏi";
} else if ($averageScore >= 5.0) {
    echo "Hạng: Khá";
} else {
    echo "Hạng: Trung bình - Yếu";
}
echo "<br>";
//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYear($year) {
    if ($year % 2 == 0) {
        echo "Năm $year là năm chẵn";
    } else {
        echo "Năm $year là năm lẻ";
    }
}
$year = date('Y'); //năm hiện tai
echo checkYear($year);
echo "<br>";
//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumbers() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . " ";
    }
}
echo printNumbers();
echo "<br>";
//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
function printNumberWithStyle($number) {
    if ($number % 2 == 0) {
        echo "<strong>" . $number . "</strong> ";
    } else {
        echo $number . " ";
    }
}
for ($i = 1; $i <= 100; $i++) {
   echo printNumberWithStyle($i);
}
echo "<br>";
//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function printYears($years) {
    foreach ($years as $year) {
        echo $year . " ";
    }
}
$year = array(1990, 1991, 1992, 1993, 1994, 1995);
echo printYears($year);

