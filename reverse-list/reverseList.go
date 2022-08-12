package reverseList

type ListNode struct {
	Val  int
	Next *ListNode
}

func ReverseList(head *ListNode) *ListNode {

	var pre *ListNode
	current := head

	for current != nil {
		// 获取next的节点
		next := current.Next

		// 将当前节点的next指向上一个节点
		current.Next = pre
		pre = current
		current = next

	}

	return pre
}
