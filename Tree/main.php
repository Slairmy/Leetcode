<?php

/**
 * 
 *  当前树的形状
 * 
 * 
 *                          A
 *                        /   \
 *                      B       C
 *                    /       /   \
 *                  D       E       F
 *                /                   \   
 *              G                       H
 *                \
 *                  I
 * 
 */


class TreeNode {

    public $val = null;

    public $left = null;

    public $right = null;

    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

$I = new TreeNode('I');
$G = new TreeNode('G', null, $I);
$D = new TreeNode('D', $G);
$E = new TreeNode('E');
$H = new TreeNode('H');
$F = new TreeNode('F', null, $H);
$C = new TreeNode('C', $E, $F);
$B = new TreeNode('B', $D);
$A = new TreeNode('A', $B, $C);


// 遍历思想,打印当前节点在第几层
function printLevel(?TreeNode $root, int $level = 1)
{
    if ($root == null) {
        return;
    }
    echo $root->val . '在第' . $level . '层' . PHP_EOL;
    $level++;
    printLevel($root->left, $level);
    printLevel($root->right, $level);    

}

// 分治思想,打印每个节点的左右子树个有多少个节点
function leftRightNodes(?TreeNode $root)
{
    if ($root == null) {
        return;
    }
    $leftNodes = leftRightNodes($root->left) ?? 0;
    $rightNodes = leftRightNodes($root->right) ?? 0;

    echo $root->val . '左子树节点数量: ' . $leftNodes . '-右子树节点数量' . $rightNodes . PHP_EOL;

    // 这里其实是返回当前节点的左右子树总数量
    return $leftNodes + $rightNodes + 1;
}


// 最大直径

// 我觉得这里应该需要遍历一遍树,在后序离开的时候+1
function diameterOfBinaryTree(?TreeNode $root) {
    if ($root == null) {
        return;
    }

    diameterOfBinaryTree($root->left);
    diameterOfBinaryTree($root->right);
    // 离开节点的时候+1
    
}

leftRightNodes($A);

