
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
$N = rand(-100, 100);
echo "So duoc chon la: $N</p>";
// Hàm kiểm tra số nguyên tố
function SoNguyenTo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// Hàm kiểm tra số chính phương
function SoChinhPhuong($num) {
    if ($num < 0) return false;
    $sqrt = sqrt($num);
    return ($sqrt == floor($sqrt));
}
?>
    <h2>Số ngẫu nhiên N = <?php echo $N; ?></h2>

    <?php if ($N > 0): ?>
        <p><strong>N là số dương. Kết quả xử lý:</strong></p>
        
        <p><strong>1/Các ước số của <?php echo $N; ?>:</strong> 
            <?php
            $uoc = [];
            for ($i = 1; $i <= $N; $i++) {
                if ($N % $i == 0) {
                    $uoc[] = $i;
                }
            }
            echo implode(", ", $uoc);
            ?>
        </p>

        <p><strong>2/Kiểm tra số nguyên tố:</strong> 
            <?php echo SoNguyenTo($N) ? "$N là số nguyên tố." : "$N KHÔNG phải là số nguyên tố."; ?>
        </p>

        <p><strong>3/Tổng các số nguyên tố nhỏ hơn <?php echo $N; ?>:</strong> 
            <?php
            $sumSNT = 0;
            $SNTList = [];
            for ($i = 2; $i < $N; $i++) {
                if (SoNguyenTo($i)) {
                    $sumSNT += $i;
                    $SNTList[] = $i;
                }
            }
            if (count($SNTList) > 0) {
                echo implode(" + ", $SNTList) . " = <strong>$sumSNT</strong>";
            } else {
                echo "Không có số nguyên tố nào nhỏ hơn $N (Tổng = 0).";
            }
            ?>
        </p>

        <p><strong>4/Kiểm tra số chính phương:</strong> 
            <?php echo SoChinhPhuong($N) ? "$N là số chính phương." : "$N KHÔNG phải là số chính phương."; ?>
        </p>

    <?php else: ?>
        <p><strong>N = <?php echo $N; ?> không phải là số dương (N ≤ 0), không thực hiện tính toán.</strong></p>
    <?php endif; ?>
</body>
</html>