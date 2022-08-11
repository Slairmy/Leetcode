package twoSumList

import "fmt"

type ListNode struct {
	Val  int
	Next *ListNode
}

func AddTwoNumbers(l1, l2 *ListNode) *ListNode {

	mod := 0
	// 初始化值
	// 这里初始化两个节点,相当于一个头节点,最后返回的时候通过头节点指向返回 (当时就卡在怎么处理节点的情况)
	// 这里一定不要像下面这样子做
	// currentNode := ListNode{}	// 这里直接赋值结构体
	// preNode := &currentNode		// 这里变量位指针地址,这个指针不可访问结构体数组元素单纯的是一个内存地址

	currentNode := &ListNode{} // 这里赋值是对应的结构体指针指向,通过改指针可以访问结构体元素
	preNode := currentNode
	for l1 != nil && l2 != nil {
		x, y := 0, 0
		if l1 != nil {
			x = l1.Val
		}
		if l2 != nil {
			y = l2.Val
		}
		sum := x + y + mod
		currentNode.Next = &ListNode{
			Val: sum % 10,
		}
		mod = sum / 10

		currentNode = currentNode.Next

		fmt.Println(currentNode)

		if l1 != nil {
			l1 = l1.Next
		}
		if l2 != nil {
			l2 = l2.Next
		}
	}

	if mod != 0 {
		currentNode.Next = &ListNode{
			Val: mod,
		}
	}

	return preNode.Next
}
