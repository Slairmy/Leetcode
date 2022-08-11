<?php

class ListNode {

    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution {

    function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode {

        $mod = 0;
        $preNode = new ListNode();
        $current = $preNode;

        while ($l1 != null || $l2 != null) {
            
            $x = $l1 === null ? 0 : $l1->val;
            $y = $l1 === null ? 0 : $l2->val;

            $sum = $x + $y + $mod;

            $val = $sum % 10;
            $mod = intval($sum / 10);

            $current->next = new ListNode($val);
            $current = $current->next;
            

            $l1 !== null && $l1 = $l1->next;            
            $l2 !== null && $l2 = $l2->next;            
        }


        if ($mod !== 0) {
            $current->next = new ListNode($mod);
        }

        return $preNode->next;
    }
}