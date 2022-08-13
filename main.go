package main

import (
	reverseList "Leetcode/reverse-list"
	twoSumList "Leetcode/two-sum-list"
	twoMultString "Leetcode/two-x-string"
	"fmt"
)

func main() {

	n3 := &twoSumList.ListNode{
		Val: 3,
	}

	n2 := &twoSumList.ListNode{
		Val:  4,
		Next: n3,
	}
	n1 := &twoSumList.ListNode{
		Val:  2,
		Next: n2,
	}

	n6 := &twoSumList.ListNode{
		Val: 4,
	}

	n5 := &twoSumList.ListNode{
		Val:  6,
		Next: n6,
	}

	n4 := &twoSumList.ListNode{
		Val:  5,
		Next: n5,
	}

	twoSumList.AddTwoNumbers(n1, n4)
	// 反转链表
	head := &reverseList.ListNode{
		Val: 1,
	}
	reverseList.ReverseList(head)

	// 大数相乘
	a := twoMultString.Multiply("2", "3")
	fmt.Println(a)
}
