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
<div class="content">
  <h1>お問い合わせ</h1>
  <div>
    <form method="POST" action="/contact/confirm">
      @csrf

      <table>
        <tr>
          <td><label for="fullname">お名前</label></td>
          <div>
          @error('fullname')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="fullname" type="text" name="fullname" value="{{ old('fullname') }}" autofocus>
          </td>
        </tr>

        <tr>
          <td><label for="gender">性別</label></td>
          <div>
          @error('gender')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="gender1" type="radio" name="gender" value="1" {{ old('gender','1') == '1' ? 'checked' : ''  }}>
            <label for="gender1">男性</label>
            <input id="gender2" type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : ''  }}>
            <label for="gender2">女性</label>
          </td>
        </tr>

        <tr>
          <td><label for="email">メールアドレス</label></td>
          <div>
          @error('email')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus>
          </td>
        </tr>

        <tr>
          <td><label for="postcode">郵便番号</label></td>
          <div>
          @error('postcode')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="postcode" type="text" pattern="\d{3}-?\d{4}" name="postcode" value="{{ old('postcode') }}" autofocus>
          </td>
        </tr>

        <tr>
          <td><label for="address">住所</label></td>
          <div>
          @error('address')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="address" type="text" name="address" value="{{ old('address') }}" autofocus>
          </td>
        </tr>

        <tr>
          <td><label for="building_name">建物名</label></td>
          <div>
          @error('building_name')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <input id="building_name" type="text" name="building_name" value="{{ old('building_name') }}" autofocus>
          </td>
        </tr>

        <tr>
          <td><label for="opinion">ご意見</label></td>
          <div>
          @error('opinion')
          <p>{{ $message }}</p>
          @enderror
          </div>
          <td>
            <textarea id="opinion" name="opinion" cols="30" rows="10">{{ old('opinion') }}</textarea>
          </td>
        </tr>
      </table>


      <div>
        <div class="confirm">
          <button type="submit">確認</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection