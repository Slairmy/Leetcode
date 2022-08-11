package main

import (
	twoSumList "Leetcode/two-sum-list"
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

}
