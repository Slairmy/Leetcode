package twoMultString

import (
	"strconv"
)

func Multiply(num1 string, num2 string) string {
	if num1 == "0" || num2 == "0" {
		return "0"
	}

	len1 := len(num1)
	len2 := len(num2)

	// 以切片的方式,切片元素为int的零值
	result := make([]int, len1+len2)

	for i := len1 - 1; i >= 0; i-- {
		for j := len2 - 1; j >= 0; j-- {
			mult := int(num1[i]-byte('0')) * int(num2[j]-byte('0'))
			x, y := i+j, i+j+1

			sum := result[y] + mult
			result[y] = sum % 10
			result[x] += sum / 10
		}
	}

	// 处理前置的0
	for k, v := range result {
		if v == 0 {
			result = result[k+1:]
			continue
		}
		break
	}

	returnString := ""
	for _, v := range result {
		returnString += strconv.Itoa(v)
	}

	return returnString
}
