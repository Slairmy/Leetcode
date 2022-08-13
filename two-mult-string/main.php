<?php

/**
 * 
 * 大数据相乘主要遵循一下几个思路
 * 
 * 1、n位数和m位数相乘最大的位数是 m+n
 * 2、以左边开始建立索引,0为索引开始, 第i位和第j位数相乘分别会落在总位数的第i+j和第i+j+1位 
 * 3、每次计算第i位和第j位的乘机之后,直接与结果的第i+j位的数值相加,总数不会超过3位数
 * 
 */

function multiply($num1, $num2) {

    if ($num1 === '0' || $num2 === '0') {
        return '0';
    }

    $len1 = strlen($num1);
    $len2 = strlen($num2);

    // 遵循一个原则,第i位和第j位数值相乘的结果 是在 最终结果的 第i+j 和 i+j+1 位相加(相当于最终组成加法)
    $result = array_fill(0, $len1 + $len2, 0);
    for ($i = $len1 - 1; $i >= 0; $i--) {
        for ($j = $len2 - 1; $j >= 0; $j--) {
            // 计算当前的乘积
            $mult = $num1[$i] * $num2[$j];
            
            // 相当于这里最终会形成最大2位数相加
            $x = $i + $j;
            $y = $i + $j + 1;

            $sum = $result[$y] + $mult;

            $result[$y] = $sum % 10;
            // 这里是一个关键点,为什么这里不考虑进位,因为两个一位数相乘最大值是81,两个一位数相加最大数不会超过20
            $result[$x] += intval($sum / 10);
        }
    }

    // 组装成字符串
    foreach ($result as $key => $val) {
        if ($val == 0) {
            unset($result[$key]);
            continue;
        }
        break;
    }

    return join('', $result);
}
