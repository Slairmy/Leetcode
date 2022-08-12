<?php

/**
 *  反转链表
 */

class ListNode {
    public $val = 0;

    public $next = null;

    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }

}


class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {

        // 前置节点
        $pre = null;
        // 当前节点
        $current = $head;
        while ($current != null) {
            // 这里提前一下
            $next = $current->next;
            $current->next = $pre;
            // 下面的步骤是移动next指针
            $pre = $current;
            $current = $next;
        }

        return $pre;
    }
}