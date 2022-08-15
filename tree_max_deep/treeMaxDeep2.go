package treeMaxDeep

type TreeNode2 struct {
	Val   int
	Left  *TreeNode
	Right *TreeNode
}

// 通过获取子树的最大高度递归+1

func MaxDepth2(root *TreeNode) int {
	res := 0
	if root == nil {
		return res
	}

	left := MaxDepth2(root.Left)
	right := MaxDepth2(root.Right)

	// 通过后序位置的行为 每次离开家店res + 1
	if left > right {
		res = left + 1
	} else {
		res = right + 1
	}

	return res
}
