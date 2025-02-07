<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 gradient-bg">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-40 left-40 w-80 h-80 bg-yellow-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-float" style="animation-delay: 4s;"></div>
    </div>
    
    <div class="glass-effect rounded-2xl shadow-2xl w-full max-w-md p-8 relative z-10">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-white mb-2">Create Account</h1>
            <p class="text-gray-200">Join us to get started</p>
        </div>

        <form id="signUpForm" action="/signup" method="POST" class="space-y-6">
            <div class="space-y-4">
                <!-- Full Name Input -->
                <div class="relative">
                    <input type="text" name="name" placeholder="Full Name" 
                        class="w-full px-4 py-3 bg-white bg-opacity-20 rounded-lg text-white placeholder-gray-300
                        border border-white border-opacity-30 focus:outline-none focus:border-white
                        transition duration-200" required>
                </div>

                <!-- Email Input -->
                <div class="relative">
                    <input type="email" name="email" placeholder="Email Address" 
                        class="w-full px-4 py-3 bg-white bg-opacity-20 rounded-lg text-white placeholder-gray-300
                        border border-white border-opacity-30 focus:outline-none focus:border-white
                        transition duration-200" required>
                </div>

                <!-- Password Input -->
                <div class="relative">
                    <input type="password" name="password" placeholder="Password" 
                        class="w-full px-4 py-3 bg-white bg-opacity-20 rounded-lg text-white placeholder-gray-300
                        border border-white border-opacity-30 focus:outline-none focus:border-white
                        transition duration-200" required>
                </div>

                <div class="relative">
                    <input type="password" name="npassword" placeholder="Password" 
                        class="w-full px-4 py-3 bg-white bg-opacity-20 rounded-lg text-white placeholder-gray-300
                        border border-white border-opacity-30 focus:outline-none focus:border-white
                        transition duration-200" required>
                </div>
                

            </div>

            <button type="submit" 
                class="w-full bg-white text-indigo-600 py-3 px-4 rounded-lg font-semibold
                hover:bg-opacity-90 transform transition duration-200 hover:scale-[1.02]
                focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                Create Account
            </button>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-200">
                    Already have an account? 
                    <a href="/login" class="font-medium text-white hover:text-gray-100">Sign in</a>
                </p>
            </div>
        </form>
    </div>
</body>
</html>