<htmml>
    <body>
        <?php
        // Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
            function chiaHet($a){
                if($a%2==0){
                    echo "Số $a là Số Chẵn";
                }else{ echo "Số $a là Số lẻ"; }    
            }
            chiaHet(4);
            echo "<hr>";

        // Viết chương trình PHP để tính tổng của các số từ 1 đến n.
            function sum($a){
                $b = ($a+1)*$a;
                $c =  $b/2;
                echo "Tổng từ 1 đến $a là $c";
                return $c;
            }
            sum(10);
        // Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
            echo "<hr>";
            function printMultiplicationTable($n) {
                for ($i = 1; $i <= 10; $i++) {
                    $result = $n * $i;
                    echo "$n x $i = $result<br>";
                }
            }
            printMultiplicationTable(5);


        // Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
            echo "<hr>";
            function kiemTraChuoi($chuoi, $tuCanTim) {
                if (strpos($chuoi, $tuCanTim) != false) {
                    echo "Chuỗi chứa từ cần tìm.";
                } else {
                    echo "Chuỗi không chứa từ cần tìm.";
                }
            }

                $chuoi = "Xin chào, đây là một chuỗi";
                $tuCanTim = "chuỗi";
                kiemTraChuoi($chuoi, $tuCanTim);
                echo "<hr>";
        // Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
            function minmax($mang){
                $max = max ($mang);
                $min = min ($mang);
                echo " Max là " .$max . "<br>";
                echo " Min là " .$min . "<br>";
            }

            $mang = array (1,2,3,4,6,7,11,100,1500,0);
            minmax($mang);
            echo "<hr>";
        // Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
            function sapXepMang($mang){
                $k= sort($mang);
                echo "mang sau SX là: ";
                foreach($mang as $k){
                    echo $k. ", ";
                }
            }
            sapXepMang($mang);
        // Viết chương trình PHP để tính giai thừa của một số nguyên dương.
        // cách 1:
            echo "<hr>";
            function giaiThua1($a){
                $b = 1;
                if ($a == 0){
                    echo "$a! = $b ";
                    return $b;
                } else {
                    for($i = 1; $i <= $a; $i++){
                        $b = $b * $i;
                    } 
                    echo "$a! = $b";
                    return $b;
                }
            }
            giaiThua1(5);
        // cách 2: đệ quy , gọi lại funtion trong chính function đó
            echo "<hr>";
            function giaiThua($n) {
                if ($n > 0) {
                    return $n * giaiThua($n - 1);
                } else {
                    return 1;
                }
            }
            // Gọi hàm tính giai thừa và in kết quả
            $n = 5;
            $c = giaiThua($n);
            echo "$n! = $c";
          
        // Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
            echo "<hr>";
            function soNguyenTo($n) {
                if ($n < 2) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i === 0) {
                        return false;}
                }
                return true;}
            function timSoNT($a, $b) {
                $mangNT = [];
                if ($a < $b) {
                    for ($i = $a; $i <= $b; $i++) {
                        if (soNguyenTo($i)) {
                            $mangNT[] = $i;}
                    }
                } else if ($a > $b) {
                    for ($i = $b; $i <= $a; $i++) {
                        if (soNguyenTo($i)) {
                            $mangNT[] = $i;}
                    }
                }
                return $mangNT;
            }
            $a = 10;
            $b = 20;
            $soNT = timSoNT($a, $b);
            echo "Các số nguyên tố trong khoảng từ $a đến $b là: " . implode(", ", $soNT);
        // Viết chương trình PHP để tính tổng của các số trong một mảng.
            echo "<hr>";
            function tongMang($mang){
                $tong = 0;
                echo "Tổng mảng (";
                foreach ($mang as $i){
                    $tong += $i;
                    echo "$i, ";
                }
                echo " ) = $tong" ;
                return $tong;
            }
            tongMang($mang);
        // Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
            echo "<hr>";    
            function fibonacci($start, $end) {
                $sequence = [];
                $a = 0;
                $b = 1;
                while ($a <= $end) {
                    if ($a >= $start) {
                        $sequence[] = $a;
                    }
                    $temp = $a;
                    $a = $b;
                    $b = $temp + $b;
                }
                return $sequence;
            }
        
            $start = 10;
            $end = 100;
            $sequence = fibonacci($start, $end);
            echo "Các số Fibonacci trong khoảng từ $start đến $end là: " . implode(", ", $sequence);
        // Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
            echo "<hr>";
            function soAmstrong($a){
                $sum = 0;
                $i = $a;
                while($i !=0){
                    $du = $i % 10;
                    $sum += $du*$du*$du;
                    $i= (int)($i /= 10) ;
                }
                if ($sum == $a){
                    echo "$a là số Amstrong";
                } else {
                    echo "$a không là số Amstrong";
                }
            }

            soAmstrong(150);
        // Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
            echo "<hr>";
            function chenMang($mang, $viTri, $giaTri) {
                array_splice($mang, (int)$viTri, 0, $giaTri);
                foreach ($mang as $k) {
                    echo "$k ";
                }
            }
            chenMang($mang,4,10);
        // Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
            echo "<hr>";
            function loaiMang($mang) {
                $mangSauXoa = array_unique($mang);
                echo "Mảng sau khi loại bỏ là: ";
                foreach ($mangSauXoa as $i) {
                    echo "$i ";
                }
            }
            loaiMang($mang);
        // Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
            echo "<hr>";
            function  timViTri($mang, $giaTri){
                $viTri = array_search($giaTri, $mang);
                if ($viTri == true){
                    echo "Vị trí của $giaTri là $viTri";
                } else{
                    echo "Gia tri khong ton tai";
                }
            }
            timViTri($mang, 1500);
        // Viết chương trình PHP để đảo ngược một chuỗi.
            echo "<hr>";
            function daoNguocChuoi($chuoi){
                $sauDao = strrev($chuoi);
                echo "Chuỗi '$chuoi' sau khi đảo ngược là <i>'$sauDao'</i>";
            }
            $chuoi1 = "Hi, My name is Hello World";
            daoNguocChuoi($chuoi1);

        // Viết chương trình PHP để tính số lượng phần tử trong một mảng.
            echo "<hr>";
            function demPhanTu($mang){
                $dem = count($mang);
                echo "Số lượng phần tử trong mảng ( ";
                foreach ($mang as $i){
                    echo "$i ";
                }
                echo " ) là $dem";
            }
            demPhanTu($mang);
        // Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
            echo "<hr>";    
            function kiemTraPal($chuoi){
                $sauDao = strrev($chuoi);
                if ($chuoi == $sauDao ){
                    echo "$chuoi là chuỗi Palindrome";
                } else {
                    echo "$chuoi không là chuỗi Palidrome";
                }
            }
            $chuoi2 = "GHG";
            kiemTraPal($chuoi2);
        // Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
            echo "<hr>";
            function soLanXuatHien($mang){
                print_r (array_count_values($mang));
            }
            $mang2 = array( 1,2,2,3,1,4,5,3,2);
            soLanXuatHien($mang2);
            
        // Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
            echo "<hr>";
            function giamDan($mang){
                echo "Mảng ( ";
                foreach ($mang as $k){
                    echo "$k ";
                }
                echo ") sau khi sắp xếp là: (";
                rsort($mang);
                foreach ($mang as $i){
                    echo "$i ";
                }
                echo ")";
                // print_r($mang);
            }
            giamDan($mang);
            
        // Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
            echo "<hr>";
            function chenCuoi($mang, $giaTri){
                echo "Mang trước khi chèn cuối: ";
                foreach ($mang as $k){
                    echo "$k ";
                }
                array_push ($mang, $giaTri);
                echo "<br>";
                echo "Mang sau khi chèn cuối: ";
                foreach ($mang as $i){
                    echo "$i ";
                }
            }
            chenCuoi($mang, 14);

            echo "<hr>";
            function chenDau($mang, $giaTri){
                echo "Mang trước khi chèn đầu: ";
                foreach ($mang as $k){
                    echo "$k ";
                }
                array_unshift ($mang, $giaTri);
                echo "<br>";
                echo "Mang sau khi chèn đầu: ";
                foreach ($mang as $i){
                    echo "$i ";
                }
            }
            chenDau($mang, 14);

        // Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
            echo "<hr>";
            function soLonThuHai($mang){
                rsort($mang);
                echo "Số lớn thứ hai trong mảng là $mang[1]";
            }

            soLonThuHai($mang);
        // Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
            echo "<hr>";
            function UCLN($a,$b){
                if ($a == 0 || $b ==0){
                    $c = $a + $b;
                    return $c;
                }
                while ($a!=$b){
                    if ($a>$b){
                        $a = $a-$b;
                    } else 
                        $b = $b-$a;
                }
                return $a;
            }
            $c = UCLN(100,75);
            echo "Ước chung lớn nhất của hai số đó là $c";
            
            echo "<hr>";
            function UCLN1($a,$b){
                while ($b !=0 ){
                    $i = $a % $b;
                    $a = $b;
                    $b = $i;
                   } 
                   return $a;
            }
            $d = UCLN1(100,75);
            echo "Ước chung lớn nhất của hai số đó là $d";

            echo "<hr>";
            function BCNN($a,$b){
                $c = UCLN($a,$b);
                $tich = $a * $b;
                $bcnn = $tich / $c;
                echo "Bội chung nhỏ nhất của hai số đó là: $bcnn";
                return $bcnn;
            }
            BCNN(45,60);

        // Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
            echo "<hr>";
            function soHH($a){
                if ($a <=0 ) {
                    echo "$a không là số hoàn hảo";
                    return;
                }
                $sum = 0;
                for ($i = 1; $i <= $a/2; $i++){
                    if($a % $i ==0){
                        $sum += $i;
                    }
                }
                if ($sum == $a){
                    echo "$a là số hoàn hảo";
                } else {
                    echo "$a không là số hoàn hảo";
                }
            }

            soHH (6);
        // Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
            echo "<hr>";
            function soLeLN($mang){
                $mang2 = array();
                foreach($mang as $i){
                    if($i % 2 !=0 ){
                        $mang2[] = $i;
                    }
                }
                rsort($mang2);
                echo "Số lẻ lớn nhất là $mang2[0]";
            }
            soLeLN($mang);
        // Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
            echo "<hr>";
            function soNguyenTo1($a){
                if($a<=1){
                    echo "$a không là số nguyên tố";
                    return;
                }

                for( $i = 2; $i <=sqrt($a); $i++){
                    if ($a % $i == 0){
                        echo " $a không là số nguyên tố";
                        return;
                    }
                }
                echo "$a là số nguyên tố";
            }
            soNguyenTo1(3);
            
        // Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
            echo "<hr>";
            function soDuongLN($mang){
                $mangDuong = array();
                foreach($mang as $i){
                    if( $i > 0){
                        $mangDuong[]=$i;
                    }
                }
                rsort($mangDuong);
                echo "Số dương lớn nhất $mangDuong[0]";
            }
            $mangAmDuong = array(-1, -20, 3, 4,5,200, -200, -10, 100);
            soDuongLN($mangAmDuong);
        // Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
            echo "<hr>";
            function soAmLN($mang){
                $mangAm = array();
                foreach($mang as $i){
                    if( $i < 0){
                        $mangAm[]=$i;
                    }
                }
                rsort($mangAm);
                echo "Số âm lớn nhất $mangAm[0]";
            }
            soAmLN($mangAmDuong);
        // Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
            echo "<hr>";    
            function tongLe($a){
                $sum = 0;
                for ($i = 1; $i<=$a;$i++){
                    if ($i % 2 !=0){
                        $sum +=$i;
                    }
                }
                echo "Tổng số lẻ từ 1 đến $a là $sum";
                return $sum;
            }
            tongLe(10);
        // Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.

            // echo "<hr>";
            // function soChinhPhuong($a,$b) {
        
            //     if ($a > $b){
            //         $t = $a;
            //         $b = $t;
            //         $a = $b;
            //     }
            //     for ($i = $a; $i < $b; $i++ ){
            //         if (is_int(sqrt($i))){
            //             echo "$i ";
            //         }
            //     }
            // }
            // soChinhPhuong(100,1);

            echo "<hr>";

            function soChinhPhuong($a, $b) {
                if ($a > $b) {
                    $t = $a;
                    $a = $b;
                    $b = $t;
                }
                echo "Số chính phương trong đoạn $a đến $b là: ";
                for ($i = $a; $i <= $b; $i++) {
                    $canBacHai = sqrt($i);
                    // if (is_int($k)) {
                    //     echo "$i ";
                    // }  
                    if ($canBacHai == intval($canBacHai)){
                        echo "$i ";
                    }
                }
            }
            soChinhPhuong(1, 100);

        // Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
            echo "<hr>";

            function timChuoiCon($chuoiGoc, $chuoiCon) {
                $viTri = strpos($chuoiGoc, $chuoiCon);
                if ($viTri === false) {
                    echo "Chuỗi con không được tìm thấy trong chuỗi gốc.";
                } else {
                    echo "Chuỗi con được tìm thấy tại vị trí: " . $viTri;
                }
                echo "<br>";
            }
            
            $chuoiCon="Hello World";
            timChuoiCon($chuoi1, $chuoiCon);
            
        ?>
    </body>

</htmml>
<?php
