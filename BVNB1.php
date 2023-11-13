<!DOCTYPE HTML>
<html>
    <body>
        <?php
        
        // Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
            echo "Số kí tự của chuỗi 'HELLO WORLD' là: "; echo strlen("HELLO WORLD");
            
            echo"<br>";

            $string = "HELLO WORLD";
            $length = strlen($string);
            echo "Số kí tự của chuỗi 'HELLO WORLD' là: " . $length;
            echo "<br>";

        // Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
            $sentences = "Xin Chào Các Bạn";
            $length1 = str_word_count($sentences);
            echo "Số từ của 'Xin Chào Các Bạn' là: " .$length1;
            echo "<br>";

        // Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
            $nguoc = strrev($string);
            echo "Đảo ngược của HELLO WORLD là " .$nguoc;
            echo "<br>";
        // Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
        // strpos($haystack, $needle, $offset);
            $chuoiCon = "Bạn";
            $vitri = strpos($sentences, $chuoiCon);
            if ($vitri === false) {
                echo "Chuỗi con không được tìm thấy trong chuỗi gốc.";
            } else {
                echo "Chuỗi con được tìm thấy tại vị trí: " . $vitri;
            }
            echo "<br>";
        // Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
        // str_replace($search, $replace, $subject);
            $thaythe = "đồng chí";
            echo $chuoimoi = str_replace($chuoiCon,$thaythe,$sentences);
            echo "<br>";
        // Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
        
            function batDau($string2, $batDau) {
                $length2 = strlen($batDau);
                return substr($string2, 0, $length2) == $batDau;
            }
            
            $string2 = "Hello world, nice to be here!";
            $batDau = "Hello";
            
            if (batDau($string2, $batDau)) {
                echo "Chuỗi bắt đầu bằng chuỗi con.";
            } else {
                echo "Chuỗi không bắt đầu bằng chuỗi con.";
            }

            echo "<br>";
        // Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
            $a = "xin chao cac ban";
            $uppercase = strtoupper($a);
            echo "Chuỗi 'Xin Chào Các Bạn' viết hoa hết là: " . $uppercase;
            echo "<br>";
        // Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
            $lowercase = strtolower($uppercase);
            echo "Chuỗi 'XIN CHAO CAC BAN' chuyển về thường là: " .$lowercase;
            echo "<br>";

        // Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
            $inChuDau = ucwords($lowercase);
            echo "Chuoi 'xin chao cac ban' in chữ đầu là:" .$inChuDau;
            echo "<br>";
        // Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
            $senten = " Hello World! ";
            $trim = trim($senten);
            echo "Chuôi ' Hello World! ' sau khi trim là: '$trim'" ;
            echo "<br>";
        // Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
        // ltrim($string, $character_mask);
            $ltrim = ltrim($senten);
            echo "Chuỗi '$senten' sau khi ltrim là '$ltrim'";
            echo "<br>";

        // Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
            $rtrim = rtrim($senten);
            echo "Chuỗi '$senten' sau khi rtrim là '$rtrim'";
            echo "<br>";
        // Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
        // explode($delimiter, $string, $limit);
            $chuoiChia = explode(" ", $sentences);
            print_r($chuoiChia);
            echo "<br>";
        // Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
        // implode($glue, $pieces);
            $noiChuoi = implode(" ", $chuoiChia);
            echo "Chuoi ";
            print_r($chuoiChia);
            echo " sau khi join là " .$noiChuoi;
            echo "<br>";

        // Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
        // str_pad($string, $length, $pad_string, $pad_type);
            $chuoiThem = str_pad($string,30," Viet Nam");
            echo "Chuoi $string sau khi thêm Viet Nam là " .$chuoiThem;
            echo "<br>";

        // Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().

            function ketThuc($string3, $end) {
                $length3 = strlen($end);
                if ($length3 == 0) {
                    return true;
                }
                return substr($string3, -$length3) == $end;
            }
            
            $string3 = "Hello World!";
            $end = "World!";
            
            if (ketThuc($string3, $end)) {
                echo "Chuỗi kết thúc bằng chuỗi con.";
            } else {
                echo "Chuỗi không kết thúc bằng chuỗi con.";
            }
            echo "<br>";

        // Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
            function contains($string, $substring) {
                return strpos($string, $substring) !== false;
            }
            
            $string = "Hello, World!";
            $substring = "World";
            
            if (contains($string, $substring)) {
                echo "Chuỗi chứa chuỗi con.";
            } else {
                echo "Chuỗi không chứa chuỗi con.";
            }
            echo "<br>";

        // Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().

        // Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().

        // Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
        // filter_var($value, $filter, $options)
            $email = "hoabui8323@gmail.com";
            $hopLe = filter_var($email, FILTER_VALIDATE_EMAIL);

            if ($hopLe != false) {
                echo "Địa chỉ email hợp lệ.";
            } else {
                echo "Địa chỉ email không hợp lệ.";
            }
        
        ?>
Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
Viết chương trình PHP để tính tổng của các số từ 1 đến n.
Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
Viết chương trình PHP để tính giai thừa của một số nguyên dương.
Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
Viết chương trình PHP để tính tổng của các số trong một mảng.
Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
Viết chương trình PHP để đảo ngược một chuỗi.
Viết chương trình PHP để tính số lượng phần tử trong một mảng.
Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
    </body>
</html>