@extends('layouts.default')

@section('content')
    <form action="{{ route('problems.store') }}" method="POST" enctype="multipart/form-data">
        <div class="container">
            <table>
            <tr>
                <td><label for="title">标题</label></td>
                <td><input type="text" id="title" name="title" /></td>
            </tr>
            <tr>
                <td><label for="description">题目描述</label></td>
                <td><textarea name="description" id="description"></textarea></td>
            </tr>
            <tr>
                <td><label for="testdata">测试数据</label>
                <td><input type="file" id="testdata" name="testdata" />
            </tr>
            {{ csrf_field() }}
            <tr>
                <td><input type="submit" /></td>
            </tr>
            </table>
        </div>
    </form>
    <p>
        测试数据应为一个zip文件，包含problem目录。problem目录包含problem.json和其它评测时需要用到的文件（比如数据）。
    </p>
    <p>
        problem.json应为以下格式：[{单组数据}，{单组数据}，……]
    </p>
    <p>
        单组数据应为以下格式：{"id":数据点编号，"input":"输入文件在problem目录中的相对路径"，"answer":"答案文件在problem目录中的相对路径"，"time":时间限制（毫秒），"memory":空间限制（字节）,"score":此测试点的最大得分}
    </p>
@stop
