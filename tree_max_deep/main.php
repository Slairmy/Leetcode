<?php

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

/**
 * 
 * 遍历一遍二叉树，当遍历到的节点 左节点和右节点都是 null的时候说明到达了叶子节点
 * 
 * 但是有个问题，到达了叶子节点不一定都要深度 +1 什么情况下需要深度 +1 呢?
 * 
 * 解题思路: 搞懂前序和后续的情况: 比如需要遍历节点A，在进入节点A之前输出的位置为前序遍历输出的位置，当离开节点输出的位置就是后序遍历输出的位置
 * 
 * 前序位置
 * left($root)
 * 中序位置
 * right($root)
 * 后序位置
 * 
 */

class Solution {

    public int $res = 0;
    // 遍历的深度
    public int $deep = 0;

    function maxDepth($root) {
        $this->traverse($root);

        return $this->res;
    }

    // 二叉树便利框架
    public function traverse(?TreeNode $root)
    {
        // 节点为 null 直接返回
        if ($root === null) {
            return;
        }

        $this->deep++;
        // 这个节点是叶子节点
        if ($root->left === null && $root->left === null) {
            // 到达叶子节点更新最大深度
            $this->res = max([$this->deep, $this->res]);
        }

        // 这里会先按照left的调用栈调用完在开始调用right的调用栈
        $this->traverse($root->left);
        $this->traverse($root->right);

        $this->deep--;

    }
}