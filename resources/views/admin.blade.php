@extends('layouts.default')
<style>
th {
    background-color: white;
    padding: 10px 20px;
    text-align: left;
    font-size: 14px;
    white-space:nowrap
    }
td {
    padding: 10px 20px;
    text-align: left;
    font-size: 14px;
    white-space:nowrap
    }
textarea {
    resize: none;
    width:500px;
    height:150px;
    }
svg.w-5.h-5 {
    width: 30px;
    height: 15px;
}

.search{
    padding:20px;
    margin:10px;
}

.confirm {
    text-align:center;
    }

.delete{
    color: cyan;
    border-color: cyan;
    background-color: white;
    }

.opinion{

    overflow:hidden;
    text-overflow: ellipsis;
    white-space:nowrap;
}
</style>
@section('title', '')


@section('content')
<h1>管理システム</h1>
    <div class="search">
            <form action="admin/find" method="GET">
        @csrf

            <div class="form-group">
                <div>
                <label for="fullname">お名前</label>
                    <div>
                        <input type="text" name="fullname">
                    </div>
                
            </div>

            <div>
                <label for="gender">性別</label>
                <div>
                    <input id="gender0" type="radio" name="gender" value="0" checked>
                    <label for="gender0">全て</label>
                    <input id="gender1" type="radio" name="gender" value="1">
                    <label for="gender1">男性</label>
                    <input id="gender2" type="radio" name="gender" value="2">
                    <label for="gender2">女性</label>
                </div>
                
            </div>

            <div>
                <label for="created_at">登録日</label>
                <div>
                    <input type="date" name="created_at">
                </div>
                
            </div>

            <div>
                <input type="submit" class="btn" value="検索">
            </div>
        </div>
    </form>
</div>

{{ $contacts->links() }}
<table>
    <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
        <th></th>
    </tr>

    @foreach ($contacts as $contact)
    <tr>

            <td>{{ $contact->id }}</td>
            <td>{{ $contact->fullname }}</td>
            <td>{{ $contact->gender }}</td>
            <td>{{ $contact->email }}</td>
            <td class="opinion">{{ $contact->opinion }}</td>
            <form method="POST" action="admin/remove/{{$contact->id}}" >
            @csrf
                <td><input class='remove' type="submit" value="削除"></td>
        </form>
    </tr>
    @endforeach
</table>