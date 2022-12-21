<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/auth.css') }}" type="text/css" rel="stylesheet">
  <title>Shopping Cart | {{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">  
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>  
</head>
<body>
  
  @if(session()->has("success"))
    <div x-data="{ open: true }" :class="{'flex': open, 'hidden': !open}" x-open="open" x-init="setTimeout(() => open = false, 1000)">
      <div @click="open = !open" class="alert alert-success position-absolute" role="alert">
        {{ session()->get("success") }}
      </div>
  </div>
  @endif

  @if ($errors->any())
  <div x-data="{ open: true }" :class="{'flex': open, 'hidden': !open}" x-open="open" x-init="setTimeout(() => open = false, 1000)"  role="alert"> 
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700 position-absolute">
      <p class="text-warning">{{ $errors->first() }}</p>
    </div>
  </div>
  @endif

  <div class="bg-auth">
    <div class="container">
      <div class="display-auth">
        <div style="border: 0.5px solid #fff; border-radius: 8px; padding:2rem 1rem;" class="w-50">
          <h2 class="mb-4">Login</h2>
          <form method="POST"  action="/login">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn-login w-100 mt-4">Login</button> 
            <div class="mt-4 text-center">
              <p>Belum Punya Akun? <a href="/register" class="text-decoration-none">Daftar</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>