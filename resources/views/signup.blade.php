<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In/Sign Up Form</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
    .text-danger {
        color: red;
    }
    .alert-danger {
        color: red;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 10px;
        margin-top: 10px;
        border-radius: 5px;
    }
</style>

</head>
<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                <form class="form sign-up" action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="input-group">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="name" placeholder="Full Name" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="phone" placeholder="Phone" required>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="address" placeholder="Address" required>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bx-mail-send'></i>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password" placeholder="Password" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <button type="submit">
                    Sign up
                </button>
                <p>
                <span>
                        Already have an account?
                    </span>
                            <b onclick="window.location.href='{{ route('login.user') }}'" class="pointer">Sign in here</b>
                        </p>
            </form>

                </div>
            </div>
            <!-- END SIGN UP -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">
                </div>
                <div class="text sign-up">
                    <br><br>
                <!-- <img src="images/HTPUTIH.png" alt="Join with us" style="width: 60%; height: auto;"><br><br> -->
                <img src="images/tti1.png" alt="Join with us" style="max-width: 50%; height: auto;">
                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>

    <script>
        let container = document.getElementById('container');

        function toggle() {
            container.classList.toggle('sign-up');
            container.classList.toggle('sign-in');
        }

        setTimeout(() => {
            container.classList.add('sign-up');
        }, 200);

        // Display success or error message as an alert
        @if(session('success'))
            alert("{{ session('success') }}");
        @endif

        @if(session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>
</body>

</html>
