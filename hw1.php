<?php
echo "================ ARRAY FUNCTIONS ================\n\n";

/*
----------------------------------------------------
ARRAY FUNCTIONS
----------------------------------------------------
*/

// count()
$arr = [1, 2, 3];
echo "count(): " . count($arr) . "\n\n";

// array_push()
$arr = [1, 2];
array_push($arr, 3, 4);
print_r(["array_push()" => $arr]);

// array_pop()
$arr = [1, 2, 3];
array_pop($arr);
print_r(["array_pop()" => $arr]);

// array_shift()
$arr = [1, 2, 3];
array_shift($arr);
print_r(["array_shift()" => $arr]);

// array_unshift()
$arr = [3, 4];
array_unshift($arr, 1, 2);
print_r(["array_unshift()" => $arr]);

// in_array()
echo "in_array(): " . (in_array(3, [1, 2, 3]) ? 'true' : 'false') . "\n\n";

// array_key_exists()
$arr = ["name" => "Ali"];
echo "array_key_exists(): " . (array_key_exists("name", $arr) ? 'true' : 'false') . "\n\n";

// array_keys(), array_values()
$arr = ["a" => 1, "b" => 2];
print_r(["array_keys()" => array_keys($arr)]);
print_r(["array_values()" => array_values($arr)]);

// array_merge()
$a = [1, 2];
$b = [3, 4];
print_r(["array_merge()" => array_merge($a, $b)]);

// array_diff()
print_r(["array_diff()" => array_diff([1, 2, 3], [2, 3])]);

// array_intersect()
print_r(["array_intersect()" => array_intersect([1, 2, 3], [2, 3, 4])]);

// array_map()
$arr = [1, 2, 3];
$result = array_map(fn($n) => $n * 2, $arr);
print_r(["array_map()" => $result]);

// array_filter()
$arr = [1, 2, 3, 4];
print_r(["array_filter()" => array_filter($arr, fn($n) => $n % 2 == 0)]);

// array_reduce()
$arr = [1, 2, 3, 4];
$sum = array_reduce($arr, fn($c, $n) => $c + $n, 0);
echo "array_reduce() SUM: $sum\n\n";

// sort(), rsort()
$arr = [3, 1, 2];
sort($arr);
print_r(["sort()" => $arr]);

$arr = [3, 1, 2];
rsort($arr);
print_r(["rsort()" => $arr]);

// asort(), ksort()
$arr = ["b" => 2, "a" => 1];
asort($arr);
print_r(["asort()" => $arr]);

$arr = ["b" => 2, "a" => 1];
ksort($arr);
print_r(["ksort()" => $arr]);

// array_reverse()
print_r(["array_reverse()" => array_reverse([1, 2, 3])]);

// array_slice()
print_r(["array_slice()" => array_slice([1, 2, 3, 4], 1, 2)]);

// array_splice()
$arr = [1, 2, 3, 4];
array_splice($arr, 1, 2, ["X", "Y"]);
print_r(["array_splice()" => $arr]);

// range()
print_r(["range()" => range(1, 5)]);



echo "\n================ STRING FUNCTIONS ================\n\n";

/*
----------------------------------------------------
STRING FUNCTIONS
----------------------------------------------------
*/

// strlen()
echo "strlen(): " . strlen("Hello") . "\n\n";

// strtoupper(), strtolower()
echo "strtoupper(): " . strtoupper("ali") . "\n";
echo "strtolower(): " . strtolower("HELLO") . "\n\n";

// ucfirst(), lcfirst(), ucwords()
echo "ucfirst(): " . ucfirst("hello") . "\n";
echo "ucwords(): " . ucwords("hello world") . "\n\n";

// trim(), ltrim(), rtrim()
echo "trim(): '" . trim("  Hello  ") . "'\n\n";

// str_repeat()
echo "str_repeat(): " . str_repeat("A", 3) . "\n\n";

// substr()
echo "substr(): " . substr("Hello", 1, 3) . "\n\n";

// strpos()
echo "strpos(): " . strpos("Hello", "l") . "\n\n";

// str_replace()
echo "str_replace(): " . str_replace("world", "Ali", "Hello world") . "\n\n";

// explode()
print_r(["explode()" => explode(",", "a,b,c")]);

// implode()
echo "implode(): " . implode("-", ["a", "b", "c"]) . "\n\n";

// strcmp()
echo "strcmp(): " . strcmp("a", "b") . "\n\n";

// strrev()
echo "strrev(): " . strrev("Hello") . "\n\n";

// number_format()
echo "number_format(): " . number_format(1234.56, 2) . "\n\n";

// addslashes(), stripslashes()
echo "addslashes(): " . addslashes("Ali's Book") . "\n\n";

// htmlspecialchars()
echo "htmlspecialchars(): " . htmlspecialchars("<b>Hi</b>") . "\n\n";

// printf(), sprintf()
printf("printf(): Name: %s, Age: %d\n\n", "Ali", 20);

$txt = sprintf("sprintf(): %s is %d years old", "Ali", 20);
echo $txt . "\n\n";

// str_split()
print_r(["str_split()" => str_split("Ali")]);

// nl2br()
echo "nl2br(): " . nl2br("Hello\nWorld") . "\n\n";

// wordwrap()
echo "wordwrap(): " . wordwrap("Hello World Hello World", 5, "<br>") . "\n\n";

?>
