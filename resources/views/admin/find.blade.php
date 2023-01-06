@extends('layouts.default')
<style>
th {
    background-color: white;
    padding: 10px 20px;
    text-align: left;
    font-size: 14px;
}
td {
    padding: 10px 20px;
    text-align: left;
    font-size: 14px;
}
textarea {
    resize: none;
    width:500px;
    height:150px;
}

.confirm {
    text-align:center;
}

.delete{
    color: cyan;
    border-color: cyan;
    background-color: white;
}
</style>
@section('title', '')


@section('content')
<div class="search">
    <form action="admin/find" method="GET">
        @csrf

        <div class="form-group">
            <div>
                <label for="">お名前
                <div>
                    <input type="text" name="fullname">
                </div>
                </label>
            </div>

            <div>
                <label for="">性別
                <div>
                    <select name="medium" data-toggle="select">
                        <option value="">全て</option>
                    </select>
                </div>
                </label>
            </div>

            <div>
                <label for="">登録日
                <div>
                    <select name="category" data-toggle="select">
                        <option value="">全て</option>
                    </select>
                </div>
                </label>
            </div>

            <div>
                <input type="submit" class="btn" value="検索">
            </div>
        </div>
    </form>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
    </tr>

    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->fullname }}</td>
        <td>{{ $contact->gender }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->opinion }}</td>
    </tr>
    @endforeach
</table>