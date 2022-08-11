package twoSumString

import (
	"strconv"
)

func AddStrings(num1, num2 string) string {

	len1, len2 := len(num1)-1, len(num2)-1
	var (
		mod       int    = 0 // 余数
		sumString string     // 结果字符串
	)
	for len1 >= 0 || len2 >= 0 {
		// 流程简化
		x, y := 0, 0
		if len1 >= 0 {
			// x, _ = strconv.Atoi(string(num1[len1]))
			// 一个小技巧: 字符串便利访问返回的是 byte (因为字符串底层类型就是 byte 类型的切片) 这里由于确定是数值的byte 可以减去数值 0对应的byte类型值得到的差值就是具体的数值
			x = int(num1[len1] - byte('0'))
		}
		if len2 >= 0 {
			// y, _ = strconv.Atoi(string(num2[len2]))
			y = int(num2[len2] - byte('0'))
		}
		sum := x + y + mod
		sumString = strconv.Itoa(sum%10) + sumString
		mod = sum / 10

		len1--
		len2--
	}
	if mod > 0 {
		sumString = strconv.Itoa(mod) + sumString
	}
	return sumString
}
