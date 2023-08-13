<?php

namespace LinkedList\ReverseLinkedList;

class ListNode
{
    public function __construct(
        public $val = 0,
        public $next = null
    )
    {
    }

    public static function fromArray(array $arr)
    {
        $head = null;
        foreach ($arr as $value) {
            $ln = new ListNode($value);

            if ($head === null) {
                $head = $ln;
                $temp = $ln;
                continue;
            }

            $temp->next = $ln;
            $temp = $ln;
        }

        return $head;
    }

    public function toArray()
    {
        $ln = $this;
        $arr = [];

        while ($ln) {
            $arr[] = $ln->val;
            $ln = $ln->next;
        }

        return $arr;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        return $this->createNode($head);
    }

    private function createNode(ListNode $current, ListNode $parent = null)
    {
        $node = new ListNode($current->val, $parent);

        if ($current->next) {
            return $this->createNode($current->next, $node);
        }

        return $node;
    }
}
