@extends('layouts.default')

@section('head')
	<title>进阶之旅</title>
@endsection

@section('content')
	<link href="/tablecloth/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="/tablecloth/tablecloth.js"></script> 
	<table cellspacing="0" cellpadding="0" class="question_container">
		<tr>
				<th>序号</th>
				<th>算法名称</th>
				<th>难度</th>
				<th></th>
		</tr>
		<tr>
			<td class="id">1</td>
			<td class="name">入门新手——c++基础语法</a></td>
			<td class="difficulty">1</td>
			<td class="state"><a href="">点击进入</td>
		</tr>			
		<tr>
			<td class="id">2</td>
			<td class="name">最暴力的方法——搜索</a></td>
			<td class="difficulty">3</td>
			<td class="state"><a href="">点击进入</td>
		</tr>	
		<tr>
			<td class="id">3</td>
			<td class="name">贪婪的算法——贪心</a></td>
			<td class="difficulty">5</td>
			<td class="state"><a href="">点击进入</td>
		</tr>	
		<tr>
			<td class="id">4</td>
			<td class="name">精明的决策——动态规划</a></td>
			<td class="difficulty">5</td>
			<td class="state"><a href="">点击进入</td>
		</tr>		
		<tr>
			<td class="id">5</td>
			<td class="name">神奇的技巧——二分答案</a></td>
			<td class="difficulty">3</td>
			<td class="state"><a href="">点击进入</td>
		</tr>
		<tr>
			<td class="id">6</td>
			<td class="name">数据结构初探——堆、并查集</a></td>
			<td class="difficulty">2</td>
			<td class="state"><a href="">点击进入</td>
		</tr>
		<tr>
			<td class="id">7</td>
			<td class="name">九曲十八弯——网络流</a></td>
			<td class="difficulty">5</td>
			<td class="state"><a href="">点击进入</td>
		</tr>
		<tr>
			<td class="id">8</td>
			<td class="name">可怕的数学——扩展欧几里得算法</a></td>
			<td class="difficulty">3</td>
			<td class="state"><a href="">点击进入</td>
		</tr>
		<tr>
			<td class="id">9</td>
			<td class="name">可怕的数学二——莫比乌斯反演</a></td>
			<td class="difficulty">5</td>
			<td class="state"><a href="">点击进入</td>
		</tr>
		<tr>
			<<td class="id">10</td>
			<td class="name">数据结构进阶——线段树、树状数组</a></td>
			<td class="difficulty">5</td>
			<td class="state"><a href="">点击进入</td>
		</tr>		
	</table>
@endsection