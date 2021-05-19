<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <html>
<head>
<style>
.myDiv {
  border: 3px outset red;
  background-color: lightblue;
  margin-left: 30px;
  text-align: center    ;
  display: block;


}
.head{
    text-align: left;
    margin-top: 25px;
    margin-left: 30px;

}
.ml-4{
    background-color: #008CBA;
    text-align: center;
    margin-left: 30px;
    text-decoration: none;
    cursor: pointer;
    padding: 10px 25px;
    font-size: 16px;
    border: 2px solid #4CAF50;

}
.ml-4:hover{
    background-color: #008CBA;
  color: white;  
  
}
.vl {
  border-left: 2px solid green;
  height: 200px;
  position: absolute;
  left: 40%;
  margin-left: -150px;
  margin-top: 120px;
  top: 0;
} 


.face{
   
margin-top:-150px;
  margin-bottom: 100px;
  margin-right: 20px;
  margin-left: 650px;
   
}
.gface{
   
   margin-top:-200px;
     margin-bottom: 100px;
     margin-right: 30px;
     margin-left: 600px;
      
   }
.mt-4{
    font-weight:bold;
    margin-top: 5px;
    margin-left: 30px;
}
.reg{
    background-color: #008CBA;
    text-align: left;
    margin-left: 60px;
    padding: 5px 10px;
    font-size: 20px;
    text-decoration: none;
   

}
</style>
</head>
<body>

<div class="myDiv">
  <h2>Customer portal</h2>
</div>



        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

          <div class="head">
            <h3> Login </h3>
            <p style="color:blue;">Enter your email address and Password to login.</p>
          </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <br>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>
            
            <br>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" /> 
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{( __('(Forgot?)')) }}
                </a>
                <br>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <br>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">  
                </a>
                @endif
            
              

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button> 
                

              

            </div>
<br>
<div class="vl"></div>

            {{-- Login with Facebook --}}
            <div class="face">
                <a class="btn" href="{{ url('auth/facebook') }}"
                    style="background: #3B5499; color: #ffffff; padding: 10px; width: 20%; 
                    text-align: center; display: block; border-radius:2px;">
                    Login with Facebook
                </a>
            </div>
            <div class="gface">
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                </a>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<br>
<br>
<br>
  <div>
                <p style="color:blue; margin-left: 30px;"> Need an account?</p>
                </div>
                <div>
                <x-jet-button class="reg">
             <a href="{{ url('register') }}"> <strong> Register</strong></a>
                </x-jet-button> 
                 </div>
</body>
</html>