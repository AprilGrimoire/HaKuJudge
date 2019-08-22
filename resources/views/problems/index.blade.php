@extends('layouts.default')

@section('head')
	<title>题库</title>
@stop

@section('content')
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css-temp/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="js-temp/tablecloth.js"></script> 




		<!-- all you need with Tablecloth is a regular, well formed table. No need for id's, class names... --> 
		
			
		
		<table cellspacing="0" cellpadding="0" class="question_container">
			<tr>
					<th>序号</th>
					<th>题目名称</th>
					<th>通过率</th>
					<th>状态</th>
			</tr>
			@foreach ($problems as $problem)			
				<tr>
					<td class="id">{{ $problem->id }}</td>
					<td class="name"><a href="{{ route('problems.show', $problem) }}">{{ $problem->title }}</a></td>
					<td class="difficulty">{{ $ratio[$problem->id]['a'] }}/{{ $ratio[$problem->id]['b'] }}</td>
					<!-- 由于历史遗留问题，通过率的class叫做difficulty -->
					<td class="state">{{ $status[$problem->id] }}</td>
				</tr>			
			@endforeach
		</table>
        <div class="text-center">
            {!! $problems->render() !!}
        </div>
	</body>

@endsection
