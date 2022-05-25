<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <!-- Scripts -->
    <!-- asset:publicの配下 -->
    <script src="{{ asset('js/JQuery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>

<main class="form-signin">
  <form method="POST" action="{{ route('login')}}">
  <!-- csrf攻撃から守る。ないとエラーが出る -->
    @csrf
    <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    
    <div class="form-floating">
        <label for="floatingInput">Email address</label>
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" >
    </div>

    <div class="form-floating">
        <label for="floatingPassword">Password</label>
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
    </div>

    <button class="w-100 btn  btn-primary" type="submit">ログイン</button>
  </form>
</main>
</body>

</html>