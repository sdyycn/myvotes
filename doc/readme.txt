smarty 调试信息
<!--{$user|@print_r}-->	// $user是数组  @
{$var|print_r}			// $var是变量


如果在使用smarty时，想查看某变量的内容，而又不想打开smarty debug，或smarty debug的输出不能满足你的要求，可以这样用。
以下内容为程序代码:
 {$var|print_r} 
如果是数组，应当
以下内容为程序代码:
 {$var|@print_r} 
这里用@是来保证把变量当做一个整体对待，否则会遍历这个array 当然，在fleaphp中，要这么用
以下内容为程序代码:
 {$var|@dump} 
其实，通过这种方式（smarty称为Variable Modifiers）是可以使用任意php函数的（某些特殊的，可能不能这么用）。比如：
以下内容为程序代码:
 {$item.item_id|in_array:$existItems|replace:1:'checked'} 
相当于php的
以下内容为程序代码:
 replace(in_array($item['item_id'], $existItems), 1 , 'checked'); 
规律是第一个参数|函数名:第二个参数:第三个参数:..第n个参数在这里提供给不知道这么用的弟兄们以参考。另外，我用的是最新的smarty。如果以上所说在你那不行，去smarty.php.net下载最新的用。