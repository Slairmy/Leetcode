<?php
/**
 * 解题思路: 根据每个字符串的长度,逐渐从末尾计算数值的相加然后通过字符串拼接
 * 
 * 注意坑点: 1、从末尾对其相加 2、每一位相加之后大于10需要进位留余数下一位相加需要加上进位的数值 3、首位进位的情况
 */

function addStrings($num1, $num2) {
    $len1 = strlen($num1) - 1;
    $len2 = strlen($num2) - 1;

    // mod 表示每一位数值相加进位之后的余数
    $mod = 0;
    $sumString = '';
    while ($len1 >= 0 || $len2 >= 0) {
        $x = $len1 >= 0 ? $num1[$len1] : 0;
        $y = $len2 >= 0 ? $num2[$len2] : 0;
        $sum = $x + $y + $mod; 
        // 取整数
        $sumString = ($sum % 10) . $sumString;
        $mod = intval($sum / 10);
        $len1--;
        $len2--;
    }
    if ($mod > 0) {
        $sumString = $mod . $sumString;
    }
    return $sumString;
}

// 计算
var_dump(addStrings('11', '123'));