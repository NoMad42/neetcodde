<?php

namespace LinkedList\ReverseLinkedList;

include_once "ReverseLinkedList.php";

$sol = new Solution();

assert([5,4,3,2,1] === $sol->reverseList(ListNode::fromArray([1,2,3,4,5]))->toArray());
