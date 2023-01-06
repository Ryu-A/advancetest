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

@section('content')
<div class="content">
  <h1>内容確認</h1>
  <div>
    <form method="POST" action="/contact/thanks">
      @csrf

      <table>
        <tr>
          <td><label for="fullname">お名前</label></td>
          <td>
            <p>{{ $input['fullname'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="gender">性別</label></td>
          <td>
            <p>{{ $input['gender'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="email">メールアドレス</label></td>
          <td>
            <p>{{ $input['email'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="postcode">郵便番号</label></td>
          <td>
            <p>{{ $input['postcode'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="address">住所</label></td>
          <td>
            <p>{{ $input['address'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="building_name">建物名</label></td>
          <td>
            <p>{{ $input['building_name'] }}</p>
          </td>
        </tr>

        <tr>
          <td><label for="opinion">ご意見</label></td>
          <td>
            <p>{!! nl2br(htmlspecialchars($input['opinion'], ENT_QUOTES, 'UTF-8')) !!}</p>
          </td>
        </tr>
      </table>

      <div>
        <div>
          <button type="submit" name="submit">送信</button>
          <!--<button type="submit" name="back">戻る</button>-->
        </div>
        <div>
          <a href="#" onclick="history.back(-1);return false;">修正する</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection