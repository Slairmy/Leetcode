package treeMaxDeep

type TreeNode struct {
	Val   int
	Left  *TreeNode
	Right *TreeNode
}

var maxDeep = 0
var resDeep = 0

func MaxDepth(root *TreeNode) int {

	traverse(root)
	return resDeep
}

func traverse(root *TreeNode) {
	if root == nil {
		return
	}

	maxDeep++
	if root.Left == nil && root.Right == nil {
		if maxDeep > resDeep {
			resDeep = maxDeep
		}
	}

	traverse(root.Left)
	traverse(root.Right)

	maxDeep--
}
