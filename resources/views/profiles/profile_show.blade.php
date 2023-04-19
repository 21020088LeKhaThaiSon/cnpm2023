@include('layouts.app')


<h1>{{$user -> profile -> fullname}}</h1>

<p>{{$user -> profile -> description}}</p>
<h2>I. Thông tin cơ bản</h2>

<ul>
    <li>Họ và tên: {{$user -> profile ->fullname}}</li>
    <li>Ngày sinh: {{$user -> profile ->birth}}</li>
    <li>Trường đại học: {{$user -> profile ->univer}}</li>
    <li>Giới tính: {{$user -> profile ->gioi_tinh}}</li>
</ul>
<h2>II. Thông tin bổ sung</h2>
<p>{{$user -> profile ->bonus}}</p>
<a href = "/post/create">Post</a>

@foreach($user->posts as $post)
    <a href="/post/post_show/{{ $post->id }}">
        <img src="/storage/{{ $post->image }}" width="300" height="300"></a>
@endforeach


