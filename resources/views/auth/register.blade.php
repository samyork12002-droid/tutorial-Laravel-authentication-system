<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <div class="relative mt-1">
                <x-text-input id="password" class="block w-full pr-10"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg id="eye-icon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg id="eye-off-icon" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Password Requirements -->
            <div class="mt-2 text-sm">
                <p class="text-gray-600 mb-1">Password must:</p>
                <ul class="space-y-1">
                    <li id="req-length" class="flex items-center text-gray-500">
                        <span class="mr-2">○</span> Be at least 8 characters
                    </li>
                    <li id="req-uppercase" class="flex items-center text-gray-500">
                        <span class="mr-2">○</span> Contain at least one uppercase letter
                    </li>
                    <li id="req-lowercase" class="flex items-center text-gray-500">
                        <span class="mr-2">○</span> Contain at least one lowercase letter
                    </li>
                    <li id="req-number" class="flex items-center text-gray-500">
                        <span class="mr-2">○</span> Contain at least one number
                    </li>
                    <li id="req-special" class="flex items-center text-gray-500">
                        <span class="mr-2">○</span> Contain at least one special character
                    </li>
                </ul>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <div class="relative mt-1">
                <x-text-input id="password_confirmation" class="block w-full pr-10"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                <button type="button" id="toggle-password-confirmation" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg id="eye-icon-confirm" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg id="eye-off-icon-confirm" class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <!-- Password Match Indicator -->
            <div id="password-match" class="mt-2 text-sm hidden">
                <span class="flex items-center">
                    <span id="match-icon" class="mr-2">○</span>
                    <span id="match-text">Passwords match</span>
                </span>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            const passwordMatchDiv = document.getElementById('password-match');
            const matchIcon = document.getElementById('match-icon');
            const matchText = document.getElementById('match-text');

            // Toggle password visibility
            const togglePassword = document.getElementById('toggle-password');
            const eyeIcon = document.getElementById('eye-icon');
            const eyeOffIcon = document.getElementById('eye-off-icon');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                eyeIcon.classList.toggle('hidden');
                eyeOffIcon.classList.toggle('hidden');
            });

            // Toggle confirm password visibility
            const togglePasswordConfirm = document.getElementById('toggle-password-confirmation');
            const eyeIconConfirm = document.getElementById('eye-icon-confirm');
            const eyeOffIconConfirm = document.getElementById('eye-off-icon-confirm');

            togglePasswordConfirm.addEventListener('click', function() {
                const type = passwordConfirmation.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordConfirmation.setAttribute('type', type);
                eyeIconConfirm.classList.toggle('hidden');
                eyeOffIconConfirm.classList.toggle('hidden');
            });

            // Requirement elements
            const reqLength = document.getElementById('req-length');
            const reqUppercase = document.getElementById('req-uppercase');
            const reqLowercase = document.getElementById('req-lowercase');
            const reqNumber = document.getElementById('req-number');
            const reqSpecial = document.getElementById('req-special');

            function updateRequirement(element, met) {
                const icon = element.querySelector('span');
                if (met) {
                    icon.textContent = '✓';
                    element.classList.remove('text-gray-500', 'text-red-500');
                    element.classList.add('text-green-600');
                } else {
                    icon.textContent = '○';
                    element.classList.remove('text-green-600', 'text-red-500');
                    element.classList.add('text-gray-500');
                }
            }

            function checkPasswordRequirements(password) {
                updateRequirement(reqLength, password.length >= 8);
                updateRequirement(reqUppercase, /[A-Z]/.test(password));
                updateRequirement(reqLowercase, /[a-z]/.test(password));
                updateRequirement(reqNumber, /[0-9]/.test(password));
                updateRequirement(reqSpecial, /[!@#$%^&*(),.?":{}|<>]/.test(password));
            }

            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirmation = passwordConfirmation.value;

                if (confirmation.length > 0) {
                    passwordMatchDiv.classList.remove('hidden');
                    if (password === confirmation) {
                        matchIcon.textContent = '✓';
                        matchText.textContent = 'Passwords match';
                        matchText.classList.remove('text-red-500');
                        matchText.classList.add('text-green-600');
                    } else {
                        matchIcon.textContent = '✗';
                        matchText.textContent = 'Passwords do not match';
                        matchText.classList.remove('text-green-600');
                        matchText.classList.add('text-red-500');
                    }
                } else {
                    passwordMatchDiv.classList.add('hidden');
                }
            }

            passwordInput.addEventListener('input', function() {
                checkPasswordRequirements(this.value);
                checkPasswordMatch();
            });

            passwordConfirmation.addEventListener('input', checkPasswordMatch);
        });
    </script>
</x-guest-layout>
